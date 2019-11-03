<?php

use Illuminate\Database\Seeder;

class RanksTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('ranks')->insert([
            ["name" => "unranked"],
            ["name" => "recruit"],
            ["name" => "corporal"],
            ["name" => "sergeant"],
            ["name" => "lieutenant"],
            ["name" => "captain"],
            ["name" => "general"],
            ["name" => "admin"],
        ]);
    }
}
