<?php

use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

// Homepage
Route::get('/', function () {
    return Inertia::render('Welcome');
})->name('home');

// About

Route::get('/about', function () {
    return Inertia::render('About');
})->name('about');

// Wealth Management
Route::inertia('/wealth-management', 'WealthManagement')->name('wealth.management');

// Service Pages
Route::inertia('/infrastructure-real-estate', 'Infrastructure')->name('infrastructure');
Route::inertia('/private-wealth', 'PrivateWealth')->name('private-wealth');
Route::inertia('/renewable-energy', 'RenewableEnergy')->name('renewable-energy');
Route::inertia('/wealth-club', 'WealthClub')->name('wealth-club');
Route::inertia('/private-equity', 'PrivateEquity')->name('private-equity');
Route::inertia('/mutual-funds', 'MutualFunds')->name('mutual-funds');
Route::inertia('/exchange-traded-funds', 'ExchangeTradedFunds')->name('exchange-traded-funds');
Route::inertia('/pharmaceuticals', 'Pharmaceuticals')->name('pharmaceuticals');
Route::inertia('/responsible-stewardship', 'ResponsibleStewards')->name('responsible-stewards');
Route::inertia('/news-and-insights', 'NewsAndInsights')->name('news-and-insights');
Route::inertia('/diversity-inclusion', 'DiversityInclusion')->name('diversity-inclusion');
Route::inertia('/esg-responsible-investment', 'ESGResponsibleInvestment')->name('esg-responsible-investment');
Route::inertia('/sustainability', 'Sustainability')->name('sustainability');
Route::inertia('/securities', 'Securities')->name('securities');

// Legal
Route::inertia('/privacy-policy', 'PrivacyPolicy')->name('privacy-policy');
Route::inertia('/terms-of-use', 'TermsOfUse')->name('terms-of-use');
Route::inertia('/regulatory-disclosures', 'RegulatoryDisclosures')->name('regulatory-disclosures');

// Contact
Route::get('/contact-us', function () {
    return Inertia::render('ContactUs');
})->name('contact');

Route::post('/contact-us', function () {
    // Handle contact form submission here
    // For now, just return back with success
    return back()->with('success', 'Thank you for contacting us. We will get back to you shortly.');
})->name('contact.store');
