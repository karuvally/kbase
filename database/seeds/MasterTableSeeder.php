<?php

use Illuminate\Database\Seeder;

class MasterTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');

        DB::table('areas')->truncate();
        DB::table('districts')->truncate();
        DB::table('states')->truncate();

        DB::table('states')->insert([
            'id' => 1,
            'name' => 'Kerala',
        ]);

        DB::table('districts')->insert([
            ['id' => 1, 'name' => 'Thiruvananthapuram', 'state_id' => 1],
            ['id' => 2, 'name' => 'Pathanamthitta', 'state_id' => 1],
            ['id' => 3, 'name' => 'Alappuzha', 'state_id' => 1],
            ['id' => 4, 'name' => 'Kottayam', 'state_id' => 1],
            ['id' => 5, 'name' => 'Idukki', 'state_id' => 1],
            ['id' => 6, 'name' => 'Malappuram', 'state_id' => 1],
            ['id' => 7, 'name' => 'Kozhikode', 'state_id' => 1],
            ['id' => 8, 'name' => 'Wayanad', 'state_id' => 1],
            ['id' => 9, 'name' => 'Kannur', 'state_id' => 1],
            ['id' => 10, 'name' => 'Kasaragod', 'state_id' => 1],
            ['id' => 11, 'name' => 'Palakkad', 'state_id' => 1],
            ['id' => 12, 'name' => 'Thrissur', 'state_id' => 1],
            ['id' => 13, 'name' => 'Ernakulam', 'state_id' => 1],
            ['id' => 14, 'name' => 'Kollam', 'state_id' => 1],
        ]);

        foreach(range(1, 14) as $id) {
            DB::table('areas')->insert([
                'id' => $id,
                'name' => "Area-$id",
                'district_id' => $id,
            ]);
        }

        DB::statement('SET FOREIGN_KEY_CHECKS=1;');
    }
}
