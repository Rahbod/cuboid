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

Route::get('/', 'HomeController@index');
Route::get('/home_test', function () {
    return view('main_site.pages.home');
//    return redirect()->to('en');
});


Route::get('/clear', function () {
    Cache::flush();
});
Route::get('/generate_files', function () {
    makeRouteFile();
    makeSettingFile();
});
Route::get('/artisan-call', function () {

//    Artisan::call('migrate:fresh');
    Artisan::call('db:seed');

    makeRouteFile();
    makeSettingFile();

});

Route::group(['middleware' => ['lang', 'set_locale', 'remove_additional_params'], 'prefix' => "{lang}",], function () {
    Auth::routes();
//    Auth::routes(['register' => false,'reset' => false,'verify' => true]);

//    include('test_routes.php');
});




