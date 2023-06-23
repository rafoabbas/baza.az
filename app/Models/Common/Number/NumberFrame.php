<?php

namespace App\Models\Common\Number;

use App\Traits\Eloquent\Filterable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Kyslik\ColumnSortable\Sortable;

class NumberFrame extends Model
{
    use HasFactory;
    use Filterable;
    use Sortable;

    protected $fillable = [
        'name',
        'frame',
        'order'
    ];
}
