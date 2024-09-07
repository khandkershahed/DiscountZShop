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
        Schema::create('offers', function (Blueprint $table) {
            $table->id();

            $table->json('country_id')->nullable();//
            $table->json('division_id')->nullable();//
            $table->json('city_id')->nullable();//
            $table->json('area_id')->nullable();//

            $table->json('notify_to')->nullable()->comment('ids from admin table');//

            $table->foreignId('category_id')->nullable()->constrained('categories')->onDelete('set null');//
            $table->foreignId('brand_id')->nullable()->constrained('brands')->onDelete('set null');//
            $table->foreignId('store_id')->nullable()->constrained('stores')->onDelete('set null');//
            $table->foreignId('added_by')->nullable()->constrained('admins')->onDelete('set null');//

            $table->string('badge')->nullable();//
            $table->string('name')->unique();//
            $table->string('slug')->unique();//

            $table->string('logo')->nullable();//
            $table->string('image')->nullable();//
            $table->string('banner_image')->nullable();//

            $table->double('price')->nullable();//
            $table->double('offer_price')->nullable();//

            $table->longText('description')->nullable();//

            $table->longText('locations')->nullable();//

            $table->text('url')->nullable();//

            $table->text('source_url')->nullable();//

            $table->string('coupon_code')->nullable();//

            $table->text('map_url')->nullable();//
            $table->json('tags')->nullable();//

            $table->date('start_date')->nullable();//
            $table->date('notification_date')->nullable();//
            $table->date('expiry_date')->nullable();//

            $table->string('status')->default('active')->comment('inactive,active,expired');//

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('offers');
    }
};
