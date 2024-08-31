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
        Schema::create('about_us', function (Blueprint $table) {
            $table->id();
            $table->string('banner_image')->nullable();

            $table->string('row_one_column_one_icon')->nullable();
            $table->string('row_one_column_one_title')->nullable();
            $table->text('row_one_column_one_description')->nullable();
            $table->text('row_one_column_one_url')->nullable();
            $table->string('row_one_column_two_icon')->nullable();
            $table->string('row_one_column_two_title')->nullable();
            $table->text('row_one_column_two_description')->nullable();
            $table->text('row_one_column_two_url')->nullable();
            $table->string('row_one_column_three_icon')->nullable();
            $table->string('row_one_column_three_title')->nullable();
            $table->text('row_one_column_three_description')->nullable();
            $table->text('row_one_column_three_url')->nullable();

            $table->string('row_two_badge')->nullable();
            $table->string('row_two_title')->nullable();
            $table->longText('row_two_description')->nullable();
            $table->string('row_two_button_name')->nullable();
            $table->string('row_two_button_url')->nullable();

            $table->string('row_three_badge')->nullable();
            $table->string('row_three_title')->nullable();
            $table->longText('row_three_description')->nullable();
            $table->string('row_three_button_name')->nullable();
            $table->string('row_three_button_url')->nullable();

            $table->string('row_four_badge')->nullable();
            $table->string('row_four_title')->nullable();
            $table->longText('row_four_description')->nullable();
            $table->string('row_four_button_name')->nullable();
            $table->string('row_four_button_url')->nullable();

            $table->string('row_five_bg_image');
            $table->string('row_five_column_one_icon')->nullable();
            $table->string('row_five_column_one_title')->nullable();
            $table->text('row_five_column_one_description')->nullable();
            $table->text('row_five_column_one_url')->nullable();

            $table->string('row_five_column_two_icon')->nullable();
            $table->string('row_five_column_two_title')->nullable();
            $table->text('row_five_column_two_description')->nullable();
            $table->text('row_five_column_two_url')->nullable();

            $table->string('row_five_column_three_icon')->nullable();
            $table->string('row_five_column_three_title')->nullable();
            $table->text('row_five_column_three_description')->nullable();
            $table->text('row_five_column_three_url')->nullable();

            $table->string('row_five_column_four_icon')->nullable();
            $table->string('row_five_column_four_title')->nullable();
            $table->text('row_five_column_four_description')->nullable();
            $table->text('row_five_column_four_url')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('about_us');
    }
};
