<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // DB::table('attend_info')->truncate();
        // DB::table('required_skills')->truncate();
        // DB::table('project_info')->truncate();
        // DB::table('desired_projects')->truncate();
        // DB::table('desired_key_words')->truncate();
        // DB::table('key_words')->truncate();
        // DB::table('key_word_groups')->truncate();
        // DB::table('users')->truncate();
        // DB::table('roles')->truncate();

        $this->call([
            RoleSeeder::class,
            UserSeeder::class,
            KeyWordGroupSeeder::class,
            KeyWordSeeder::class,
            DesiredKeyWordSeeder::class,
            DesiredProjectSeeder::class,
            ProjectInfoSeeder::class,
            RequiredSkillSeeder::class,
            AttendInfoSeeder::class,
        ]);
    }
}
