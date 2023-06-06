<?php


use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

/*
|--------------------------------------------------------------------------
| All Auth Routes
|--------------------------------------------------------------------------
|
| Here are all auth routes defined
|
*/
require 'auth.php';


/*
|--------------------------------------------------------------------------
| App routes
|--------------------------------------------------------------------------
|
| Here are all auth routes defined
|
*/
Route::middleware('auth')->group(function(){
    Route::get('/', function(){
        return to_route('app');
    });

    Route::get('/app', function(){
        return Inertia::render('dashboard');
    })->name('app');
});


