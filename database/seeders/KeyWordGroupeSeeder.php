<?php

namespace Database\Seeders;

use App\Models\KeyWordGroupe;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class KeyWordGroupeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        KeyWordGroupe::create([
            'name' => '言語',
        ]);
        KeyWordGroupe::create([
            'name' => 'フレームワーク',
        ]);
        KeyWordGroupe::create([
            'name' => 'ツール',
        ]);
        KeyWordGroupe::create([
            'name' => 'DB',
        ]);
    }
}
