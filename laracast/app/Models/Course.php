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

    public function episodes(){
        return $this->hasMany(Episode::class);
    }

    public function links(){
        return $this->morphMany(Link::class,'linkable');
    }

    public function image(){
        return $this->hasOne(Image::class);
    }

    public function users_watchlist(){
        return $this->belongsToMany(User::class);
    }

    public function totur(){
        return $this->hasOne(Totur::class);
    }

    public function users_participant(){
        return $this->belongsToMany(User::class);
    }
}
