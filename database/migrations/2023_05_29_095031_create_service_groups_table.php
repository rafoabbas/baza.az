<?php

use App\Enums\Common\Status;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('service_groups', function (Blueprint $table) {
            $table->id();
            $table->string('name_az', 64);
            $table->string('name_ru', 64);
            $table->text('icon')->nullable();
            $table->integer('order')->nullable()->default(0);
            $table->boolean('status')->default(Status::published());
            $table->timestamps();
        });

        Schema::create('service_group_items', function (Blueprint $table) {
            $table->id();
            $table->foreignId('service_group_id')->constrained('service_groups')->cascadeOnDelete();
            $table->string('name_az', 64);
            $table->string('name_ru', 64);
            $table->integer('order')->nullable()->default(0);
            $table->boolean('status')->default(Status::published());
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('service_groups');
        Schema::dropIfExists('service_group_items');
    }
};
