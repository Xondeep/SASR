<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class adminseeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('admins')->insert([
        'name' =>'admin1' ,
        'email' => 'admin1@gmail.com',
        'password' => Hash::make('password'),
    ]);
    DB::table('admins')->insert([
        'name' =>'admin2' ,
        'email' => 'admin2@gmail.com',
        'password' => Hash::make('password'),
    ]);

    }
}
