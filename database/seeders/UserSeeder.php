<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        collect([
            [
                'name' => 'Raya Sabari',
                'username' => 'rayasabari',
                'email' => 'hi@rayasabari.com',
                'email_verified_at' => null,
                'password' => bcrypt('password'),
                'created_at' => now(),
                'updated_at'  => now(),
            ],
            [
                'name' => 'Eva Holillah',
                'username' => 'evaholillah',
                'email' => 'eva@rayasabari.com',
                'email_verified_at' => null,
                'password' => bcrypt('password'),
                'created_at' => now(),
                'updated_at'  => now(),
            ],
        ])->each(function ($user){
            DB::table('users')->insert($user);
        });
    }
}
