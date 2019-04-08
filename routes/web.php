<?php




// use Cubitworx\Laravel\Languages;


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

// General

Route::get('/', 'GeneralController@home');

Route::get('/jobs', 'JobController@list');

Route::get('/jobs/{url}', 'JobController@show');

Route::get('/jobs/{url}/apply', 'JobController@create');

Route::post('/jobs/{url}/apply', 'JobController@store');

Route::get('/jobs/{url}/thank-you', 'JobController@thanks')->name('job.thanks');
