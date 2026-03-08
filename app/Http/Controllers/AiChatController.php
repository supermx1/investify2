<?php

namespace App\Http\Controllers;

use App\Models\AiSetting;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class AiChatController extends Controller
{
    /**
     * Handle an AI chat message.
     */
    public function chat(Request $request): JsonResponse
    {
        $request->validate([
            'message' => ['required', 'string', 'max:2000'],
            'history' => ['nullable', 'array'],
            'history.*.role' => ['required_with:history', 'string', 'in:user,assistant'],
            'history.*.content' => ['required_with:history', 'string'],
        ]);

        if (! AiSetting::isEnabled()) {
            return response()->json([
                'message' => 'The AI assistant is currently unavailable. Please try again later.',
            ]);
        }

        $user = $request->user();
        $systemPrompt = $this->buildSystemPrompt($user);

        $messages = [
            ['role' => 'system', 'content' => $systemPrompt],
        ];

        // Add conversation history
        if ($request->has('history') && is_array($request->history)) {
            foreach ($request->history as $entry) {
                $messages[] = [
                    'role' => $entry['role'],
                    'content' => $entry['content'],
                ];
            }
        }

        // Add the new user message
        $messages[] = [
            'role' => 'user',
            'content' => $request->message,
        ];

        try {
            $response = Http::withHeaders([
                'Authorization' => 'Bearer ' . config('services.groq.api_key'),
                'Content-Type' => 'application/json',
            ])
                ->timeout(30)
                ->post(config('services.groq.base_url') . '/chat/completions', [
                    'model' => AiSetting::getModel(),
                    'messages' => $messages,
                    'max_tokens' => config('ai.max_tokens', 1024),
                    'temperature' => config('ai.temperature', 0.7),
                ]);

            if ($response->successful()) {
                $data = $response->json();
                $assistantMessage = $data['choices'][0]['message']['content'] ?? 'I apologize, but I was unable to generate a response. Please try again.';

                return response()->json([
                    'message' => $assistantMessage,
                ]);
            }

            return response()->json([
                'message' => 'I apologize, but I encountered an issue processing your request. Please try again.',
            ], 500);
        } catch (\Exception $e) {
            report($e);

            return response()->json([
                'message' => 'I apologize, but the AI assistant is temporarily unavailable. Please try again later.',
            ], 500);
        }
    }

    /**
     * Build the system prompt with user context injected.
     */
    private function buildSystemPrompt(mixed $user): string
    {
        $basePrompt = AiSetting::getSystemPrompt();

        $userContext = "\n\n--- User Context ---\n";
        $userContext .= 'User Name: ' . ($user->first_name ?? 'User') . ' ' . ($user->last_name ?? '') . "\n";
        $userContext .= 'User Email: ' . ($user->email ?? 'N/A') . "\n";
        $userContext .= "---\n";
        $userContext .= 'When responding, address the user by their first name when it feels natural.';

        return $basePrompt . $userContext;
    }
}
