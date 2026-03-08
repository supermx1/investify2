<?php

use App\Models\User;

test('admin is redirected to admin dashboard', function () {
    $user = User::factory()->create([
        'role' => 'admin',
    ]);

    $response = $this->post('/login', [
        'email' => $user->email,
        'password' => 'password',
    ]);

    $response->assertRedirect(route('admin.dashboard'));
});

test('user is redirected to user dashboard', function () {
    $user = User::factory()->create([
        'role' => 'user',
    ]);

    $response = $this->post('/login', [
        'email' => $user->email,
        'password' => 'password',
    ]);

    $response->assertRedirect(route('user.dashboard'));
});
