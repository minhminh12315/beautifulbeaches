<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BeachImages extends Model
{
    use HasFactory;
    protected $table = "beach_images";
    protected $fillable = [
        'path',
        'beach_section_id',
    ];
    public function beachSection()
    {
        return $this->belongsTo(BeachSection::class, 'beach_section_id');
    }

}
