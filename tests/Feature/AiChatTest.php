<?php

use App\Models\AiSetting;
use App\Models\User;
use Illuminate\Support\Facades\Http;

test('guests cannot access the AI chat endpoint', function () {
    $this->postJson(route('user.ai-chat'), [
        'message' => 'Hello',
    ])->assertUnauthorized();
});

test('authenticated users can send a chat message', function () {
    Http::fake([
        '*/chat/completions' => Http::response([
            'choices' => [
                [
                    'message' => [
                        'content' => 'Hello! How can I help you today?',
                    ],
                ],
            ],
        ]),
    ]);

    /** @var User $user */
    $user = User::factory()->create();

    $this->actingAs($user)
        ->postJson(route('user.ai-chat'), [
            'message' => 'How do I make an investment?',
        ])
        ->assertSuccessful()
        ->assertJsonStructure(['message']);
});

test('message field is required', function () {
    /** @var User $user */
    $user = User::factory()->create();

    $this->actingAs($user)
        ->postJson(route('user.ai-chat'), [])
        ->assertUnprocessable()
        ->assertJsonValidationErrors('message');
});

test('message must not exceed 2000 characters', function () {
    /** @var User $user */
    $user = User::factory()->create();

    $this->actingAs($user)
        ->postJson(route('user.ai-chat'), [
            'message' => str_repeat('a', 2001),
        ])
        ->assertUnprocessable()
        ->assertJsonValidationErrors('message');
});

test('returns unavailable message when AI is disabled', function () {
    AiSetting::query()->where('key', 'enabled')->update(['value' => '0']);

    Http::fake();

    /** @var User $user */
    $user = User::factory()->create();

    $response = $this->actingAs($user)
        ->postJson(route('user.ai-chat'), [
            'message' => 'Hello',
        ])
        ->assertSuccessful();

    expect($response->json('message'))->toContain('unavailable');

    Http::assertNothingSent();
});

test('conversation history is accepted', function () {
    Http::fake([
        '*/chat/completions' => Http::response([
            'choices' => [
                [
                    'message' => [
                        'content' => 'You can explore plans at /user/plans.',
                    ],
                ],
            ],
        ]),
    ]);

    /** @var User $user */
    $user = User::factory()->create();

    $this->actingAs($user)
        ->postJson(route('user.ai-chat'), [
            'message' => 'Tell me more about the first plan.',
            'history' => [
                ['role' => 'user', 'content' => 'What plans are available?'],
                ['role' => 'assistant', 'content' => 'We have several investment plans.'],
            ],
        ])
        ->assertSuccessful()
        ->assertJsonStructure(['message']);
});
