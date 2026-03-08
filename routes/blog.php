<?php

use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

// Blog
Route::get('admin/blog', function () {
    return Inertia::render('admin/Blog');
})->middleware(['auth', 'verified'])->name('admin.blog');

// Edit Blog
Route::get('admin/blog/edit/{id}', function ($id) {
    return Inertia::render('admin/EditBlog', [
        'id' => $id,
    ]);
})->middleware(['auth', 'verified'])->name('admin.blog.edit');

// Create Blog
Route::get('admin/blog/create', function () {
    return Inertia::render('admin/EditBlog');
})->middleware(['auth', 'verified'])->name('admin.blog.create');
