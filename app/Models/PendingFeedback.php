<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PendingFeedback extends Model
{
    use HasFactory;

    protected $table = 'pending_feedbacks'; // Tên bảng

    // Nếu bảng sử dụng khóa chính khác hoặc không có auto-increment
    // protected $primaryKey = 'id';
    // public $incrementing = false;
    // protected $keyType = 'string';

    // Định nghĩa các thuộc tính có thể được gán
    protected $fillable = [
        'name',
        'email',
        'content',
        'is_sent',
    ];

    // Nếu bạn không muốn Laravel tự động cập nhật timestamps
    // public $timestamps = false;
}
