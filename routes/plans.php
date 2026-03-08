<?php

use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

// Plans
Route::get('admin/plans', function () {
    return Inertia::render('admin/Plans');
})->middleware(['auth', 'verified'])->name('admin.plans');

// Edit Plan
Route::get('admin/plans/edit/{id}', function ($id) {
    return Inertia::render('admin/EditPlan', [
        'id' => $id,
    ]);
})->middleware(['auth', 'verified'])->name('admin.plans.edit');

// Create Plan
Route::get('admin/plans/create', function () {
    return Inertia::render('admin/CreatePlan');
})->middleware(['auth', 'verified'])->name('admin.plans.create');

// Calendar
Route::get('admin/calendar/{id}', function ($id) {
    return Inertia::render('admin/Calendar', [
        'id' => $id,
    ]);
})->middleware(['auth', 'verified'])->name('admin.calendar.show');

// USER Plans
Route::get('user/plans', function () {
    return Inertia::render('user/Plans');
})->middleware(['auth', 'verified'])->name('user.plans');

// USER Calculator
Route::get('user/calculator/{id}', function ($id) {
    return Inertia::render('user/Calculator', [
        'id' => $id,
    ]);
})->middleware(['auth', 'verified'])->name('user.calculator.show');
