<?php

use Illuminate\Support\Facades\Route;

// 1. DASHBOARD
Route::get('/', function () {
    return view('dashboard');
})->name('admin.dashboard');

// 2. MANAJEMEN KONTEN
Route::get('/posts', function () { return view('posts'); })->name('posts.index');
Route::get('/posts/create', function () { return view('posts-create'); })->name('posts.create');
Route::get('/posts/draft', function () { return view('posts-draft'); })->name('posts.draft');

Route::get('/categories', function () { return view('categories'); })->name('categories.index');
Route::get('/pages', function () { return view('pages'); })->name('pages.index');
Route::get('/media', function () { return view('media'); })->name('media.index');

// 3. INTERAKSI & PENGUNJUNG
Route::get('/comments', function () { return view('comments'); })->name('comments.index');
Route::get('/messages', function () { return view('messages'); })->name('messages.index');

// 4. PENGATURAN SISTEM
Route::get('/users', function () { return view('users'); })->name('users.index');
Route::get('/settings', function () { return view('settings'); })->name('settings.index');