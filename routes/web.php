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

Route::get('/', 'IndexController@index');

Auth::routes();
Route::group(['prefix' => 'dashboard'], function () {
    Route::group(['middleware' => 'auth'], function () {
        
        // Authentication Routes...
        Route::get('/', 'HomeController@index');
        Route::get('/settings/delete-cv', 'SettingsController@delete_cv');
        Route::resource('settings', 'SettingsController');
        Route::resource('socialMedia', 'SocialMediaController');
		Route::resource('services', 'ServicesController');
		Route::resource('clients', 'ClientsController');
		Route::resource('testimonials', 'TestimonialsController');
		Route::resource('funFacts', 'FunFactsController');
        Route::resource('resumes', 'ResumesController');
    });
});





Route::resource('skills', 'SkillsController');