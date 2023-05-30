<?php

namespace Database\Seeders;

use App\Models\AttendInfo;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

use function Ramsey\Uuid\v1;

class AttendInfoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        AttendInfo::create([
            'project_info_id' => 1,
            'user_id' => 1,
            'attend_propriety' => null,
            'state_date' => null,
            'end_date' => null,
            'hold_reason' => null,
        ]);
    }
}
