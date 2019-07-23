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

Route::get('captcha-image', function () {
    return captcha_img('flat');
});

Route::get('/', 'HomeController@index');
Route::get('/projects', 'ProjectController@projects');
Route::get('/projects/category/{category_id}', 'ProjectController@projects');
Route::get('/projects/show/{id}', 'ProjectController@projectShow');

Route::get('/products', 'ProjectController@products');
Route::get('/products/category/{category_id}', 'ProjectController@products');
Route::get('/products/show/{id}', 'ProjectController@productShow');

Route::get('pages/show/{id}','StaticPageController@show');

Route::get('/news', 'ContentController@news');
Route::get('/news/category/{category_id}', 'ContentController@news');
Route::get('/news/show/{id}', 'ContentController@newsShow');
Route::get('/articles', 'ContentController@articles');
Route::get('/articles/category/{ContentController}', 'ContentController@articles');
Route::get('/articles/show/{id}', 'ContentController@articlShow');

//Route::get('/news', 'ProjectController@news');
//Route::get('/news/show/{id}', 'ProjectController@newsShow');

Route::get('/about-us', 'ContactUsController@aboutUs');
Route::get('/service-sales', 'ContactUsController@serviceSales');

Route::get('/contact-us', 'ContactUsController@show');
Route::post('/contact-us', 'ContactUsController@store');

Route::get('/faqs}', 'FaqController@index');
Route::get('/faq/show/{id}', 'FaqController@show');


Route::get('/home_test', function () {
    return view('main_site.pages.home');
//    return redirect()->to('en');
});

//Route::view('projects','main_site.pages.projects.projects');
Route::view('projects-show', 'main_site.pages.projects.projects_show');


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




