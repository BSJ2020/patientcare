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
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

//*******************************Zone Routes start**************************************//
Route::get('add_zone','ZonesController@AddZones');
Route::post('save-zone','ZonesController@SaveZone');
Route::get('zones-index','ZonesController@ZoneList');
Route::patch('update-zone-details','ZonesController@updateZoneDetails');
Route::get('delete-zone','ZonesController@DeleteZone')->name('zone.delete');
//*******************************Zone Route End**********************************//
