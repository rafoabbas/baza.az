<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('services', function (Blueprint $table) {
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
            $table->timestamp('verified_at')->nullable();
            $table->timestamps();
        });

        Schema::create('service_specification', function (Blueprint $table) {
            $table->foreignId('service_id')->nullable()->constrained('services')->nullOnDelete();
            $table->foreignId('specification_id')->nullable()->constrained('specifications')->nullOnDelete();
        });

        Schema::create('service_car_brand', function (Blueprint $table) {
            $table->id();
            $table->foreignId('service_id')->nullable()->constrained('stores')->nullOnDelete();
            $table->foreignId('car_brand_id')->nullable()->constrained('car_brands')->nullOnDelete();
        });

        Schema::create('service_service_group_item', function (Blueprint $table) {
            $table->foreignId('service_id')->nullable()->constrained('services')->nullOnDelete();
            $table->foreignId('service_group_id')->nullable()->constrained('service_groups')->nullOnDelete();
            $table->foreignId('service_group_item_id')->nullable()->constrained('service_group_items')->nullOnDelete();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('services');
    }
};
