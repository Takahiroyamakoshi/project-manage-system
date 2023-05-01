<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

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
