<?php

namespace Database\Seeders;

use App\Models\Video;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Storage;
use ProtoneMedia\LaravelFFMpeg\Support\FFMpeg;

class VideoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $json = Storage::disk('local')->get('/json/videos.json');
        $videos = json_decode($json);
        foreach ($videos as $k => $video) {
            Video::query()->updateOrCreate([
                "id" => $video->id,
                "src" => $video->src,
                "duration" => $video->duration
            ]);
        }
    }
}
