<?php

use App\Enums\Advertisement\AdvertisementStatus;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('numbers', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->nullable()->constrained('users');
            $table->foreignId('region_id')->nullable()->constrained('regions');
            $table->foreignId('number_region_id')->nullable()->constrained('number_regions');
            $table->string('region_prefix', 2)->nullable();
            $table->string('alphabet', 2)->nullable();
            $table->string('number', 3)->nullable();
            $table->string('full', 7)->nullable();
            $table->decimal('price_azn')->nullable();
            $table->decimal('price_usd')->nullable();
            $table->decimal('price_eur')->nullable();
            $table->tinyInteger('status')->default(AdvertisementStatus::pending());
            $table->boolean('is_mirror_numbers')->default(false);
            $table->boolean('is_three_numbers_in_a_row')->default(false);
            $table->boolean('is_five_numbers_in_a_row')->default(false);
            $table->boolean('is_two_zeros_and_a_number')->default(false);
            $table->boolean('is_vip')->default(false);
            $table->bigInteger('views')->default(1);
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('numbers');
    }
};
