<?php

namespace Database\Seeders;

use App\Models\Course;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Storage;

class CourseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $json=Storage::disk('local')->get('/json/courses.json');
        $courses=json_decode($json,true);
        foreach ($courses as $course){
            Course::query()->updateOrCreate([
                "id"=> $course['id'],
                "title"=>$course['title'],
                "slug"=>slugify($course['title'],'-'),
                "period-of-time"=>$course['period-of-time'] ,
                "description" =>$course['description'],
                "difficulty"=>$course['difficulty'],
                "category"=>$course['category'],
                "image_id"=>$course['image_id'],
                "tutor_id"=> $course['tutor_id']
            ]);
        }

    }
}
