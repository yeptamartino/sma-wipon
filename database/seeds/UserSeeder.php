<?php

use Illuminate\Database\Seeder;

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
        'name' => "Yepta",
        'email' => 'yepta@gmail.com',
        'email_verified_at' => Carbon::now(),
        'password' => bcrypt('yepta'),
      ]);
    }
}
