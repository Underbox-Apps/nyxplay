<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use DB;
use DateTime;

class MoviesRentedSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $next_date = new DateTime(now());
        $next_date = $next_date->modify('+48 hours')->format('Y-m-d H:i:s');

        DB::table('movies_rented')->insert([
            'movie_id' => 403374,
            'movie_name' => 'Jack Reacher',
            'user_id' => 1,
            'expiration_date' => $next_date,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('movies_rented')->insert([
            'movie_id' => 375355,
            'movie_name' => "Don't Hang Up",
            'user_id' => 1,
            'expiration_date' => $next_date,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
