<?php

namespace Database\Seeders;

use App\Models\Role;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Role::create([
            'name' => '営業',
        ]);

        Role::create([
            'name' => 'SE',
        ]);

        Role::create([
            'name' => '管理者',
        ]);
    }
}
