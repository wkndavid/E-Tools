<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * Para tabela seeder ser executada, deve estar neste callback abaixo.
     * 
     * @return void
     */
    public function run()
    {
        $this->call(UserTableSeeder::class);
        $this->call(ActivitySeeder::class);
        $this->call(CourseSeeder::class);
    }
}
