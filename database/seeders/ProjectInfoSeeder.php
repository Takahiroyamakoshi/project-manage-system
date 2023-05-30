<?php

namespace Database\Seeders;

use App\Models\ProjectInfo;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProjectInfoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        ProjectInfo::create([
            'higher_company' => 'レプラホーン株式会社',
            'project_overview' => 'testtesttest',
            'detail' => 'testtesttest',
            'environment' => 'test,test,test',
            'skill' => 'hogehogehoge',
            'work_place' => '東京都墨田池袋',
            'remark' => 'testtesttest',
        ]);
    }
}
