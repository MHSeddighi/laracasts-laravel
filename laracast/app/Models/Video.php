<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\File;
use Illuminate\Support\Facades\Storage;
use ProtoneMedia\LaravelFFMpeg\Support\FFMpeg;

class Video extends Model
{
    use HasFactory;

    public function episode()
    {
        return $this->hasOne(Episode::class);
    }

    public function getDuration()
    {
        //        dd(FFmpeg::fromDisk('local')->open('/public/kimia.mp4')->getDurationInMiliseconds());
        //        FFMpeg::fromDisk('dropbox')->open($this->course->slug.$this->episode->number.slugify($this->episode->title,"-"));
        // dd(Storage::disk('dropbox')->allFiles());

        //        exists("laracast/learn-laravel-forge-2022-Edition/learn-laravel-forge-2022-Edition-01-what-is-laravel-forge.mp4")
        // $video = FFMpeg::fromDisk('dropbox')->open("Apps/laracast/learn-laravel-forge-2022-Edition/learn-laravel-forge-2022-Edition-01-what-is-laravel-forge.mp4");
        //        $video=FFMpeg::openUrl("https://www.dropbox.com/s/a3fgru2wbtdpjyj/learn-laravel-forge-2022-Edition-01-what-is-laravel-forge.mp4?dl=0");
        // return $video->getDurationInMiliseconds();
        return 12;
    }
}
