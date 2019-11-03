<?php

use Illuminate\Database\Seeder;
use App\Rank;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $rank = Rank::where('name', 'admin')->first();
        DB::table('users')->insert([
            'username' => 'Thijs',
            'email' => 'thijs_lander@hotmail.nl',
            'password' => bcrypt('Test123!'),
            'rank_id' => $rank->id
        ]);
    }
}
