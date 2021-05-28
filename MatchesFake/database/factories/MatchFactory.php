<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Match;
use Faker\Generator as Faker;

// Serve per riempire di dati fake nostre colonne
$factory->define(Match::class, function (Faker $faker) {
    return [
      'team1' => $faker -> firstName,
      'team2' => $faker -> lastName,
      'point1' => $faker -> numberBetween(1, 10),
      'point2' => $faker -> numberBetween(1, 10),
      'result' => $faker -> numberBetween(0, 1),
    ];
});
