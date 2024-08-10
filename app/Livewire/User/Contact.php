<?php
namespace App\Livewire\User;

use Livewire\Attributes\Validate;
use Livewire\Component;
use App\Models\PendingFeedback; // Sử dụng mô hình PendingFeedback
use Illuminate\Support\Facades\Mail;
use App\Mail\FeedbackReceived;

class Contact extends Component
{
    #[Validate('required')]
    public $name;
    #[Validate('required')]
    public $email;
    #[Validate('required')]
    public $content;

    public function feedback()
    {
        $this->validate();

        // Lưu feedback vào bảng pending_feedbacks
        PendingFeedback::create([
            'name' => $this->name,
            'email' => $this->email,
            'content' => $this->content,
        ]);

        $this->dispatch('swalsuccess', [
            'title' => 'Thanks!',
            'text' => 'Thank you for your feedback!',
            'icon' => 'success',
        ]);

        // Reset form fields
        $this->reset(['name', 'email', 'content']);
    }

    public function render()
    {
        return view('livewire.user.contact');
    }
}
