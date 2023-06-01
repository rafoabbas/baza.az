<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create(config('setting.database.table'), function (Blueprint $table) {
            $table->increments('id');
            $table->string('locale')->nullable();
            $table->string(config('setting.database.key'))->index();
            $table->text(config('setting.database.value'));
            $table->index(['locale', config('setting.database.key')]);
        });
    }

    public function down(): void
    {
        Schema::drop(config('setting.database.table'));
    }
};
