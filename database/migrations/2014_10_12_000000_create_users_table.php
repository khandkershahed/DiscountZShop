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
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email')->unique();
            $table->string('phone')->nullable();
            $table->integer('point')->nullable();
            $table->string('membership_type')->nullable();
            $table->string('gender')->nullable();
            $table->string('division')->nullable();
            $table->string('district')->nullable();
            $table->string('city')->nullable();
            $table->string('area')->nullable();
            $table->string('location')->nullable();
            $table->string('profile_image')->nullable();
            $table->string('status')->default('active')->nullable();
            $table->string('verification_code')->nullable();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->rememberToken();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
