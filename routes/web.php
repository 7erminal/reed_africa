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
    return view('index');
});

Route::get('/educational-opportunities', function () {
    return view('educational_opportunities');
});

Route::get('/reproductive-health-rights', function () {
    return view('reproductive_health_rights');
});

Route::get('/women-empowerment', function () {
    return view('woment_empowerment');
});

Route::get('/about-us', function () {
    return view('who_we_are');
});

Route::get('/media', function () {
    return view('media');
});

Route::get('/all-team-members', function () {
    return view('all_members');
});
