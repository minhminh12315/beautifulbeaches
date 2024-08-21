<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BeachSection extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'description',
        'beach_id',
        'status',
        'type',
        'image',
    ];

    public function beach()
    {
        return $this->belongsTo(Beaches::class, 'beach_id');
    }

    public function beachImages()
    {
        return $this->hasMany(BeachImages::class);
    }

}
