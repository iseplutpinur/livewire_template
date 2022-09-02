<?php

/**
 * @Author: Bayu Rifki Alghifari
 * @Date:   2021-12-29 21:37:13
 * @Last Modified by:   Bayu Rifki Alghifari
 * @Last Modified time: 2022-02-09 17:21:35
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

Route::get('/setting/menu', 'Admin\Setting\Menu');
Route::get('/setting/role', 'Admin\Setting\Role');
