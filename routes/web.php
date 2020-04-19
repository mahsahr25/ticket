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

Route::get('/','HomeController@myhome')->name('myhome');


// ====== EventController =========
Route::get('/single_event/{id}','EventController@single_event')->name('single_event');
Route::get('/single_event','EventController@single_event')->name('single_event');

Route::get('/m_events','EventController@m_events')->name('m_events');
Route::get('/best_sellers','EventController@best_sellers')->name('best_sellers');
Route::get('/popular_events','EventController@popular_events')->name('popular_events');


// ====== SeatController =======
Route::get('/seat_section','SeatController@seat_section')->name('seat_section');
Route::get('/seats','SeatController@seats')->name('seats');
Route::get('/seat_reserve','SeatController@seat_reserve')->name('seat_reserve');
Route::get('/seat_sold','SeatController@seat_sold')->name('seat_sold');
Route::get('/myseat','SeatController@myseat')->name('myseat');
Route::get('/ourseat','SeatController@ourseat_index')->name('ourseat_index');
Route::get('/seat_arrange/{id}','SeatController@seat_arrange')->name('seat_arrange');
Route::get('/testseat_save','SeatController@testseat_save')->name('testseat_save');
Route::get('/testseat_index','SeatController@testseat_index')->name('testseat_index');
Route::get('/seat_shift/{id}','SeatController@seat_shift')->name('seat_shift');







// ===== TicketingController =======
Route::get('/section_select/{id}','TicketingController@section_select')->name('section_select');
Route::get('/section_select','TicketingController@section_select')->name('section_select');
Route::get('/prepay_ticket','TicketingController@prepay_ticket')->name('prepay_ticket');
Route::get('/final_ticket','TicketingController@final_ticket')->name('final_ticket');

// ======== SiteController ======
Route::get('/tracking','SiteController@tracking')->name('tracking');
Route::get('/contactus','SiteController@contactus')->name('contactus');
Route::get('/blog','SiteController@blog')->name('blog');
Route::get('/contactus_save','SiteController@contactus_save')->name('contactus_save');
Route::get('/search_result','SiteController@search_result')->name('search_result');
Route::get('/upcoming_news','SiteController@upcoming_news')->name('upcoming_news');

// ======== UserController ======
Route::get('/profile','UserController@profile')->name('profile');
// Route::get('/register','UserController@register')->name('register');
// Route::get('/login','UserController@login')->name('login');
Route::get('/edit_profile','UserController@edit_profile')->name('edit_profile');
Route::get('/ticket_history','UserController@ticket_history')->name('ticket_history');
Route::get('/favorite_save','UserController@favorite_save')->name('favorite_save');
Route::get('/favorite_show','UserController@favorite_save')->name('favorite_show');

// ====== RateandCommentController=======
Route::get('/rate_save','RateandCommentController@rate_save')->name('rate_save');
Route::get('/rate_show','RateandCommentController@rate_show')->name('rate_show');
Route::get('/comment','RateandCommentController@comment')->name('comment');












Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
