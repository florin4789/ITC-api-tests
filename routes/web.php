<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Test1Controller;
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
    return view('welcome');
});

Route::get('/page1', function () {
    return view('page1');
});

Route::get('/test1', [Test1Controller::class, 'test1']);

Route::get('/custom-url', function() {
    return redirect()->to('https://test.itc-benchmarking.edw.ro/api/v1/countries?page=0');
});
