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



Route::get('/welcome', function () {
    return view('welcome');
});

//Home page and fetch data to home page
Route::get('/', function () { return view('frontend.home');});
Route::get('/','FetchDataController@getdata')->name('getdata');

//reservation page , Data send to database
Route::get('/reservation', function () { return view('frontend.reservation');});
Route::get('/reservation','ReservationController@index')->name('frontend.reservation');
Route::post('/reservation','ReservationController@reserve')->name('reservation.reserve');

//Contact page and use post method
Route::get('/contact', function () {return view('frontend.contact');});
Route::Post('/contact','ContactController@sendMessage')->name('contact.send');

//about Page
Route::get('/about', function () {
    return view('frontend.about');
});

//Event page and show the data ID wise
//Route::resource('events','FronteventController');
Route::get('/events', function () {return view('frontend.event.events');});
Route::get('/events','FronteventController@index')->name('frontend.event.events');
Route::get('/event/{id}','FronteventController@show')->name('frontend.event.fetch');

//Menu page and Show the menu in frontend
Route::get('/menu', function () { return view('frontend.menu');});
Route::get('/menu','FrontendController@index')->name('frontend.menu');

//feedback page and show the review of feedback
Route::get('/feedback', function () { return view('frontend.feedback');});
Route::Post('/feedback','FeedbackController@send')->name('feedback.send');
Route::get('/feedback','FeedbackController@index');

Route::get('/backend/category', function () {
    return view('backend.category.index');
});

Route::get('/event_page', function () {
    return view('frontend.event_page');
});

Route::get('send-mail','MailSend@mailsend');

 
 
//Dashboard router made in group
Route::group(['prefix'=>'admin','middleware'=>'auth','namespace'=>'Admin'], function (){

    Route::resource('event','EventController'); 
    Route::resource('category','CategoryController');
    Route::resource('item','ItemController');  
    
Route::resource('contact','ContactusBackendController');
Route::get('contact','ContactusBackendController@index')->name('contact.index');
Route::get('contact/{id}','ContactusBackendController@show')->name('contact.show');
Route::delete('contact/{id}','ContactusBackendController@destroy')->name('contact.destroy');

Route::get('reservation','ReservationController@index')->name('reservation.index');
Route::post('reservation/{id}','ReservationController@status')->name('reservation.status');
Route::delete('reservation/{id}','ReservationController@destory')->name('reservation.destory');

Route::resource('feedback','FeedbackBackendController');
Route::get('feedback','FeedbackBackendController@index')->name('feedback.index');
Route::get('feedback/{id}','FeedbackBackendController@show')->name('feedback.show');
Route::delete('feedback/{id}','FeedbackBackendController@destroy')->name('feedback.destroy');
});
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('logout', '\App\Http\Controllers\Auth\LoginController@logout');




Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');

