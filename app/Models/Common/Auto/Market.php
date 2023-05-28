<?php

namespace App\Models\Common\Auto;

use App\Helpers\Helper;
use Illuminate\Database\Eloquent\Casts\Attribute as AttributeCast;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Market extends Model
{
    use HasFactory;

    protected $fillable = [
        'name_az',
        'name_ru',
        'order',
        'status'
    ];

    protected $appends = [
        'name',
    ];

    public function name(): AttributeCast
    {
        return AttributeCast::make(
            get: fn () => $this->{Helper::column('name')},
        );
    }
}
