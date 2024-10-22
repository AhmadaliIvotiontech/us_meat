<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;
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
        DB::table('users')->insert([
            'id' => 1,
            'name' => 'Master Admin',
            'email' => 'masteradmin@green.com',
            'password' => Hash::make('1234'),
            'role_id' => '1',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
        DB::table('users')->insert([
            'id' => 2,
            'name' => 'Vendor',
            'email' => 'vendor@green.com',
            'password' => Hash::make('1234'),
            'role_id' => '3',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
    }
}
