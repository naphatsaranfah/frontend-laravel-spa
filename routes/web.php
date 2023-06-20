<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});


Route::get('/login', function () {
    return view('login');
});

Route::get('/register', function () {
    return view('register');
});

Route::get('/register_next', function () {
    return view('register_next');
});


Route::get('/home', function () {
    return view('home');
});

Route::get('/all_my_reserve', function () {
    return view('all_my_reserve');
});


Route::get('/aroma_oil', function () {
    return view('aroma_oil');
});


Route::get('/change_new_password', function () {
    return view('change_new_password');
});

Route::get('/contact_us', function () {
    return view('contact_us');
});

Route::get('/details_therapist', function () {
    return view('details_therapist');
});


Route::get('/forgot_password', function () {
    return view('forgot_password');
});

Route::get('/join_up', function () {
    return view('join_up');
});

Route::get('/our_portfolio', function () {
    return view('our_portfolio');
});

Route::get('/pay', function () {
    return view('pay');
});

Route::get('/promotion', function () {
    return view('promotion');
});

Route::get('/reserve_company_select', function () {
    return view('reserve_company_select');
});

Route::get('/reserve_group', function () {
    return view('reserve_group');
});

Route::get('/reserve_promotion', function () {
    return view('reserve_promotion');
});

Route::get('/reserve_spa', function () {
    return view('reserve_spa');
});


Route::get('/reserve_spa_two', function () {
    return view('reserve_spa_two');
});

Route::get('/reserve_time_therapist', function () {
    return view('reserve_time_therapist');
});

Route::get('/scan_qr_code', function () {
    return view('scan_qr_code');
});

Route::get('/service_address', function () {
    return view('service_address');
});

Route::get('/setting_profile', function () {
    return view('setting_profile');
});


Route::get('/therapist', function () {
    return view('therapist');
});


Route::get('/summarize_reserve', function () {
    return view('summarize_reserve');
});

Route::get('/test', function () {
    return view('test');
});

Route::get('/setting_other_recipients',function () {
    return view('setting_other_recipients');
});

Route::get('/details_therapist',function () {
    return view('details_therapist');
});

Route::get('/setting_show_add_other_recipients',function () {
    return view('setting_show_add_other_recipients');
});