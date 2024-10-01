<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BlogSection extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'description',
        'blog_id',
    ];

    public function blog(){
        return $this->belongsTo(Blogs::class, 'blog_id');
    }

    public function blogImages(){
        return $this->hasMany(BlogImage::class);
    }
    
}
