<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome'); // resources/views/welcome.blade.php کو call کرے گا
});
