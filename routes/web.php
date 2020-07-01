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
// Start Tugas
Route::get('/', function () {
    return view('datatable.index');
});

Route::get('/master', function () {
    return view('adminlte.master');
});

Route::get('/data-tables', function () {
    return view('datatable.viewtable');
});
//End Tugas

// Start Tutorial
Route::get('/items', function () {
    return view('items.index');
});
// End Tutorial
