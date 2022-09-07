<?php

namespace Database\Seeders;

use App\Models\Link;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Storage;

class LinkSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $json=Storage::disk('local')->get('/json/link.json');
        $links=json_decode($json);
        foreach($links as $k=>$link){
            Link::query()->updateOrCreate([
                "id"=>$link->id,
                "url" => $link->url,
                "source"=>$link->source,
                "linkable_id"=>$link->linkable_id,
                "linkable_type"=>$link->linkable_type
            ]);
        }
    }
}
