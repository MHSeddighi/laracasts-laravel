<?php

namespace Database\Seeders;

use App\Models\Description;
use App\Models\Developer;
use App\Models\Link;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            ImageSeeder::class,
            UserSeeder::class,
            TutorSeeder::class,
            Developer::class,
            Course::class,
            Description::class,
            Link::class,
        ]);
    }
}
