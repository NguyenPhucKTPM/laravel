<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        DB::table('users')->insert([
            'idUser' => '1',
            'userName' => 'phuc',
            'SDT' => '0852348684',
            'password' => Hash::make('123456'),
            'fullName'=> 'Nguyen Phuc',
            'address' => 'LT',
            'sex' => 'nam',
            'email' => 'phuc@gmail.com',
            'groupID' => '1', 
        ]);
    }
}