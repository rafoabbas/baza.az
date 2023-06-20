<?php

namespace App\Models\Common\Auto;

use App\Traits\Eloquent\Attributes\NameAttribute;
use App\Traits\Eloquent\Filterable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Kyslik\ColumnSortable\Sortable;

class ServiceGroupItem extends Model
{
    use HasFactory;
    use Sortable;
    use Filterable;
    use NameAttribute;

    protected $fillable = [
        'service_group_id',
        'name_az',
        'name_ru',
        'order',
        'status'
    ];

    protected $appends = [
        'name',
    ];

    public function serviceGroup(): BelongsTo
    {
        return $this->belongsTo(ServiceGroup::class, 'service_group_id', 'id');
    }
}
