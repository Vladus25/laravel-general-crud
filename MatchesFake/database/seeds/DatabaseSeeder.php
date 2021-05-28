<?php

use Illuminate\Database\Seeder;

// Richiamo della nostra Seeder
class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
      $this->call(MatchSeeder::class);
    }
}
