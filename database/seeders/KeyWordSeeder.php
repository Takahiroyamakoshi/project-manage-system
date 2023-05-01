<?php

namespace Database\Seeders;

use App\Models\KeyWord;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class KeyWordSeeder extends Seeder
{
    private const LANGUAGE_ID = 1;
    private const FRAMEWORK_ID = 2;
    private const TOOL_ID = 3;
    private const WORKING_STYLE_ID = 4; 
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        KeyWord::create([
            'name' => 'php',
            'key_word_group_id' => self::LANGUAGE_ID
        ]);

        KeyWord::create([
            'name' => 'Java',
            'key_word_group_id' => self::LANGUAGE_ID
        ]);

        KeyWord::create([
            'name' => 'Laravel',
            'key_word_group_id' => self::FRAMEWORK_ID
        ]);

        KeyWord::create([
            'name' => 'springboot',
            'key_word_group_id' => self::FRAMEWORK_ID
        ]);

        KeyWord::create([
            'name' => 'AWS',
            'key_word_group_id' => self::TOOL_ID
        ]);

        KeyWord::create([
            'name' => 'Docker',
            'key_word_group_id' => self::TOOL_ID
        ]);

        KeyWord::create([
            'name' => 'リモートワーク',
            'key_word_group_id' => self::WORKING_STYLE_ID
        ]);

        KeyWord::create([
            'name' => '週5日出勤',
            'key_word_group_id' => self::WORKING_STYLE_ID
        ]);
        
        KeyWord::create([
            'name' => '週3日出勤',
            'key_word_group_id' => self::WORKING_STYLE_ID
        ]);
    }
}
