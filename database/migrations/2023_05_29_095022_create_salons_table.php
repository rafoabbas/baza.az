<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('salons', function (Blueprint $table) {
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

        Schema::create('salon_specification', function (Blueprint $table) {
            $table->foreignId('salon_id')->nullable()->constrained('salons')->nullOnDelete();
            $table->foreignId('specification_id')->nullable()->constrained('specifications')->nullOnDelete();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('salons');
    }
};
