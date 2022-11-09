<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use DB;

class MoviesRentedSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('movies_rented')->insert([
            'movie_id' => 403374,
            'movie_name' => 'Jack Reacher',
            'user_id' => 1,
            'expiration_date' => date(now(), strtotime('+48 hours')),
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('movies_rented')->insert([
            'movie_id' => 375355,
            'movie_name' => "Don't Hang Up",
            'user_id' => 1,
            'expiration_date' => date(now(), strtotime('+48 hours')),
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
