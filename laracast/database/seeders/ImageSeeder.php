<?php

namespace Database\Seeders;

use App\Models\Image;
use Database\Factories\ImageFactory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Storage;

class ImageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $json=Storage::disk('local')->get('/json/images.json');
        $images=json_decode($json,true);
        foreach($images as $image){
            Image::create([
                "id"=>$image['id'],
                "src" => $image['src']
            ]);
        }

    }
}
