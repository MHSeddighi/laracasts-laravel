<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'username',
        'email',
        'password',
        'google_id',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function userable()
    {
        return $this->morphTo();
    }

    public function image()
    {
        return $this->belongsTo(Image::class);
    }

    public function links()
    {
        return $this->morphMany(Link::class, 'linkable');
    }

    public function comments()
    {
        return $this->morphMany(Comment::class, 'commentable');
    }

    public function courses_watchlist()
    {
        return $this->belongsToMany(Course::class);
    }

    public function questions()
    {
        return $this->hasMany(Question::class);
    }

    public function courses_participant()
    {
        return $this->belongsToMany(Course::class);
    }

    public function watches()
    {
        return $this->belongsToMany(Episode::class,'watches')->withPivot('percent')->using(Watch::class);
    }
}