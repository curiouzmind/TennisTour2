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
//Route::auth();
Route::get('/', 'HomeController@index')->name('home');
Route::get('matches', 'HomeController@matches')->name('matches');
Route::get('single-match', 'HomeController@singleMatch')->name('single-match');
Route::get('players', 'HomeController@players')->name('players');
Route::get('player/{id}', 'HomeController@single')->name('single.player');
Route::get('media', 'HomeController@media')->name('media');

// Authentication Routes...
$this->get('login','Auth\LoginController@showLoginForm')->name('login');
$this->post('login', 'Auth\LoginController@login')->name('login');
$this->post('logout', 'Auth\LoginController@logout')->name('logout');

$this->get('register', 'Auth\RegisterController@showRegistrationForm')->name('register');
$this->post('register', 'Auth\RegisterController@Register')->name('register');


// Password Reset Routes...
$this->get('password/reset', 'Auth\ForgotPasswordController@showLinkRequestForm')->name('password.reset');
$this->post('password/email', 'Auth\ForgotPasswordController@sendResetLinkEmail')->name('password.reset');
$this->get('password/reset/{token}', 'Auth\ResetPasswordController@showResetForm')->name('password.reset');
$this->post('password/reset', 'Auth\ResetPasswordController@reset')->name('password.reset');
Route::get('admin/players/payment', 'Admin\PlayersController@payment');
Route::get('admin/players/payment2', 'Admin\PlayersController@payment2');
Route::post('admin/players/payment_cached', 'Admin\PlayersController@paymentCached');


Route::group(['middleware' => ['auth'], 'prefix' => 'admin', 'as' => 'admin.'], function () {
    Route::resource('roles', 'Admin\RolesController');
    Route::post('roles_mass_destroy', ['uses' => 'Admin\RolesController@massDestroy', 'as' => 'roles.mass_destroy']);
    Route::resource('users', 'Admin\UsersController');
    Route::post('users_mass_destroy', ['uses' => 'Admin\UsersController@massDestroy', 'as' => 'users.mass_destroy']);
    Route::resource('matches', 'Admin\MatchesController');
    Route::post('matches_mass_destroy', ['uses' => 'Admin\MatchesController@massDestroy', 'as' => 'matches.mass_destroy']);
    Route::resource('schedules', 'Admin\SchedulesController');
    Route::post('schedules_mass_destroy', ['uses' => 'Admin\SchedulesController@massDestroy', 'as' => 'schedules.mass_destroy']);
    Route::resource('players', 'Admin\PlayersController');
    Route::post('players_mass_destroy', ['uses' => 'Admin\PlayersController@massDestroy', 'as' => 'players.mass_destroy']);
    Route::resource('tournaments', 'Admin\TournamentsController');
    Route::post('tournaments_mass_destroy', ['uses' => 'Admin\TournamentsController@massDestroy', 'as' => 'tournaments.mass_destroy']);
    Route::resource('results', 'Admin\ResultsController');
    Route::post('results_mass_destroy', ['uses' => 'Admin\ResultsController@massDestroy', 'as' => 'results.mass_destroy']);
    Route::resource('permissions', 'Admin\PermissionsController');
    Route::post('permission_mass_destroy', ['uses' => 'Admin\PermissionsController@massDestroy', 'as' => 'permissions.mass_destroy']);
});

//Route::auth();

Route::get('home', 'HomeController@index')->name('home');
