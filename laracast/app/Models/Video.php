<?php

namespace App\Models;

use Exception;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\File;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Storage;
use ProtoneMedia\LaravelFFMpeg\Support\FFMpeg;

use Owenoj\LaravelGetId3\GetId3;

class Video extends Model
{
    use HasFactory;

    public function episode()
    {
        return $this->hasOne(Episode::class);
    }

    // public function getDuration()
    // {
    //     $course = $this->episode->course;
    //     $episode = $this->episode;
    //     if ($course == null || $episode == null) {
    //         return;
    //     }

    //     $video = FFMpeg::fromDisk('dropbox')->open($course->slug . '/' . $course->slug . '-' . sprintf("%02d", $episode->number) . '-' . slugify($episode->title, "-") . '.mp4');

    //     $duration = 0;
    //     error_log($course->slug . '/' . $course->slug . '-' . sprintf("%02d", $episode->number) . '-' . slugify($episode->title, "-") . '.mp4');
    //     $duration = $video->getDurationInSeconds();
    //     error_log($episode->number . '  ' . $duration);

    //     return $duration;
    // }

    //     public function getDuration()
    //     {
    //         $course = $this->episode->course;
    //         $episode = $this->episode;
    //         if ($course == null || $episode == null) {
    //             return;
    //         }
    //         error_log('1');
    //         $video = GetId3::fromDiskAndPath('dropbox', $course->slug . '/' . $course->slug . '-' . sprintf("%02d", $episode->number) . '-' . slugify($episode->title, "-") . '.mp4');
    //         error_log('2');
    //         return $video->getPlaytime();
    //     }
    // }

}
