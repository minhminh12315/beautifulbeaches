<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Beaches extends Model
{
    use HasFactory;
    protected $fillable = ['name', 'city_id', 'description', 'image', 'status'];
    
    public function city()
    {
        return $this->belongsTo(Cities::class);
    }
    public function beachImages()
    {
        return $this->hasMany(BeachImages::class);
    }
    public function blogs()
    {
        return $this->hasMany(Blogs::class);
    }
}
