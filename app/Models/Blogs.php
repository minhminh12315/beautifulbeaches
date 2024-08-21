<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blogs extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'content',
        'beach_id',
        'user_id',
    ];

    public function beach(){
        return $this->belongsTo(Beaches::class);
    }

}
