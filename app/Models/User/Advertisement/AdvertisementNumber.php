<?php

namespace App\Models\User\Advertisement;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Kyslik\ColumnSortable\Sortable;

class AdvertisementNumber extends Model
{
    use HasFactory;
    use Sortable;
    use SoftDeletes;

    protected $fillable = [
        'user_id',
        'region_id',
        'number_region_id',
        'region_prefix',
        'alphabet_first_character',
        'alphabet_second_character',
        'first_number',
        'second_number',
        'third_number',
        'full',
        'price_azn',
        'price_usd',
        'price_eur',
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
