<?php

use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

// Investments
Route::get('admin/investments', function () {
    return Inertia::render('admin/Investments');
})->middleware(['auth', 'verified'])->name('admin.investments');

// Manage Investment
Route::get('admin/investment/{id}', function ($id) {
    return Inertia::render('admin/ManageInvestment', [
        'id' => $id,
    ]);
})->middleware(['auth', 'verified'])->name('admin.investment.manage');

// USER My Investments
Route::get('user/my-investments', function () {
    return Inertia::render('user/MyInvestments');
})->middleware(['auth', 'verified'])->name('user.my-investments');

// View Investment
Route::get('user/my-investment/{id}', function ($id) {
    return Inertia::render('user/ViewInvestment', [
        'id' => $id,
    ]);
})->middleware(['auth', 'verified'])->name('user.my-investment.view');
