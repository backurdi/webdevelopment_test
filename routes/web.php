<?php

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

Route::get('/', function () {

	$geoLocationslist = DB::table('geo_locations')->simplePaginate(20);

    return view('welcome', ['geoLocationslist' => $geoLocationslist]);
});
