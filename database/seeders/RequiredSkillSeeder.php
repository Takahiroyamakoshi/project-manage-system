<?php

namespace Database\Seeders;

use App\Models\RequiredSkill;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RequiredSkillSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        RequiredSkill::create([
            'project_info_id' => 1,
            'key_word_id' => 1,
            'experience_years' => '1年以上',
            'remark' => '',
        ]);

        RequiredSkill::create([
            'project_info_id' => 1,
            'key_word_id' => 3,
            'experience_years' => '1年以上',
            'remark' => '',
        ]);

        RequiredSkill::create([
            'project_info_id' => 1,
            'key_word_id' => 6,
            'experience_years' => '1年以上',
            'remark' => '',
        ]);
    }
}
