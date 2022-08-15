<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Storage;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $json=Storage::disk('local')->get('/json/users.json');
        $users=json_decode($json);
        foreach($users as $k=>$user){
            User::query()->updateOrCreate([
                "id" => $user->id,
                "name"=>$user->name,
                "username"=>$user->username,
                "email"=>$user->email,
                "password"=>$user->password,
                "introduction"=>$user->introduction,
                "score"=>$user->score,
                "userable_type"=>$user->userable_type,
                "userable_id"=>$user->userable_id,
                "image_id"=>$user->image_id
            ]);
        }
    }
}
