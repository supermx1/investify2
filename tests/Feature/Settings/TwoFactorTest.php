<?php

use App\Models\User;

test('two-factor authentication page is displayed for user', function () {
    $user = User::factory()->create();

    $response = $this
        ->actingAs($user)
        ->withSession(['auth.password_confirmed_at' => time()])
        ->get('/user/settings/two-factor');

    $response->assertOk();
    $response->assertInertia(fn ($page) => $page
        ->component('user/settings/TwoFactor')
    );
});

test('two-factor authentication page is displayed for admin', function () {
    $user = User::factory()->create();

    $response = $this
        ->actingAs($user)
        ->withSession(['auth.password_confirmed_at' => time()])
        ->get('/admin/settings/two-factor');

    $response->assertOk();
    $response->assertInertia(fn ($page) => $page
        ->component('admin/settings/TwoFactor')
    );
});
