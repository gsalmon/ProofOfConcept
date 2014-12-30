<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

//For proof of concept purposes only, log user in as user 1
Auth::loginUsingId(1);

//For the purposes of this proof of concept, we will use a page controller to demonstrate re-usability
Route::get('/','PagesController@home');

Route::get('/checkout', 'PagesController@display_checkout');

Route::post('/checkout', 'PagesController@process_checkout');

