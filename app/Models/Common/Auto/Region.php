<?php

namespace App\Models\Common\Auto;

use App\Traits\Eloquent\Attributes\NameAttribute;
use App\Traits\Eloquent\Filterable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Kyslik\ColumnSortable\Sortable;

class Region extends Model
{
    use HasFactory;
    use Filterable;
    use Sortable;
    use NameAttribute;

    protected $fillable = [
        'region',
        'name_az',
        'name_ru',
        'order',
        'status'
    ];

    protected $appends = [
        'name'
    ];
}