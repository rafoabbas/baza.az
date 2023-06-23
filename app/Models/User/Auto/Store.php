<?php

namespace App\Models\User\Auto;

use App\Casts\PhonesCast;
use App\Models\Common\Auto\StoreType;
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

class Store extends Model
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

    public function types(): BelongsToMany
    {
        return $this->belongsToMany(StoreType::class)
            ->withPivot('description');
    }

    public function brands(): BelongsToMany
    {
        return $this->belongsToMany(CarBrand::class, 'store_car_brand');
    }

    //TODO: yeni method Illuminate\Database\Eloquent\Casts\Attribute
    public function getBrandIdsAttribute(): array
    {
        return $this->brands->pluck('id')->toArray();
    }

    //TODO: yeni method Illuminate\Database\Eloquent\Casts\Attribute
    public function getTypeIdsAttribute(): array
    {
        return $this->types()->pluck('store_type_id')->toArray();
    }
}
