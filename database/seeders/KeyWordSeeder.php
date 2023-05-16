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
        // 言語
        KeyWord::create([
            'name' => 'HTML',
            'key_word_group_id' => self::LANGUAGE_ID
        ]);
        KeyWord::create([
            'name' => 'CSS',
            'key_word_group_id' => self::LANGUAGE_ID
        ]);
        KeyWord::create([
            'name' => 'Java',
            'key_word_group_id' => self::LANGUAGE_ID
        ]);
        KeyWord::create([
            'name' => 'JavaScript',
            'key_word_group_id' => self::LANGUAGE_ID
        ]);
        KeyWord::create([
            'name' => 'C言語',
            'key_word_group_id' => self::LANGUAGE_ID
        ]);
        KeyWord::create([
            'name' => 'C#',
            'key_word_group_id' => self::LANGUAGE_ID
        ]);
        KeyWord::create([
            'name' => 'php',
            'key_word_group_id' => self::LANGUAGE_ID
        ]);
        KeyWord::create([
            'name' => 'Ruby',
            'key_word_group_id' => self::LANGUAGE_ID
        ]);
        KeyWord::create([
            'name' => 'Perl',
            'key_word_group_id' => self::LANGUAGE_ID
        ]);
        KeyWord::create([
            'name' => 'Swift',
            'key_word_group_id' => self::LANGUAGE_ID
        ]);
        KeyWord::create([
            'name' => 'R言語',
            'key_word_group_id' => self::LANGUAGE_ID
        ]);
        KeyWord::create([
            'name' => 'Python',
            'key_word_group_id' => self::LANGUAGE_ID
        ]);
        KeyWord::create([
            'name' => 'Scala',
            'key_word_group_id' => self::LANGUAGE_ID
        ]);
        KeyWord::create([
            'name' => 'TypeScript',
            'key_word_group_id' => self::LANGUAGE_ID
        ]);
        KeyWord::create([
            'name' => 'GO',
            'key_word_group_id' => self::LANGUAGE_ID
        ]);
        KeyWord::create([
            'name' => 'VisualBasic.NET',
            'key_word_group_id' => self::LANGUAGE_ID
        ]);

        //フレームワーク
        KeyWord::create([
            'name' => 'Foundation',
            'key_word_group_id' => self::FRAMEWORK_ID
        ]);
        KeyWord::create([
            'name' => 'Bootstrap',
            'key_word_group_id' => self::FRAMEWORK_ID
        ]);
        KeyWord::create([
            'name' => 'UIkit',
            'key_word_group_id' => self::FRAMEWORK_ID
        ]);
        KeyWord::create([
            'name' => 'Spring Framework',
            'key_word_group_id' => self::FRAMEWORK_ID
        ]);
        KeyWord::create([
            'name' => 'Play Framework',
            'key_word_group_id' => self::FRAMEWORK_ID
        ]);
        KeyWord::create([
            'name' => 'JSF',
            'key_word_group_id' => self::FRAMEWORK_ID
        ]);
        KeyWord::create([
            'name' => 'Vue.js',
            'key_word_group_id' => self::FRAMEWORK_ID
        ]);
        KeyWord::create([
            'name' => 'React',
            'key_word_group_id' => self::FRAMEWORK_ID
        ]);
        KeyWord::create([
            'name' => 'AngularJS',
            'key_word_group_id' => self::FRAMEWORK_ID
        ]);
        KeyWord::create([
            'name' => 'Treefrog',
            'key_word_group_id' => self::FRAMEWORK_ID
        ]);
        KeyWord::create([
            'name' => 'CSpec',
            'key_word_group_id' => self::FRAMEWORK_ID
        ]);
        KeyWord::create([
            'name' => 'Cmockery',
            'key_word_group_id' => self::FRAMEWORK_ID
        ]);
        KeyWord::create([
            'name' => '.NET',
            'key_word_group_id' => self::FRAMEWORK_ID
        ]);
        KeyWord::create([
            'name' => 'Blazor',
            'key_word_group_id' => self::FRAMEWORK_ID
        ]);
        KeyWord::create([
            'name' => 'Laravel',
            'key_word_group_id' => self::FRAMEWORK_ID
        ]);
        KeyWord::create([
            'name' => 'CakePHP',
            'key_word_group_id' => self::FRAMEWORK_ID
        ]);
        KeyWord::create([
            'name' => 'Symfony',
            'key_word_group_id' => self::FRAMEWORK_ID
        ]);
        KeyWord::create([
            'name' => 'FuelPHP',
            'key_word_group_id' => self::FRAMEWORK_ID
        ]);
        KeyWord::create([
            'name' => 'Ruby on Rails',
            'key_word_group_id' => self::FRAMEWORK_ID
        ]);
        KeyWord::create([
            'name' => 'Sinatra',
            'key_word_group_id' => self::FRAMEWORK_ID
        ]);
        KeyWord::create([
            'name' => 'cuba microframework',
            'key_word_group_id' => self::FRAMEWORK_ID
        ]);
        KeyWord::create([
            'name' => 'Mojolicios',
            'key_word_group_id' => self::FRAMEWORK_ID
        ]);
        KeyWord::create([
            'name' => 'Catalyst',
            'key_word_group_id' => self::FRAMEWORK_ID
        ]);
        KeyWord::create([
            'name' => 'Dancer',
            'key_word_group_id' => self::FRAMEWORK_ID
        ]);
        KeyWord::create([
            'name' => 'Ark',
            'key_word_group_id' => self::FRAMEWORK_ID
        ]);
        KeyWord::create([
            'name' => 'Perfect',
            'key_word_group_id' => self::FRAMEWORK_ID
        ]);
        KeyWord::create([
            'name' => 'Slimane',
            'key_word_group_id' => self::FRAMEWORK_ID
        ]);
        KeyWord::create([
            'name' => 'Swifton',
            'key_word_group_id' => self::FRAMEWORK_ID
        ]);
        KeyWord::create([
            'name' => 'Swift Express',
            'key_word_group_id' => self::FRAMEWORK_ID
        ]);
        KeyWord::create([
            'name' => 'Django',
            'key_word_group_id' => self::FRAMEWORK_ID
        ]);
        KeyWord::create([
            'name' => 'bottle',
            'key_word_group_id' => self::FRAMEWORK_ID
        ]);
        KeyWord::create([
            'name' => 'Flask',
            'key_word_group_id' => self::FRAMEWORK_ID
        ]);
        KeyWord::create([
            'name' => 'Tornado',
            'key_word_group_id' => self::FRAMEWORK_ID
        ]);
        KeyWord::create([
            'name' => 'Plone',
            'key_word_group_id' => self::FRAMEWORK_ID
        ]);
        KeyWord::create([
            'name' => 'Play Framework',
            'key_word_group_id' => self::FRAMEWORK_ID
        ]);
        KeyWord::create([
            'name' => 'Finatra',
            'key_word_group_id' => self::FRAMEWORK_ID
        ]);
        KeyWord::create([
            'name' => 'Skinny Framework',
            'key_word_group_id' => self::FRAMEWORK_ID
        ]);
        KeyWord::create([
            'name' => 'Lift',
            'key_word_group_id' => self::FRAMEWORK_ID
        ]);
        KeyWord::create([
            'name' => 'Flask',
            'key_word_group_id' => self::FRAMEWORK_ID
        ]);
        KeyWord::create([
            'name' => 'Next.js',
            'key_word_group_id' => self::FRAMEWORK_ID
        ]);
        KeyWord::create([
            'name' => 'Nuxt.js',
            'key_word_group_id' => self::FRAMEWORK_ID
        ]);
        KeyWord::create([
            'name' => 'TypeScript',
            'key_word_group_id' => self::FRAMEWORK_ID
        ]);
        KeyWord::create([
            'name' => 'NestJS',
            'key_word_group_id' => self::FRAMEWORK_ID
        ]);
        KeyWord::create([
            'name' => 'Echo',
            'key_word_group_id' => self::FRAMEWORK_ID
        ]);
        KeyWord::create([
            'name' => 'Revel',
            'key_word_group_id' => self::FRAMEWORK_ID
        ]);
        KeyWord::create([
            'name' => 'Gin',
            'key_word_group_id' => self::FRAMEWORK_ID
        ]);
        KeyWord::create([
            'name' => 'Beego',
            'key_word_group_id' => self::FRAMEWORK_ID
        ]);
        KeyWord::create([
            'name' => 'Excel VBA Framework',
            'key_word_group_id' => self::FRAMEWORK_ID
        ]);
        KeyWord::create([
            'name' => 'VbaUnit',
            'key_word_group_id' => self::FRAMEWORK_ID
        ]);
        KeyWord::create([
            'name' => 'VB Lite Unit',
            'key_word_group_id' => self::FRAMEWORK_ID
        ]);
        KeyWord::create([
            'name' => 'xlUnit',
            'key_word_group_id' => self::FRAMEWORK_ID
        ]);

        // ツール
        KeyWord::create([
            'name' => 'AWS',
            'key_word_group_id' => self::TOOL_ID
        ]);
        KeyWord::create([
            'name' => 'Docker',
            'key_word_group_id' => self::TOOL_ID
        ]);
        KeyWord::create([
            'name' => 'A5M2',
            'key_word_group_id' => self::TOOL_ID
        ]);
        KeyWord::create([
            'name' => 'PostgreSQL',
            'key_word_group_id' => self::TOOL_ID
        ]);
        KeyWord::create([
            'name' => 'Oracle Database',
            'key_word_group_id' => self::TOOL_ID
        ]);
        KeyWord::create([
            'name' => 'MongoDB',
            'key_word_group_id' => self::TOOL_ID
        ]);
        KeyWord::create([
            'name' => 'Microsoft Access',
            'key_word_group_id' => self::TOOL_ID
        ]);
        KeyWord::create([
            'name' => 'Microsoft SQL Server',
            'key_word_group_id' => self::TOOL_ID
        ]);
        KeyWord::create([
            'name' => 'FileMaker',
            'key_word_group_id' => self::TOOL_ID
        ]);
        KeyWord::create([
            'name' => 'MySQL',
            'key_word_group_id' => self::TOOL_ID
        ]);
        KeyWord::create([
            'name' => 'SQLite',
            'key_word_group_id' => self::TOOL_ID
        ]);
        KeyWord::create([
            'name' => 'IndexedDB',
            'key_word_group_id' => self::TOOL_ID
        ]);
        KeyWord::create([
            'name' => 'Web SQL',
            'key_word_group_id' => self::TOOL_ID
        ]);

        // 勤務形態
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
