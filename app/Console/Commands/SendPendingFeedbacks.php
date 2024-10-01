<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Models\PendingFeedback;
use Illuminate\Support\Facades\Mail;
use App\Mail\FeedbackReceived;

class SendPendingFeedbacks extends Command
{
    protected $signature = 'feedback:send';
    protected $description = 'Send pending feedback emails';

    public function __construct()
    {
        parent::__construct();
    }

    public function handle()
    {
        $feedbacks = PendingFeedback::where('is_sent', false)->take(100)->get();

        $pendingFeedbackCount = $feedbacks->count();
        $this->info("Total pending feedbacks in this batch: $pendingFeedbackCount");

        if ($pendingFeedbackCount === 0) {
            $this->info('No pending feedbacks to send.');
        }

        foreach ($feedbacks as $feedback) {
            try {
                // Gửi email
                Mail::to($feedback->email)->send(new FeedbackReceived($feedback->name));

                // Xóa phản hồi khỏi bảng chờ sau khi gửi thành công
                $feedback->delete();

                $this->info("Feedback sent and deleted for: {$feedback->email}");
            } catch (\Exception $e) {
                $this->error("Failed to send feedback to: {$feedback->email}. Error: " . $e->getMessage());
                // Có thể chọn đánh dấu phản hồi này là lỗi hoặc ghi log lỗi để xử lý sau
            }
        }

        $this->info('Batch of pending feedbacks has been processed.');
    }
}
