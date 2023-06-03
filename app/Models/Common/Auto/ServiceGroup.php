<?php

namespace App\Models\Common\Auto;

use App\Traits\Eloquent\Attributes\NameAttribute;
use App\Traits\Eloquent\Filterable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Kyslik\ColumnSortable\Sortable;

class ServiceGroup extends Model
{
    use HasFactory;
    use Sortable;
    use Filterable;
    use NameAttribute;

    protected $fillable = [
        'name_az',
        'name_ru',
        'icon',
        'order',
        'status'
    ];

    protected $appends = [
        'name',
    ];

    public function items()
    {
        return $this->hasMany(ServiceGroupItem::class);
    }
}
