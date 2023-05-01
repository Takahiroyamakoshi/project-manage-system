<?php

namespace Database\Seeders;

use App\Models\DesiredKeyWord;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DesiredKeyWordSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DesiredKeyWord::create([
            'desired_project_id' => 1,
            'key_word_id' => 1
        ]);

        DesiredKeyWord::create([
            'desired_project_id' => 1,
            'key_word_id' => 2
        ]);

        DesiredKeyWord::create([
            'desired_project_id' => 1,
            'key_word_id' => 3
        ]);

        DesiredKeyWord::create([
            'desired_project_id' => 1,
            'key_word_id' => 4
        ]);

        DesiredKeyWord::create([
            'desired_project_id' => 1,
            'key_word_id' => 6
        ]);

        DesiredKeyWord::create([
            'desired_project_id' => 1,
            'key_word_id' => 7
        ]);

    }
}
