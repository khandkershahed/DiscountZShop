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
        Schema::create('stores', function (Blueprint $table) {
            $table->id();
            $table->foreignId('country_id')->nullable()->constrained('countries')->onDelete('set null');
            $table->foreignId('division_id')->nullable()->constrained('divisions')->onDelete('set null');
            $table->foreignId('city_id')->nullable()->constrained('cities')->onDelete('set null');
            $table->foreignId('area_id')->nullable()->constrained('areas')->onDelete('set null');
            $table->foreignId('brand_id')->nullable()->constrained('brands')->onDelete('set null');
            $table->foreignId('category_id')->nullable()->constrained('categories')->onDelete('set null');
            $table->string('title')->nullable()->comment('required');
            $table->string('slug')->nullable()->unique();
            $table->string('address_line_one')->nullable();
            $table->string('address_line_two')->nullable();
            $table->string('logo', 200)->nullable();
            $table->string('image', 200)->nullable();
            $table->string('banner_image', 200)->nullable();
            $table->longText('location')->nullable();
            $table->text('description')->nullable();
            $table->text('url')->nullable();

            $table->foreignId('added_by')->nullable()->constrained('admins')->onDelete('set null');//
            $table->foreignId('update_by')->nullable()->constrained('admins')->onDelete('set null');//

            $table->string('category')->nullable();
            $table->string('status')->default('active')->comment('inactive,active');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('stores');
    }
};
