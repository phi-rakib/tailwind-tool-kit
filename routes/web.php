<?php

use Illuminate\Support\Facades\Route;

Route::get('form/search', fn() => view('forms.search'))->name('forms.search');
Route::get('form/select', fn() => view('forms.select'))->name('forms.select');
Route::get('form/alert', fn() => view('forms.alert'))->name('forms.alert');
