<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Episode extends Model
{
    use HasFactory;

    public function video(){
        return $this->hasOne(Video::class);
    }

    public function link(){
        return $this->morphOne(Link::class,'linkalbe');
    }

    public function comments(){
        return $this->morphMany(Comment::class,'commentable');
    }

    public function section(){
        return $this->hasOne(Section::class);
    }
}
