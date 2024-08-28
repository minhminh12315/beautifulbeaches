<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Beaches extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'description',
        'city_id',
        'status',
        'type',
        'image',
        'updated_at',
    ];
    public function city()
    {
        return $this->belongsTo(Cities::class, 'city_id');
    }
    public function beachImages()
    {
        return $this->hasMany(BeachImages::class);
    }
    public function blogs()
    {
        return $this->hasMany(Blogs::class);
    }
    public function beachSections()
    {
        return $this->hasMany(BeachSection::class, 'beach_id');
    }
}
