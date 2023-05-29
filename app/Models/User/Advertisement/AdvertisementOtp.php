<?php

namespace App\Models\User\Advertisement;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AdvertisementOtp extends Model
{
    use HasFactory;

    protected $fillable = [
        'uuid',
        'user_id',
        'advertisement_id',
        'phone',
        'otp_code',
        'advertisement_type',
        'status'
    ];
}
