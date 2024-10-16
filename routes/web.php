<?php

use Illuminate\Support\Facades\Route;
use App\http\controllers\IniCon;

Route::get('index', function () {
    return view('index');
});

Route::get('Error', function () {
    return view('404');
});

Route::get('contact', function () {
    return view('contact');
});

Route::get('feature', function () {
    return view('feature');
});

Route::get('about', function () {
    return view('about');
});

Route::get('project', function () {
    return view('project');
});

Route::get('quote', function () {
    return view('quote');
});

Route::get('service', function () {
    return view('service');
});

Route::get('team', function () {
    return view('team');
});

Route::get('testimonial', function () {
    return view('testimonial');
});

Route::get('index',[IniCon::class,'index.html']);