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
        Schema::create('personal_access_tokens', function (Blueprint $table) {
            $table->id(); // Primary key
            $table->morphs('tokenable'); // Creates tokenable_id and tokenable_type columns
            $table->string('name'); // Token name
            $table->string('token', 64)->unique(); // Unique token string
            $table->text('abilities')->nullable(); // Abilities
            $table->timestamp('last_used_at')->nullable(); // Last used timestamp
            $table->timestamp('expires_at')->nullable(); // Expiry timestamp
            $table->timestamps(); // Created and updated timestamps
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('personal_access_tokens'); // Drop the table
    }
};
