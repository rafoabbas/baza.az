<?php

namespace App\Models\Common\Car;

use App\Helpers\Helper;
use App\Traits\Eloquent\Filterable;
use Illuminate\Database\Eloquent\Casts\Attribute as AttributeCast;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class CarBrand extends Model
{
    use HasFactory;
    use Filterable;

    protected $fillable = [
        'logo',
        'name_az',
        'name_ru',
        'order',
        'status',
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

    public function models(): HasMany
    {
        return $this->hasMany(CarModel::class);
    }
}
