<?php

namespace Database\Seeders;

use App\Models\episode;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Storage;

class EpisodeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $json=Storage::disk('local')->get('/json/episodes.json');
        $episodes=json_decode($json);
        foreach($episodes as $k=>$episode){
            episode::query()->updateOrCreate([
                "id"=>$episode->id,
                "title" =>$episode->title,
                "number"=>$episode->number,
                "description"=>$episode->description,
                "section_id"=>$episode->section_id,
                "course_id"=>$episode->course_id,
                "is_public"=> $episode->is_public,
                "video_id"=> $episode->video_id
            ]);
        }
    }
}
