<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Episode extends Model
{
    use HasFactory;

    public function video()
    {
        return $this->belongsTo(Video::class);
    }

    public function link()
    {
        return $this->morphOne(Link::class, 'linkable');
    }

    public function comments()
    {
        return $this->morphMany(Comment::class, 'commentable');
    }

    public function section()
    {
        return $this->hasOne(Section::class);
    }

    public function course()
    {
        return $this->belongsTo(Course::class);
    }

    public function watches()
    {
        return $this->belongsToMany(User::class,'watches')->withPivot('percent')->using(Watch::class);
    }
}