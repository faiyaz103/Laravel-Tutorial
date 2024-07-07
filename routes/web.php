<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Models\Listing;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/hello', function () {
    return response('<h1>Hello World</h1>') //can render html code blocks
            ->header('Content-Type', 'text/plain'); //Will show plain text not render html
});

//Wildcard
Route::get('/posts/{id}', function($id){
    dd($id); //dump and die
    return response('Post '.$id);
})->where('id','[0-9]+'); //Putting constraints

//Request and Query Params (link: http://127.0.0.1:8000/search?name=faiyaz&city=khulna)
Route::get('/search',function(Request $request){
    // dd($request);
    return $request->name .' '. $request->city;
});

//All Listing
Route::get('/listings', function(){
    return view('listings',
        [
            'heading'=>'Latest Listings',
            'listings'=> Listing::getall()
        ]
    );
});

//Single Listing
Route::get('/listings/{id}', function($id){
    return view('singlelisting', 
        [
            'listing'=>Listing::find($id)
        ]
    );
});

