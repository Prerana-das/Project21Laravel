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
    return view('index');
});
Route::get('/index', function () {
    return view('index');
});
Route::get('/about', function () {
    return view('about');
});
Route::get('/five_basics', function () {
    return view('five_basics');
});
Route::get('/mosque', function () {
    return view('mosque');
});
// Route::get('/prayer_times', function () {
//     return view('prayer_times');
// });
// Route::get('/scholars_video', function () {
//     return view('scholars_video');
// });
// Route::get('/hadith', function () {
//     return view('hadith');
// });
// Route::get('/muslim_names', function () {
//     return view('muslim_names');
// });
// Route::get('/duas', function () {
//     return view('duas');
// });
Route::get('/zakaat', function () {
    return view('zakaat');
});
Route::get('/fitra', function () {
    return view('fitra');
});
Route::get('/gallery', function () {
    return view('gallery');
});
Route::get('faq', function () {
    return view('faq');
});
Route::get('/contact', function () {
    return view('contact');
});
Route::get('/login', function () {
    return view('login');
});
Route::get('/register', function () {
    return view('register');
});


// Route::get('/admin_home', function () {
//     return view('admin_home');
// });



Route::get('/scholars_video', 'VideoController@scholars_video')->name('scholars_video');
Route::get('/prayer_times', 'PrayerController@prayer_times')->name('prayer_times');
Route::get('/hadith', 'PrayerController@hadith')->name('hadith');
Route::get('/muslim_names', 'PrayerController@muslim_names')->name('muslim_names');
Route::get('/duas', 'PrayerController@duas')->name('duas');

//Video
Route::post('/addVideo', 'VideoController@save');
Route::post('/editVideo', 'VideoController@edit');
Route::get('/admin_video', 'VideoController@admin_video');
Route::get('/delete1/{id}', 'VideoController@del');

//Prayer
Route::get('/admin_prayer', 'PrayerController@admin_prayer');
Route::post('/addVideo2', 'PrayerController@save');
Route::post('/editVideo2', 'PrayerController@edit');
Route::get('/delete2/{id}', 'PrayerController@del');

//Hadith
Route::get('/admin_hadith', 'PrayerController@admin_hadith');
Route::post('/saveHadith', 'PrayerController@saveHadith');
Route::post('/editHadith', 'PrayerController@editHadith');
Route::get('/delHadith/{id}', 'PrayerController@delHadith');

//Muslim Name
Route::get('/admin_muslim_name', 'PrayerController@admin_muslim_name');
Route::post('/saveMuslimName', 'PrayerController@saveMuslimName');
Route::post('/editMuslimName', 'PrayerController@editMuslimName');
Route::get('/delMuslimName/{id}', 'PrayerController@delMuslimName');

//Dua
Route::get('/admin_dua', 'PrayerController@admin_dua');
Route::post('/saveDua', 'PrayerController@saveDua');
Route::post('/editDua', 'PrayerController@editDua');
Route::get('/delDua/{id}', 'PrayerController@delDua');

//Contact
Route::get('/admin_contact', 'PrayerController@admin_contact');
Route::get('/delContact/{id}', 'PrayerController@delContact');
Route::post('/addContactMessage', 'PrayerController@addContactMessage');


Route::get('/admin_home', 'PrayerController@admin_home');

//Login
Route::post('/login', 'UserController@login');
Route::post('/register', 'UserController@register');
Route::get('verification', 'UserController@verification_view');
Route::get('loginCheck', 'UserController@loginCheck');
Route::get('logout', 'UserController@logout');

