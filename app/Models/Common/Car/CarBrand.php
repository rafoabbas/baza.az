<?php

namespace App\Models\Common\Car;

use App\Helpers\Classes\Helper;
use App\Traits\Eloquent\Attributes\NameAttribute;
use App\Traits\Eloquent\Filterable;
use Illuminate\Database\Eloquent\Casts\Attribute as AttributeCast;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Kyslik\ColumnSortable\Sortable;

class CarBrand extends Model
{
    use Sortable;
    use HasFactory;
    use Filterable;
    use NameAttribute;

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

    public function models(): HasMany
    {
        return $this->hasMany(CarModel::class);
    }
}
