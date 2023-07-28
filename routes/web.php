<?php

use Illuminate\Support\Facades\Route;
use App\Http\Livewire\Posts;
Route::get('posts', Posts::class)->middleware('auth');