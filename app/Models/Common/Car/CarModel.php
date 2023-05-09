<?php

namespace App\Models\Common\Car;

use App\Helpers\Helper;
use App\Traits\Eloquent\Filterable;
use Illuminate\Database\Eloquent\Casts\Attribute as AttributeCast;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CarModel extends Model
{
    use HasFactory;
    use Filterable;

    protected $fillable = [
        'car_brand_id',
        'name_az',
        'name_ru',
        'order',
        'status',
    ];

    public function name(): AttributeCast
    {
        return AttributeCast::make(
            get: fn () => $this->{Helper::column('name')},
        );
    }
}
