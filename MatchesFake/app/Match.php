<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Match extends Model
{

  // Serve per non fare confuzione al laravel con plurale
  protected $table = 'matches';

  // Per sicurezza serve la chiave assegnabile di massa di ciascuna colonna
  protected $fillable = [
    'team1',
    'team2',
    'point1',
    'point2',
    'result',
  ];

  //Secondo metodo per rapresentare risultato nella pagina
  // public function getResult() {
  //
  //   return $this -> point1 > $this -> point2;
  // }
  //
  // public function getTeams() {
  //
  //   return $this -> team1 . ' - ' . $this -> team2;
  // }
}
