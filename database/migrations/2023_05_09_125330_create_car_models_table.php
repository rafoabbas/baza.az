<?php

use App\Enums\Common\Status;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('car_models', function (Blueprint $table) {
            $table->id();
            $table->foreignId('car_brand_id')->constrained()->cascadeOnDelete();
            $table->string('name_az', 64);
            $table->string('name_ru', 64);
            $table->integer('order')->nullable()->default(0);
            $table->boolean('status')->default(Status::published());
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('car_models');
    }
};
