<?php

use App\Models\User;

test('profile page is displayed', function () {
    $user = User::factory()->create();

    $response = $this
        ->actingAs($user)
        ->get('/user/settings/profile');

    $response->assertOk();
});

test('profile information can be updated', function () {
    $user = User::factory()->create();

    $response = $this
        ->actingAs($user)
        ->patch('/user/settings/profile', [
            'first_name' => 'Test',
            'last_name' => 'User',
            'email' => 'test@example.com',
            'role' => 'user',
        ]);

    $response
        ->assertSessionHasNoErrors()
        ->assertRedirect('/user/settings/profile');

    $user->refresh();

    expect($user->first_name)->toBe('Test');
    expect($user->last_name)->toBe('User');
    expect($user->name)->toBe('Test User');
    expect($user->email)->toBe('test@example.com');
    expect($user->email_verified_at)->toBeNull();
});

test('company profile can be updated', function () {
    $user = User::factory()->create(['role' => 'company']);

    $response = $this
        ->actingAs($user)
        ->patch('/user/settings/profile', [
            'company_name' => 'Acme Corp',
            'email' => 'company@example.com',
            'role' => 'company',
        ]);

    $response
        ->assertSessionHasNoErrors()
        ->assertRedirect('/user/settings/profile');

    $user->refresh();

    expect($user->company_name)->toBe('Acme Corp');
    expect($user->email)->toBe('company@example.com');
});

test('email verification status is unchanged when the email address is unchanged', function () {
    $user = User::factory()->create();

    $response = $this
        ->actingAs($user)
        ->patch('/user/settings/profile', [
            'first_name' => 'Test',
            'last_name' => 'User',
            'email' => $user->email,
            'role' => 'user',
        ]);

    $response
        ->assertSessionHasNoErrors()
        ->assertRedirect('/user/settings/profile');

    expect($user->refresh()->email_verified_at)->not->toBeNull();
});

test('user can delete their account', function () {
    $user = User::factory()->create();

    $response = $this
        ->actingAs($user)
        ->delete('/user/settings/profile', [
            'password' => 'password',
        ]);

    $response
        ->assertSessionHasNoErrors()
        ->assertRedirect('/');

    $this->assertGuest();
    expect($user->fresh())->toBeNull();
});

test('correct password must be provided to delete account', function () {
    $user = User::factory()->create();

    $response = $this
        ->actingAs($user)
        ->from('/user/settings/profile')
        ->delete('/user/settings/profile', [
            'password' => 'wrong-password',
        ]);

    $response
        ->assertSessionHasErrors('password')
        ->assertRedirect('/user/settings/profile');

    expect($user->fresh())->not->toBeNull();
});
