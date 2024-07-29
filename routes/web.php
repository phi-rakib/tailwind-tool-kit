<?php

use Illuminate\Support\Facades\Route;

Route::get('form/search', function () {
    return view('forms.search');
})->name('forms.search');
