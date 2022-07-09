<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/home', function () {
    $links = config('links');

    $comics = config('comics');

    foreach ($comics as $index => $comic) {
        $comic["id"] = $index;
    }
    
    dd($comic);

    return view('home', compact('links'), compact('comics'));
});

// rotta parametrica: tra le graffe l'utente passa un numero che salvo nella variabile $id passandola alla funzione anonima per fare le logiche
Route::get('comic-info/{id}', function($id) {

    // mi devo portare pure questi che ce li ho nell'header
    $links = config('links');

    // salvo in $comics i l'array/database
    $comics = config('comics');

    // controllo SE l'id è maggiore o uguale alla CONTA degli elementi dell'array $comics...
    if ($id >= count($comics)) {
        // ...lancio la pagina di errore 404 e abortisce tutto
        abort('404');
    }

    // salvo l'id di ogni elemento dell'array in $singleComic
    $singleComic = $comics[$id];

    // ritorna la vista della pagina comicInfo.blade.php e la versione compatta di $singleComic;
    return view('comicInfo', compact('links'), compact('singleComic'));

// regular expression: controlla che il parametro sia un numero
})->where('id', '[0-9]+');
