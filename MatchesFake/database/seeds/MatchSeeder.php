<?php

use Illuminate\Database\Seeder;
use App\Match;

// Serve per indicare quanti oggeti deve riempire factory
class MatchSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      factory(Match::class, 50) -> create();
    }
}
