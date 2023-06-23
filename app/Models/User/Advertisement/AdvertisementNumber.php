<?php

namespace App\Models\User\Advertisement;

use App\Models\Common\Number\NumberFrame;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;
use Kyslik\ColumnSortable\Sortable;

class AdvertisementNumber extends Model
{
    use HasFactory;
    use Sortable;
    use SoftDeletes;

    protected $fillable = [
        'uuid',
        'user_id',
        'number_frame_id',
        'region_id',
        'number_region_id',
        'region_prefix',
        'series_first_character',
        'series_second_character',
        'first_number',
        'second_number',
        'third_number',
        'full',
        'description',
        'price_azn',
        'price_usd',
        'price_eur',
        'main_currency',
        'status',
        'is_mirror_numbers',
        'is_three_numbers_in_a_row',
        'is_five_numbers_in_a_row',
        'is_two_zeros_and_a_number',
        'is_vip',
        'is_top',
        'name',
        'email',
        'phone',
        'expired_at',
        'deleted_at'
    ];

    public function frame(): BelongsTo
    {
        return $this->belongsTo(NumberFrame::class, 'number_frame_id', 'id');
    }
}
