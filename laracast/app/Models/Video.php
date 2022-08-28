<?php

namespace App\Models;

use Exception;
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
        //        exists("laracast/learn-laravel-forge-2022-Edition/learn-laravel-forge-2022-Edition-01-what-is-laravel-forge.mp4")
        $course = $this->episode->course;
        $episode = $this->episode;
        // dd($episode . $course);
        if ($course == null || $episode == null) {
            return;
        }
        error_log('salam');

        $video = FFMpeg::fromDisk('dropbox')->open($course->slug . '/' . $course->slug . '-' . sprintf("%02d", $episode->number) . '-' . slugify($episode->title, "-") . '.mp4');
        //    $video=FFMpeg::openUrl("https://www.dropbox.com/s/a3fgru2wbtdpjyj/learn-laravel-forge-2022-Edition-01-what-is-laravel-forge.mp4?dl=0");
        $duration = 0;

        $duration = $video->export()->getDurationInMiliseconds();
        error_log($episode->number . '  ' . $duration);

        return $duration;
    }
}
