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

Route::resource('region', 'RegionController');
Route::resource('typesite', 'Type_siteController');
Route::resource('field', 'FieldController');
Route::resource('localite', 'LocaliteController');
Route::resource('site', 'SiteController');
Route::resource('groupe_electrogene', 'Groupe_electrogeneController');
Route::resource('relever', 'ReleverController');
Route::resource('livraison', 'LivraisonController');
Route::resource('controle', 'ControleController');
Route::resource('asp', 'AspController');
Route::resource('role', 'RoleController');
Route::resource('user', 'UserController');
Route::resource('structure', 'StructureController');
Auth::routes();

Route::get('/', 'HomeController@index')->name('home');
Route::get('/carte', 'HomeController@carte');