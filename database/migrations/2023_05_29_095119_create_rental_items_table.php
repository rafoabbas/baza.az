<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('rental_items', function (Blueprint $table) {
            $table->id();
            $table->foreignId('rental_office_id')->nullable()->constrained('rental_offices')->nullOnDelete();
            $table->foreignId('region_id')->nullable()->constrained('regions')->nullOnDelete();
            $table->foreignId('car_brand_id')->nullable()->constrained('car_brands')->nullOnDelete();
            $table->foreignId('car_model_id')->nullable()->constrained('car_models')->nullOnDelete();
            $table->foreignId('class_type_id')->nullable()->constrained('class_types')->nullOnDelete();
            $table->foreignId('fuel_type_id')->nullable()->constrained('fuel_types')->nullOnDelete();
            $table->foreignId('transmission_id')->nullable()->constrained('transmissions')->nullOnDelete();
            $table->foreignId('color_id')->nullable()->constrained('colors')->nullOnDelete();
            $table->foreignId('gear_id')->nullable()->constrained('gears')->nullOnDelete();

            $table->tinyInteger('seat_counts')->default(2)->nullable();
            $table->tinyInteger('door_counts')->default(2)->nullable();
            $table->boolean('metallic')->default(false)->nullable();
            $table->boolean('matte')->default(false)->nullable();
            $table->string('fuel_consumption')->nullable();
            $table->decimal('engine_volume', 1)->nullable();
            $table->integer('year')->nullable();
            $table->integer('mileage')->nullable();

            $table->json('daily_price')->nullable();

            // Conditions
            $table->string('pledge_azn')->nullable();
            $table->string('pledge_usd')->nullable();
            $table->string('pledge_eur')->nullable();
            $table->string('main_currency', 3)->default('AZN')->index();
            $table->tinyInteger('min_driver_age')->default(18)->nullable();
            $table->integer('mileage_limit')->nullable();
            $table->string('required_documents')->nullable();
            $table->string('car_insurance')->nullable();
            $table->string('payment_method')->nullable();
            $table->string('fuel_status')->nullable();
            $table->string('additional_conditions')->nullable();



            $table->string('images')->nullable();
            $table->text('description')->nullable();
            $table->json('addresses')->nullable();
            $table->boolean('published')->default(false)->nullable();
            $table->integer('order')->nullable();
            $table->timestamp('published_at')->nullable();
            $table->timestamp('verified_at')->nullable();

            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('rental_items');
    }
};
