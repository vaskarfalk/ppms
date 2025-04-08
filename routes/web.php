<?php

use App\Livewire\AboutUs;
use App\Livewire\Contact;
use App\Livewire\Gallery;
use App\Livewire\HomePage;
use App\Livewire\News;
use App\Livewire\NewsDetails;
use App\Livewire\ServiceDetail;
use App\Livewire\Services;
use App\Livewire\Testimonials;
use App\Livewire\WhatWeDo;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', HomePage::class)->name('home_page');
Route::get('about', AboutUs::class)->name('about_us');
Route::get('gallery', Gallery::class)->name('gallery');
Route::get('news', News::class)->name('news');
Route::get('news/{news}', NewsDetails::class)->name('news_detail');
Route::get('what-we-do', WhatWeDo::class)->name('what_we_do');
Route::get('testimonials', Testimonials::class)->name('testimonials');
Route::get('services', Services::class)->name('services');
Route::get('services/{service}', ServiceDetail::class)->name('service_detail');
Route::get('contact', Contact::class)->name('contact');
