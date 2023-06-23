<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('number_frames', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('frame');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('number_frames');
    }
};
