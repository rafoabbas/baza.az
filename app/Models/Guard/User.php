<?php

namespace App\Models\Guard;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use App\Models\User\UserLogin;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens;
    use HasFactory;
    use Notifiable;

    protected $fillable = [
        'name',
        'phone',
        'phones',
        'email',
        'email_verified_at',
        'password',
        'is_business',
        'tin',
        'company_name',
        'company_logo',
        'balance',
        'advertisement_credit',
        'avatar',
        'connection_ip',
        'last_login_at'
    ];

    protected $hidden = [
        'connection_ip',
        'password',
        'remember_token',
    ];

    protected $casts = [
        'email_verified_at' => 'datetime',
        'last_login_at' => 'datetime'
    ];

    public function logins(): HasMany
    {
        return $this->hasMany(UserLogin::class);
    }
}
