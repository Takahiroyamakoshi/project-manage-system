<?php

namespace Database\Seeders;

use App\Models\KeyWordGroup;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class KeyWordGroupSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        KeyWordGroup::create([
            'name' => '言語',
        ]);
        KeyWordGroup::create([
            'name' => 'フレームワーク',
        ]);
        KeyWordGroup::create([
            'name' => 'ツール',
        ]);
        KeyWordGroup::create([
            'name' => 'DB',
        ]);
    }
}
