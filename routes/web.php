<?php

use App\Livewire\PageContact;
use Illuminate\Support\Facades\Route;
use App\Livewire\PageHome;
use App\Livewire\SingleCategory;

Route::get('/', PageHome::class)->name('page.home');
Route::get('/category/{category_slug}', SingleCategory::class)->name('single.category');
Route::get('/contact', PageContact::class)->name('page.contact');
