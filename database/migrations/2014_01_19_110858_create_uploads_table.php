<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('uploads', function (Blueprint $table) {
            $table->id();
            $table->nullableMorphs('uploadable');
            $table->string('name', 100)->nullable();
            $table->string('path', 60)->nullable()->index();
            $table->string('mime_type', 32)->nullable();
            $table->string('extension', 16)->nullable();
            $table->string('disk', 32)->nullable();
            $table->integer('size')->nullable();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('uploads');
    }
};
