<?php

namespace Database\Seeders;

use App\Models\Section;
use App\Models\Video;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Storage;

class SectionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $json=Storage::disk('local')->get('/json/sections.json');
        $sections=json_decode($json);
        foreach($sections as $k=>$section){
            Section::create([
                "id"=>$section->id,
                "title" => $section->title,
                "number"=>$section->number,
                "course_id"=>$section->course_id
            ]);
        }
    }
}
