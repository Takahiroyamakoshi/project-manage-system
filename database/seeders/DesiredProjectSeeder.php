<?php

namespace Database\Seeders;

use App\Models\DesiredProject;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DesiredProjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DesiredProject::create([
            'user_id' => 1,
            'commuting_limit' => '1時間以内',
        ]);
    }
}
