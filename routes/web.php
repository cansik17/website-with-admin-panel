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

// Route::get('/', function () {
//     return view('welcome');
// });
// Route::get('/about-us', function () {
//     return view('front.about');
// })->name('about');
// Route::get('/contact-us', function () {
//    return view('front.contact');
/*
front end routes /////////////////////////////////
*/


Route::get('/about-us', 'AboutController@about')->name('about');
//contact
 Route::get('/contact-us', 'ContactController@index')->name('contact');
 Route::post('/contact-us', 'ContactController@mail')->name('contact.mail');
// Route::get('/gallery', function () {
//     return view('front.gallery');
// })->name('gallery');
Route::get('/', 'Front\HomepageController@index')->name('index');
Route::get('/gallery', 'Front\GalleryController@index')->name('gallery.index');



/*
back end routes ////////////////////////////////////
*/
Route::get('/dashboard', 'Back\DashboardController@index')->name('dashboard')->middleware('auth');;
//sliders
Route::prefix('dashboard')->name('dashboard.')->namespace('Back')->middleware('auth')->group(function () {
      Route::get('sliders', 'SliderController@index')->name('sliders.index');
  
     Route::get('sliders/{id}/edit', 'SliderController@edit')->name('sliders.edit');
     Route::put('sliders/{id}', 'SliderController@update')->name('sliders.update');
});

//features

Route::prefix('dashboard')->name('dashboard.')->namespace('Back')->middleware('auth')->group(function () {
    Route::get('features', 'FeatureController@index')->name('features.index');

   Route::get('features/{id}/edit', 'FeatureController@edit')->name('features.edit');
   Route::put('features/{id}', 'FeatureController@update')->name('features.update');
});

//programs
Route::prefix('dashboard')->name('dashboard.')->namespace('Back')->middleware('auth')->group(function () {
    Route::get('programs', 'ProgramController@index')->name('programs.index');

   Route::get('programs/{id}/edit', 'ProgramController@edit')->name('programs.edit');
   Route::put('programs/{id}', 'ProgramController@update')->name('programs.update');
});

//Gallery
Route::prefix('dashboard')->name('dashboard.')->namespace('Back')->middleware('auth')->group(function () {
    Route::resource('gallery', 'GalleryController')->except([
        'edit', 'show', 'update'
    ]);
   
});

//settings

Route::prefix('dashboard')->name('dashboard.')->namespace('Back')->middleware('auth')->group(function () {
    Route::get('/settings','SettingsController@index')->name('settings.index');
  Route::post('/settings/update','SettingsController@update')->name('settings.update');
});
Auth::routes(['register' => false]);
Route::get('logout', 'Auth\LoginController@logout');
//Route::get('/home', 'HomeController@index')->name('home');
