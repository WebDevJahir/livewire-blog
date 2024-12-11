<?php

use App\Livewire\Pages\Home;
use Illuminate\Support\Facades\Route;

Route::get('/', Home::class);
Route::get('/home', Home::class)->name('home');
