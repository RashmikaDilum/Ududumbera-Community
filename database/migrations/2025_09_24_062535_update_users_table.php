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
            // Drop the google_id column
            $table->dropColumn('google_id');
            
            // Add new provider columns
            $table->string('provider_id')->nullable()->after('email_verified_at');
            $table->string('provider_name')->nullable()->after('provider_id');
            $table->text('provider_token')->nullable()->after('provider_name');
            $table->text('provider_refresh_token')->nullable()->after('provider_token');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('users', function (Blueprint $table) {
            // Add back the google_id column
            $table->string('google_id')->nullable()->after('email_verified_at');
            
            // Drop the provider columns
            $table->dropColumn([
                'provider_id',
                'provider_name', 
                'provider_token',
                'provider_refresh_token'
            ]);
        });
    }
};
