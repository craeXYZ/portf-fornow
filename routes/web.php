<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProjectController;

Route::get('/', function () {
    return view('welcome'); // This is for the main homepage
});

Route::get('/manage', function () {
    return view('manage');
});
