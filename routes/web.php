<?php

use Illuminate\Support\Facades\Route;

Route::view('/', 'index')->name('home');

Route::view('/about', 'pages.about')->name('about');
Route::view('/projects', 'pages.projects')->name('projects');
Route::view('/contact', 'pages.contact')->name('contact');
Route::view('/uses', 'pages.uses')->name('uses');

Route::get('/robots.txt', function () {
    return response()->view('seo.robots')->header('Content-Type', 'text/plain');
});

Route::get('/sitemap.xml', function () {
    return response()->view('seo.sitemap')->header('Content-Type', 'application/xml');
});
