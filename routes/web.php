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

//Route::get('/', function () {
//    return view('welcome');
//});

Auth::routes();
/*
|--------------------------------------------------------------------------
| FRONTEND ROUTES
default route
--------------
=> Route::get('/admin', 'HomeController@index')->name('home');
|--------------------------------------------------------------------------
*/

Route::get('/', 'Frontend\FrontendController@index')->name('index');










/*
|--------------------------------------------------------------------------
| BACKEND ROUTES
|--------------------------------------------------------------------------
*/
Route::get('/admin', 'HomeController@index')->name('home');
Route::get('/dashboard','Backend\BackendController@index')->name('dashboard')->middleware('auth');



// DISTRICT ROUTE

Route::group(['prefix' => 'district',  'middleware' => 'auth'], function()
{
	Route::get('/view','Backend\DistrictController@view')->name('district_view');
	Route::get('/add','Backend\DistrictController@add')->name('district_add');
	Route::post('/store','Backend\DistrictController@store')->name('district_store');
	Route::get('/districtStatus/{id}/{s}','Backend\DistrictController@districtStatus')->name('district_status');
	Route::get('/edit/{id}','Backend\DistrictController@edit')->name('district_edit');
	Route::post('/update/{id}','Backend\DistrictController@update')->name('district_update');
	Route::get('/delete/{id}','Backend\DistrictController@delete')->name('district_delete');

});

// NEAREST ROUTE

Route::group(['prefix' => 'nearest',  'middleware' => 'auth'], function()
{
	Route::get('/view','Backend\Nearest_NameController@view')->name('nearest_view');
	Route::get('/add','Backend\Nearest_NameController@add')->name('nearest_add');
	Route::post('/store','Backend\Nearest_NameController@store')->name('nearest_store');
	Route::get('/nearestStatus/{id}/{s}','Backend\Nearest_NameController@nearestStatus')->name('nearest_status');
	Route::get('/edit/{id}','Backend\Nearest_NameController@edit')->name('nearest_edit');
	Route::post('/update/{id}','Backend\Nearest_NameController@update')->name('nearest_update');
	Route::get('/delete/{id}','Backend\Nearest_NameController@delete')->name('nearest_delete');

});


// BLOOD GROUP ROUTE

Route::group(['prefix' => 'blood-group',  'middleware' => 'auth'], function()
{
	Route::get('/view','Backend\blood_groupController@view')->name('blood_group_view');
	Route::get('/add','Backend\blood_groupController@add')->name('blood_group_add');
	Route::post('/store','Backend\blood_groupController@store')->name('blood_group_store');
	Route::get('/blood_groupStatus/{id}/{s}','Backend\blood_groupController@blood_groupStatus')->name('blood_group_status');
	Route::get('/edit/{id}','Backend\blood_groupController@edit')->name('blood_group_edit');
	Route::post('/update/{id}','Backend\blood_groupController@update')->name('blood_group_update');
	Route::get('/delete/{id}','Backend\blood_groupController@delete')->name('blood_group_delete');

});










// SLIDERS ROUTE

Route::group(['prefix' => 'sliders',  'middleware' => 'auth'], function()
{
	Route::get('/view','Backend\SliderController@view')->name('sliders_view');
	Route::get('/add','Backend\SliderController@add')->name('slider_add');
	Route::post('/store','Backend\SliderController@store')->name('slider_store');
	Route::get('/sliderStatus/{id}/{s}','Backend\SliderController@sliderStatus')->name('slider_status');
	Route::get('/edit/{id}','Backend\SliderController@edit')->name('slider_edit');
	Route::post('/update/{id}','Backend\SliderController@update')->name('slider_update');
	Route::get('/delete/{id}','Backend\SliderController@delete')->name('slider_delete');

});

// GALLERY ROUTE

Route::group(['prefix' => 'gallery',  'middleware' => 'auth'], function()
{
	Route::get('/view','Backend\galleryController@view')->name('gallery_view');
	Route::get('/add','Backend\galleryController@add')->name('gallery_add');
	Route::post('/store','Backend\galleryController@store')->name('gallery_store');
	Route::get('/galleryStatus/{id}/{s}','Backend\galleryController@galleryStatus')->name('gallery_status');
	Route::get('/edit/{id}','Backend\galleryController@edit')->name('gallery_edit');
	Route::post('/update/{id}','Backend\galleryController@update')->name('gallery_update');
	Route::get('/delete/{id}','Backend\galleryController@delete')->name('gallery_delete');

});
