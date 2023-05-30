<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'role_id' => 3,
            'name' => 'Yamakoshi',
            'email' => 'takaa@gmail.com',
            'password' => Hash::make('Taka1015'),
        ]);
    }
}
