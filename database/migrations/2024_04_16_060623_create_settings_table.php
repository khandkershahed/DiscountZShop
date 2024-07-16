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
        Schema::create('settings', function (Blueprint $table) {
            $table->id();
            $table->string('site_name', 250)->nullable();
            $table->text('site_motto')->nullable();
            $table->text('site_url')->nullable();
            $table->string('site_white_logo', 255)->nullable();
            $table->string('site_black_logo', 255)->nullable();
            $table->string('site_favicon', 255)->nullable();
            $table->string('contact_email', 100)->nullable();
            $table->string('support_email', 100)->nullable();
            $table->string('info_email', 100)->nullable();
            $table->string('sales_email', 100)->nullable();
            $table->string('phone_one', 20)->nullable();
            $table->string('phone_two', 20)->nullable();
            $table->string('whatsapp_number', 20)->nullable();
            $table->string('default_language', 50)->nullable();
            $table->boolean('maintenance_mode')->default(false);
            $table->text('address_line_one')->nullable();
            $table->text('address_line_two')->nullable();
            $table->string('seo_keywords', 255)->nullable();
            $table->text('seo_description')->nullable();
            $table->string('company_name')->nullable();
            $table->string('system_timezone')->nullable(); // assuming timezone is a html text like 'UTC', 'EST', etc valueeee, select option
            $table->text('facebook_url')->nullable();
            $table->text('twitter_url')->nullable();
            $table->text('instagram_url')->nullable();
            $table->text('linkedin_url')->nullable();
            $table->text('youtube_url')->nullable();
            $table->text('github_url')->nullable();
            $table->text('portfolio_url')->nullable();
            $table->text('fiver_url')->nullable();
            $table->text('upwork_url')->nullable();
            $table->string('service_days')->nullable();
            $table->string('service_time')->nullable();
            $table->unsignedBigInteger('created_by')->nullable();
            $table->unsignedBigInteger('updated_by')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('settings');
    }
};


//$table->string('currency', 10)->default('USD');
//$table->string('timezone', 50)->default('UTC');
//$table->integer('pagination_count')->default(15);
//$table->string('analytics_code', 255)->nullable();
//$table->string('google_maps_key', 255)->nullable();
//$table->string('recaptcha_site_key', 255)->nullable();
//$table->string('recaptcha_secret_key', 255)->nullable();
