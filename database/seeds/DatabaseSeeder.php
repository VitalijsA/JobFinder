<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        DB::table('job')->insert([
            'title' => Str::random(10),
            'description' => Str::random(105),
            'salary' =>430,
            'phonenum' => 2553424,
            'emailaddress' => Str::random(25).'@gmail.com',
            'keyword' => Str::random(25),
            'dateuntil' => '2010-01-01 00:00:00'
        ]);
        DB::table('job')->insert([
            'title' => Str::random(10),
            'description' => Str::random(105),
            'salary' =>430,
            'phonenum' => 2553424,
            'emailaddress' => Str::random(25).'@gmail.com',
            'keyword' => Str::random(25),
            'dateuntil' => '2010-01-01 00:00:00'
        ]);
        DB::table('job')->insert([
            'title' => Str::random(10),
            'description' => Str::random(105),
            'salary' =>430,
            'phonenum' => 2553424,
            'emailaddress' => Str::random(25).'@gmail.com',
            'keyword' => Str::random(25),
            'dateuntil' => '2010-01-01 00:00:00'
        ]);
    }
}
