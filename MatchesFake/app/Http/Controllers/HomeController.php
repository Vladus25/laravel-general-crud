<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Match;

class HomeController extends Controller
{

  // Serve per non fare ripetere codice per 2 volte
  private function getValidationRules() {
    return [
      'team1' => 'required|string|min:2|max:255',
      'team2' => 'required|string|min:2|max:255',
      'point1' => 'required|integer|min:0|max:100',
      'point2' => 'required|integer|min:0|max:100',
      'result' => 'required|boolean',
    ];
  }

  // Serve per fare funzionare pagina home
  public function home() {

    $matches = Match::all();

    return view('pages.home', compact('matches'));
  }

  // Serve per fare un altra pagina con info di oggetti
  public function match($id) {
    $match = Match::findorFail($id);

    return view('pages.match', compact('match'));
  }

  // Serve per fare un altra pagina dove si puo creare nuovo oggetto
  public function create() {

    return view ('pages.create');
  }

  // Serve per mettere la database ogetto creato
  public function store(Request $request) {

    $validate = $request -> validate($this -> getValidationRules());

    $match = Match::create($validate);
    return redirect() -> route('match', $match -> id);
  }

  // Serve per fare un altra pagina dove si puo modificare oggetto
  public function edit($id) {

    $match = Match::findorFail($id);

    return view ('pages.edit', compact('match'));
  }

  // Serve per aggiornare oggetto con dati inseriti
  public function update(Request $request, $id) {

    $validate = $request -> validate($this -> getValidationRules());

    $match = Match::findorFail($id);

    $match -> update($validate);

    return redirect() -> route('match', $match -> id);
  }

  // Serve per eliminare un oggetto
  public function destroy($id) {

    $match = Match::findorFail($id);

    $match -> delete();

    return redirect() -> route('home');
  }

}
