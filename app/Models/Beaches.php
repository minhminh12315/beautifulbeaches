<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Beaches extends Model
{
    use HasFactory;
    public function city()
    {
        return $this->belongsTo(Cities::class);
    }
    public function beachImages()
    {
        return $this->hasMany(BeachImages::class);
    }
}
