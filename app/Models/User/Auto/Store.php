<?php

namespace App\Models\User\Auto;

use App\Models\Common\Auto\StoreType;
use App\Models\Common\Car\CarBrand;
use App\Models\Common\Location\Region;
use App\Models\Guard\User;
use App\Traits\Eloquent\Filterable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Kyslik\ColumnSortable\Sortable;

class Store extends Model
{
    use HasFactory;
    use Sortable;
    use Filterable;

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

    protected $appends = [
    ];

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    public function region(): BelongsTo
    {
        return $this->belongsTo(Region::class);
    }

    public function types(): \Illuminate\Database\Eloquent\Relations\BelongsToMany
    {
        return $this->belongsToMany(StoreType::class)
            ->withPivot('description');
    }

    public function brands(): \Illuminate\Database\Eloquent\Relations\BelongsToMany
    {
        return $this->belongsToMany(CarBrand::class);
    }
}
