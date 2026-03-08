<?php

use Illuminate\Support\Facades\Route;
use Inertia\Inertia;
use Laravel\Fortify\Features;

Route::get('/', function () {
    return Inertia::render('Welcome', [
        'canRegister' => Features::enabled(Features::registration()),
    ]);
})->name('home');

// User Routes
Route::redirect('user', '/user/dashboard');
Route::get('user/dashboard', function () {
    return Inertia::render('user/Dashboard');
})->middleware(['auth', 'verified'])->name('user.dashboard');

// USER News
Route::get('user/news', function () {
    return Inertia::render('user/News');
})->middleware(['auth', 'verified'])->name('user.news');

// USER Help
Route::get('user/help', function () {
    return Inertia::render('user/Help');
})->middleware(['auth', 'verified'])->name('user.help');

// USER Withdraw
Route::get('user/withdrawals', function () {
    return Inertia::render('user/Withdrawals');
})->middleware(['auth', 'verified'])->name('user.withdrawals');

// USER Referrals
Route::get('user/referrals', function () {
    return Inertia::render('user/Referrals');
})->middleware(['auth', 'verified'])->name('user.referrals');

// USER My Wallets
Route::get('user/my-wallets', function () {
    return Inertia::render('user/MyWallets');
})->middleware(['auth', 'verified'])->name('user.my-wallets');

// USER AI Chat
Route::post('user/ai-chat', [\App\Http\Controllers\AiChatController::class, 'chat'])
    ->middleware(['auth', 'verified'])->name('user.ai-chat');

// Consolidated frontend routes
require __DIR__ . '/frontend.php';

require __DIR__ . '/settings.php';
require __DIR__ . '/plans.php';
require __DIR__ . '/users.php';
require __DIR__ . '/investments.php';
require __DIR__ . '/blog.php';
require __DIR__ . '/surveys.php';
