<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UsersTableSeeder extends Seeder
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
        	'name' => 'Wildan Ainurrahman',
        	'email' => 'wildan.arrahman@gmail.com',
        	'is_superadmin' => 1,
        	'password' => bcrypt('w1lldone'),
        	'created_at' => \Carbon\Carbon::now(),
        	'updated_at' => \Carbon\Carbon::now(),
        ]);
    }
}
