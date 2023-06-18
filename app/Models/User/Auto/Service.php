<?php

namespace App\Models\User\Auto;

use App\Casts\PhonesCast;
use App\Helpers\Classes\Helper;
use App\Models\Common\Auto\ServiceGroupItem;
use App\Models\Common\Auto\Specification;
use App\Models\Common\Car\CarBrand;
use App\Models\Common\Location\Region;
use App\Models\Guard\User;
use App\Traits\Eloquent\Filterable;
use App\Traits\Eloquent\Uploadable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Kyslik\ColumnSortable\Sortable;
use Illuminate\Database\Eloquent\Casts\Attribute as AttributeCast;

class Service extends Model
{
    use HasFactory;
    use Sortable;
    use Filterable;
    use Uploadable;

    protected $fillable = [
        'user_id',
        'region_id',
        'name',
        'slug',
        'address',
        'email',
        'web_site',
        'working_hours',
        'phones',
        'image',
        'images',
        'description',
        'banners',
        'addresses',
        'published',
        'order',
        'published_at',
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

    public function items(): BelongsToMany
    {
        return $this->belongsToMany(ServiceGroupItem::class, 'service_service_group_item');
    }

    public function specifications(): BelongsToMany
    {
        return $this->belongsToMany(Specification::class, 'service_specification');
    }

    public function brands(): BelongsToMany
    {
        return $this->belongsToMany(CarBrand::class, 'service_car_brand', 'service_id', 'car_brand_id');
    }

    public function getBrandIdsAttribute(): array
    {
        return $this->brands->pluck('id')->toArray();
    }

    public function getSpecificationIdsAttribute(): array
    {
        return $this->specifications->pluck('id')->toArray();
    }
}
