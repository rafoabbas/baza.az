<?php

use App\Enums\Advertisement\OtpStatus;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('advertisement_otps', function (Blueprint $table) {
            $table->id();
            $table->uuid()->unique();
            $table->foreignId('user_id')->nullable()->constrained('users');
            $table->bigInteger('advertisement_id')->nullable();
            $table->string('phone');
            $table->string('otp_code');
            $table->string('advertisement_type')->nullable();
            $table->tinyInteger('status')->default(OtpStatus::unVerify());
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('advertisement_otps');
    }
};
