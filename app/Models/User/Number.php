<?php

namespace App\Models\User;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Kyslik\ColumnSortable\Sortable;

class Number extends Model
{
    use HasFactory;
    use Sortable;
    use SoftDeletes;

    protected $fillable = [
        'user_id',
        'region_id',
        'number_region_id',
        'region_prefix',
        'alphabet',
        'number',
        'full',
        'status',
        'is_mirror_numbers',
        'is_three_numbers_in_a_row',
        'is_five_numbers_in_a_row',
        'is_two_zeros_and_a_number',
        'is_vip',
        'name',
        'email',
        'phone',
        'expired_at',
        'deleted_at'
    ];
}
