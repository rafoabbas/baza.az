<?php

namespace App\Models\Common\Auto;

use App\Helpers\Classes\Helper;
use App\Traits\Eloquent\Attributes\NameAttribute;
use App\Traits\Eloquent\Filterable;
use Illuminate\Database\Eloquent\Casts\Attribute as AttributeCast;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Kyslik\ColumnSortable\Sortable;

class Color extends Model
{
    use HasFactory;
    use Sortable;
    use Filterable;
    use NameAttribute;

    protected $fillable = [
        'name_az',
        'name_ru',
        'order',
        'status'
    ];

    protected $appends = [
        'name',
    ];
}
