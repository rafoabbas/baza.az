<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('stores', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->nullable()->constrained('users')->nullOnDelete();
            $table->foreignId('region_id')->nullable()->constrained('regions')->nullOnDelete();
            $table->string('name')->nullable();
            $table->string('slug')->nullable();
            $table->text('address')->nullable();
            $table->string('email')->nullable();
            $table->string('web_site')->nullable();
            $table->json('working_hours')->nullable();
            $table->json('phones')->nullable();
            $table->string('image')->nullable();
            $table->string('images')->nullable();
            $table->text('description')->nullable();
            $table->json('banners')->nullable();
            $table->json('addresses')->nullable();
            $table->boolean('published')->default(false)->nullable();
            $table->integer('order')->nullable();
            $table->timestamp('published_at')->nullable();
            $table->timestamps();
        });

        Schema::create('store_store_type', function (Blueprint $table) {
            $table->id();
            $table->foreignId('store_id')->nullable()->constrained('stores')->nullOnDelete();
            $table->foreignId('store_type_id')->nullable()->constrained('store_types')->nullOnDelete();
            $table->text('description')->nullable();
        });

        Schema::create('store_car_brand', function (Blueprint $table) {
            $table->id();
            $table->foreignId('store_id')->nullable()->constrained('stores')->nullOnDelete();
            $table->foreignId('car_brand_id')->nullable()->constrained('car_brands')->nullOnDelete();
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
