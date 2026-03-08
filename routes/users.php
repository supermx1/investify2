<?php

use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

// Users
Route::get('admin/users', function () {
    return Inertia::render('admin/Users');
})->middleware(['auth', 'verified'])->name('admin.users');

// User
Route::get('admin/users/{id}', function ($id) {
    return Inertia::render('admin/User', [
        'id' => $id,
    ]);
})->middleware(['auth', 'verified'])->name('admin.users.show');

// User Payout Schedule
Route::get('admin/users/{id}/payouts/{planId}', function ($id, $planId) {
    return Inertia::render('admin/UserPayoutSchedule', [
        'id' => $id,
        'planId' => $planId,
    ]);
})->middleware(['auth', 'verified'])->name('admin.users.payouts.show');

// User Manage Wallets
Route::get('admin/users/{id}/wallets', function ($id) {
    return Inertia::render('admin/UserManageWallets', [
        'id' => $id,
    ]);
})->middleware(['auth', 'verified'])->name('admin.users.wallets.show');
