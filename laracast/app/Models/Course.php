<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'length',
        'description',
        'difficulty',
    ];

    public function videos(){
        return $this->hasMany(Video::class);
    }

    public function links(){
        return $this->hasMany(Link::class);
    }

    public function comments(){
        return $this->morphMany(Comment::class);
    }

    public function image(){
        return $this->hasOne(Image::class);
    }

}
