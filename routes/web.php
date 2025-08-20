<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


Route::get('/about', function () {
    return view('about');
});


// http verbs
// get, post, put/patch, delete, any, match 

// Route::get('/user', function () {
//     return 'User Access';
// });

// Route::post('/user', function (){
//     return 'User Created';
// });

// Route::match(['get', 'post'], '/user', function () {
//     return 'User Access';
// });

// Route::put('/user/{id}', function ($id) {
//     return "User with ID {$id} updated";
// });

// Route::patch('/user/{id}', function ($id) {
//     return "User with ID {$id} partially updated";
// });

// Route::delete('/user/{id}', function ($id) {
//     return "User with ID {$id} deleted";
// });

// Route::any('/anything', function() {
//     return 'Matched any HTTP method';
// });



// // Route parameter
// Route::get('/user/{id}', function ($id) {
//     return "User with ID {$id}";
// });


// // optional Route parameter
// Route::get('/user/{id?}', function ($id = null) {
//     return "User with ID {$id}";
// });


//multiple parameter
Route::get('/user/{id}/{name}', function ($id, $name) {
    return "User with ID {$id} and Name {$name}";
});