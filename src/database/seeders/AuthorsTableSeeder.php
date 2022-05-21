<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AuthorsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $param = [
            'name' => 'tony',
            'email' => 'tony@uk.com',
        ];
        DB::table('authors')->insert($param);
        $param = [
            'name' => 'stark',
            'email' => 'stark@uk.com',
        ];
        DB::table('authors')->insert($param);
    }
}
