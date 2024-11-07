<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::table('stores', function (Blueprint $table) {
            // Changing JSON fields to foreign keys with nullable constraint
            $table->dropColumn(['country_id', 'division_id', 'city_id', 'area_id']);
            $table->foreignId('country_id')->nullable()->constrained('countries')->onDelete('set null');
            $table->foreignId('division_id')->nullable()->constrained('divisions')->onDelete('set null');
            $table->foreignId('city_id')->nullable()->constrained('cities')->onDelete('set null');
            $table->foreignId('area_id')->nullable()->constrained('areas')->onDelete('set null');

            // Adding a new foreign key field
            $table->foreignId('brand_id')->nullable()->constrained('brands')->onDelete('set null');

            // Modifying existing fields
            $table->string('title')->nullable();
            $table->string('slug')->nullable()->unique()->change();
            $table->string('address_line_one')->nullable();
            $table->string('address_line_two')->nullable();
            $table->string('name', 30)->nullable()->change();
        });
    }

    public function down()
    {
        Schema::table('stores', function (Blueprint $table) {
            // Revert changes to previous state if needed
            $table->dropForeign(['country_id']);
            $table->dropForeign(['division_id']);
            $table->dropForeign(['city_id']);
            $table->dropForeign(['area_id']);
            $table->dropForeign(['brand_id']);
            $table->dropColumn(['country_id', 'division_id', 'city_id', 'area_id', 'brand_id', 'title', 'address_line_one', 'address_line_two']);

            $table->json('country_id')->nullable();
            $table->json('division_id')->nullable();
            $table->json('city_id')->nullable();
            $table->json('area_id')->nullable();
            $table->string('name', 30)->unique()->change();
        });
    }
};
