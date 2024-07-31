<?php

use Illuminate\Support\Facades\Route;

Route::get('form/search', fn() => view('forms.search'))->name('forms.search');
Route::get('form/select', fn() => view('forms.select'))->name('forms.select');
Route::get('form/alert', fn() => view('forms.alert'))->name('forms.alert');
Route::get('form/headings', fn() => view('forms.headings'))->name('forms.headings');
Route::get('form/links', fn() => view('forms.links'))->name('forms.links');
Route::get('form/list', fn() => view('forms.list'))->name('forms.list');
Route::get('form/pagination', fn() => view('forms.pagination'))->name('forms.pagination');
Route::get('form/rating', fn() => view('forms.rating'))->name('forms.rating');
Route::get('components/tabs', fn() => view('components.tabs'))->name('components.tabs');
