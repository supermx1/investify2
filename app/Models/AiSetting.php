<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class AiSetting extends Model
{
    protected $fillable = [
        'key',
        'value',
    ];

    /**
     * Get a setting value by key, with an optional fallback.
     */
    public static function getValue(string $key, ?string $default = null): ?string
    {
        $setting = static::query()->where('key', $key)->first();

        return $setting?->value ?? $default;
    }

    /**
     * Check if the AI assistant is enabled.
     */
    public static function isEnabled(): bool
    {
        return (bool) static::getValue('enabled', '0');
    }

    /**
     * Get the configured AI model name.
     */
    public static function getModel(): string
    {
        return static::getValue('model', 'qwen/qwen3-32b');
    }

    /**
     * Get the system prompt.
     */
    public static function getSystemPrompt(): string
    {
        return static::getValue('system_prompt', 'You are a helpful AI assistant for an investment platform.');
    }
}
