<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert([
            [
                'name' => 'Admin User',
                'username' => 'admin',
                'phone' => '0244889966',
                'email' => 'admin@localhost.com',
                'password' => bcrypt('admin.password'),
                'role' => 'admin',
                'status' => 'active',
                'created_at'=> now(),
                'updated_at'=> now()
            ],
            [
                'name' => 'Vendor User',
                'username' => 'vendor',
                'phone' => '0244112255',
                'email' => 'vendor@localhost.com',
                'password' => bcrypt('vendor.password'),
                'role' => 'vendor',
                'status' => 'active',
                'created_at'=> now(),
                'updated_at'=> now()
            ],
            [
                'name' => 'Normal User',
                'username' => 'user',
                'phone' => '0244889999',
                'email' => 'normal@localhost.com',
                'password' => bcrypt('normal.password'),
                'role' => 'user',
                'status' => 'active',
                'created_at'=> now(),
                'updated_at'=> now()
            ]
        ]);
    }
}
