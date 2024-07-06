<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/hello', function () {
    return response('<h1>Hello World</h1>') //can render html code blocks
            ->header('Content-Type', 'text/plain'); //Will show plain text not render html
});

//Wildcard
Route::get('/posts/{id}', function($id){
    dd($id); //dump and die
    return response('Post '.$id);
})->where('id','[0-9]+'); //Putting constraints

