<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/contactus', function () {
    return view('contactpage');
});

Route::get('/categories', function () {
    return view('categories');
});
Route::get('/aboutus', function () {
    return view('aboutuspage');
});
Route::get('/commercial', function () {
    return view('subcategories.commercial');
});
Route::get('/retail', function () {
    return view('subcategories.retail');
});
Route::get('/landscape', function () {
    return view('subcategories.landscape');
});
Route::get('/architecture', function () {
    return view('subcategories.arch');
});
Route::get('/industrial', function () {
    return view('subcategories.indus');
});
Route::get('/solar', function () {
    return view('subcategories.solar');
});
Route::get('/other', function () {
    return view('subcategories.other');
});

Route::get('/index', function () {
    return view('index');
});