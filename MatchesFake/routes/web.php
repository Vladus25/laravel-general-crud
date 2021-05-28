<?php

use Illuminate\Support\Facades\Route;

// Pagina home
Route::get('/', 'HomeController@home') -> name('home');

// Descrizione di oggetto clicato
Route::get('/match/{id}', 'HomeController@match') -> name('match');

// Creazione di nuovo oggetto
Route::get('/create/match', 'HomeController@create') -> name('create');
Route::post('/store/match', 'HomeController@store') -> name('store');

// Modificazione di un oggetto
Route::get('/edit/match/{id}', 'HomeController@edit') -> name('edit');
Route::post('/update/match/{id}', 'HomeController@update') -> name('update');

// Eliminazione di un oggetto
Route::get('/destroy/{id}', 'HomeController@destroy') -> name('destroy');
