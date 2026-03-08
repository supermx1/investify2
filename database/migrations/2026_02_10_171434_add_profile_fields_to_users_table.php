<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::table('users', function (Blueprint $table) {
            $table->string('first_name')->nullable()->after('id');
            $table->string('last_name')->nullable()->after('first_name');
            $table->string('phone')->nullable()->after('email');
            $table->string('address')->nullable()->after('phone');
            $table->string('city')->nullable()->after('address');
            $table->string('state')->nullable()->after('city');
            $table->string('zip_code')->nullable()->after('state');
            $table->string('country')->nullable()->after('zip_code');
            $table->string('avatar_path')->nullable()->after('country');
            $table->string('role')->default('user')->after('avatar_path');
        });

        // Split existing names
        DB::table('users')->chunkById(100, function ($users) {
            foreach ($users as $user) {
                if (empty($user->name)) {
                    continue;
                }

                $parts = explode(' ', $user->name, 2);
                $firstName = $parts[0];
                $lastName = $parts[1] ?? '';

                DB::table('users')->where('id', $user->id)->update([
                    'first_name' => $firstName,
                    'last_name' => $lastName,
                ]);
            }
        });

        Schema::table('users', function (Blueprint $table) {
            $table->dropColumn('name');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('users', function (Blueprint $table) {
            $table->string('name')->after('id');
        });

        // Restore names
        DB::table('users')->chunkById(100, function ($users) {
            foreach ($users as $user) {
                DB::table('users')->where('id', $user->id)->update([
                    'name' => trim(($user->first_name ?? '') . ' ' . ($user->last_name ?? '')),
                ]);
            }
        });

        Schema::table('users', function (Blueprint $table) {
            $table->dropColumn([
                'first_name',
                'last_name',
                'phone',
                'address',
                'city',
                'state',
                'zip_code',
                'country',
                'avatar_path',
                'role',
            ]);
        });
    }
};
