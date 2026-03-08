<?php

return [

    /*
    |--------------------------------------------------------------------------
    | AI Assistant Configuration
    |--------------------------------------------------------------------------
    |
    | Default configuration for the AI chat assistant. The system prompt and
    | model are stored in the database (ai_settings table) and managed
    | by the admin backend. These values serve as fallback defaults.
    |
    */

    'default_model' => env('AI_DEFAULT_MODEL', 'qwen/qwen3-32b'),

    'max_tokens' => env('AI_MAX_TOKENS', 1024),

    'temperature' => env('AI_TEMPERATURE', 0.7),

];
