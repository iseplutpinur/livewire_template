<?php

/**
 * @Author: Bayu Rifki Alghifari
 * @Date:   2021-12-22 17:07:28
 * @Last Modified by:   Bayu Rifki Alghifari
 * @Last Modified time: 2022-02-09 17:18:04
 */


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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', function () {
    return view('welcome');
})->name('home');
