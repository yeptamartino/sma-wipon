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



Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/', 'PageController@home')->name('home');

Route::get('/news', 'NewsController@index');
Route::get('/news/create', 'NewsController@create');
Route::get('/news/{news}', 'NewsController@show');
Route::post('/news', 'NewsController@store');
Route::delete('/news/{news}', 'NewsController@destroy');
Route::get('/news/{news}/edit', 'NewsController@edit');
Route::patch('/news/{news}', 'NewsController@update');

Route::get('/contacts', 'ContactController@index');
Route::get('/contacts/create', 'ContactController@create');
Route::get('/contacts/{contact}', 'ContactController@show');
Route::post('/contacts', 'ContactController@store');
Route::delete('/contacts/{contact}', 'ContactController@destroy');
Route::get('/contacts/{contact}/edit', 'ContactController@edit');
Route::patch('/contacts/{contact}', 'ContactController@update');

Route::get('/teachers', 'TeacherController@index');
Route::get('/teachers/create', 'TeacherController@create');
Route::get('/teachers/{teacher}', 'TeacherController@show');
Route::post('/teachers', 'TeacherController@store');
Route::delete('/teachers/{teacher}', 'TeacherController@destroy');
Route::get('/teachers/{teacher}/edit', 'TeacherController@edit');
Route::patch('/teachers/{teacher}', 'TeacherController@update');

Route::get('/students', 'StudentController@index');
Route::get('/students/create', 'StudentController@create');
Route::get('/students/{student}', 'StudentController@show');
Route::post('/students', 'StudentController@store');
Route::delete('/students/{student}', 'StudentController@destroy');
Route::get('/students/{student}/edit', 'StudentController@edit');
Route::patch('/students/{student}', 'StudentController@update');


Route::get('/sliders', 'SliderController@index');
Route::get('/sliders/create', 'SliderController@create');
Route::get('/sliders/{slider}', 'SliderController@show');
Route::post('/sliders', 'SliderController@store');
Route::delete('/sliders/{slider}', 'SliderController@destroy');
Route::get('/sliders/{slider}/edit', 'SliderController@edit');
Route::patch('/sliders/{slider}', 'SliderController@update');

Route::get('/videos', 'VideoController@index');
Route::get('/videos/create', 'VideoController@create');
Route::get('/videos/{video}', 'VideoController@show');
Route::post('/videos', 'VideoController@store');
Route::delete('/videos/{video}', 'VideoController@destroy');
Route::get('/videos/{video}/edit', 'VideoController@edit');
Route::patch('/videos/{video}', 'VideoController@update');

Route::get('/histories', 'HistoryController@index');
Route::get('/histories/create', 'HistoryController@create');
Route::get('/histories/{history}', 'HistoryController@show');
Route::post('/histories', 'HistoryController@store');
Route::delete('/histories/{history}', 'HistoryController@destroy');
Route::get('/histories/{history}/edit', 'HistoryController@edit');
Route::patch('/histories/{history}', 'HistoryController@update');


Route::get('/photo-galeries', 'PhotoGaleryController@index');
Route::get('/photo-galeries/create', 'PhotoGaleryController@create');
Route::get('/photo-galeries/{photo_galery}', 'PhotoGaleryController@show');
Route::post('/photo-galeries', 'PhotoGaleryController@store');
Route::delete('/photo-galeries/{photo_galery}', 'PhotoGaleryController@destroy');
Route::get('/photo-galeries/{photo_galery}/edit', 'PhotoGaleryController@edit');
Route::patch('/photo-galeries/{photo_galery}', 'PhotoGaleryController@update');

Route::get('/vision-missions', 'VisionMissionController@index');
Route::get('/vision-missions/create', 'VisionMissionController@create');
Route::get('/vision-missions/{vision_mission}', 'VisionMissionController@show');
Route::post('/vision-missions', 'VisionMissionController@store');
Route::delete('/vision-missions/{vision_mission}', 'VisionMissionController@destroy');
Route::get('/vision-missions/{vision_mission}/edit', 'VisionMissionController@edit');
Route::patch('/vision-missions/{vision_mission}', 'VisionMissionController@update');


Route::get('/announcements', 'AnnouncementController@index');
Route::get('/announcements/create', 'AnnouncementController@create');
Route::get('/announcements/{announcement}', 'AnnouncementController@show');
Route::post('/announcements', 'AnnouncementController@store');
Route::delete('/announcements/{announcement}', 'AnnouncementController@destroy');
Route::get('/announcements/{announcement}/edit', 'AnnouncementController@edit');
Route::patch('/announcements/{announcement}', 'AnnouncementController@update');


Route::get('pengumuman', 'PageController@announcement');
Route::get('sejarah-sekolah', 'PageController@history');
Route::get('visi-misi', 'PageController@visionMission');
Route::get('galery-foto', 'PageController@galeryPhoto');
Route::get('galery-video', 'PageController@galeryVideo');
Route::get('berita-sekolah', 'PageController@news');
Route::get('berita-terbaru/{berita}', 'PageController@newsDetail');

Route::get('/hubungi-kami', 'ContactUserController@index');
Route::get('/hubungi-kami/create', 'ContactUserController@create');
Route::get('/hubungi-kami/{contact}', 'ContactUserController@show');
Route::post('/hubungi-kami', 'ContactUserController@store');
Route::delete('/hubungi-kami/{contact}', 'ContactUserController@destroy');
Route::get('/hubungi-kami/{contact}/edit', 'ContactUserController@edit');
Route::patch('/hubungi-kami/{contact}', 'ContactUserController@update');





//  Route::resource('news', 'NewsController');
//   Route::resource('announcements', 'AnnouncementController');
//    Route::resource('photo-galeries', 'PhotoGaleryController');
//    Route::resource('teachers', 'TeacherController');
//    Route::resource('students', 'StudentController');
//    Route::resource('videos', 'VideorController');
//    Route::resource('sliders', 'SliderController');
//    Route::resource('histories', 'HistoryController');
//    Route::resource('vision-missions', 'VisionMissionController');