<?php

namespace App\Models\User\Rental;

use App\Casts\PhonesCast;
use App\Models\Common\Location\Region;
use App\Models\Guard\User;
use App\Traits\Eloquent\Filterable;
use App\Traits\Eloquent\Uploadable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Kyslik\ColumnSortable\Sortable;

class RentalItem extends Model
{
    use HasFactory;
    use Sortable;
    use Filterable;
    use Uploadable;

    protected $fillable = [
        'rental_office_id',
        'region_id',
        'car_brand_id',
        'car_model_id',
        'class_type_id',
        'fuel_type_id',
        'transmission_id',
        'color_id',
        'gear_id',
        'seat_counts',
        'door_counts',
        'metallic',
        'matte',
        'fuel_consumption',
        'engine_volume',
        'year',
        'mileage',
        'daily_price',
        'pledge_azn',
        'pledge_usd',
        'pledge_eur',
        'main_currency',
        'min_driver_age',
        'mileage_limit',
        'required_documents',
        'car_insurance',
        'payment_method',
        'fuel_status',
        'additional_conditions',
    ];

    protected $casts = [
        'working_hours' => 'json',
        'images' => 'json',
        'banners' => 'json',
        'addresses' => 'json',
        'phones' => PhonesCast::class
    ];

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    public function region(): BelongsTo
    {
        return $this->belongsTo(Region::class);
    }

    public function getRegionNameAttribute(): string
    {
        return $this->region?->getAttribute('name');
    }
}
