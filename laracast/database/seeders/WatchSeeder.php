<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Watch;
use Illuminate\Support\Facades\DB;

use Illuminate\Support\Facades\Storage;

class WatchSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $json=Storage::disk('local')->get('/json/watches.json');
        $watches=json_decode($json);
        foreach ($watches as $k => $watch) {
            DB::table('watches')->insertOrIgnore([
                'episode_id'=>$watch->episode_id,
                'user_id'=>$watch->user_id,
                'percent'=>$watch->percent
            ]);       
        }
    }
}
