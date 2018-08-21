<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades;

class AdminUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');
        DB::table('users')->truncate();

        DB::table('users')->insert([
            'name' => 'Admin',
            'email' => 'admin@example.com',
            'password' => Hash::make('admin'),
            'address' => '',
            'state_id' => 1,
            'district_id' => 1,
            'area_id' => 1,
            'co_ordinates' => '',
            'phone_no' => '1234567890',
            'gender' => '',
            'age' => 0,
            'verified' => 1,
        ]);

        DB::statement('SET FOREIGN_KEY_CHECKS=1;');
    }
}
