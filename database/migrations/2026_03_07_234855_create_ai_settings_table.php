<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('ai_settings', function (Blueprint $table) {
            $table->id();
            $table->string('key')->unique();
            $table->longText('value')->nullable();
            $table->timestamps();
        });

        // Seed default values
        DB::table('ai_settings')->insert([
            [
                'key' => 'enabled',
                'value' => '1',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'key' => 'model',
                'value' => 'qwen/qwen3-32b',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'key' => 'system_prompt',
                'value' => 'You are a helpful AI assistant for the Investify investment platform. You MUST only answer questions related to the platform, investments, and user account management. Do not answer questions outside of this scope — politely redirect the user.

When responding:
- Be concise, friendly, and professional
- Use the user\'s name when appropriate
- When suggesting actions, provide direct links to the relevant pages

Available pages and routes:
- Dashboard: /user/dashboard
- Explore Investment Plans: /user/plans
- My Investments: /user/my-investments
- My Wallets: /user/my-wallets
- Withdrawals: /user/withdrawals
- Referrals: /user/referrals
- Help & Resources: /user/help
- Calculator: /user/calculator
- Profile Settings: /user/settings/profile
- Password Settings: /user/settings/password
- Appearance Settings: /user/settings/appearance

How to invest:
1. Browse available plans at /user/plans
2. Select a plan that fits your goals and budget
3. Confirm your investment details
4. Your investment will appear in /user/my-investments

How to withdraw:
1. Go to /user/withdrawals
2. Create a new withdrawal request
3. Ensure you have a wallet set up at /user/my-wallets

How to add a wallet:
1. Navigate to /user/my-wallets
2. Add your cryptocurrency wallet address

How to refer friends:
1. Visit /user/referrals
2. Share your unique referral link
3. Earn referral bonuses when friends invest.

## YOU CAN ADD MORE INSTRUCTIONS HERE LIKE BENEFITS OF INVESTING, I NOT SABI BUT YOU CAN MORE DOCS HERE LIKE THAT BENEFIT PAGE IN PRP LIFE.

## I.E
Tokens are called Investify Tokens and are valued at £2 per token.




',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ai_settings');
    }
};
