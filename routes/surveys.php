<?php

use Illuminate\Support\Facades\Route;
use Inertia\Inertia;


// USER Survey
Route::get('user/survey/{id}', function ($id) {
    return Inertia::render('user/Survey', [
        'id' => $id,
    ]);
})->middleware(['auth', 'verified'])->name('user.survey');

// USER Public Survey
// Route::get('public/survey/{id}', function ($id) {
//     return Inertia::render('user/Survey', [
//         'id' => $id,
//     ]);
// })->name('public.survey');
