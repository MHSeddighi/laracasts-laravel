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

    public function sections(){
        return $this->hasMany(Section::class);
    }

    public function links(){
        return $this->morphMany(Link::class,'linkable');
    }

    public function image(){
        return $this->belongsTo(Image::class);
    }

    public function users_watchlist(){
        return $this->belongsToMany(User::class);
    }

    public function tutor(){
        return $this->belongsTo(Tutor::class);
    }

    public function users_participant(){
        return $this->belongsToMany(User::class);
    }
}
