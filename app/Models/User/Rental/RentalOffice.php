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
use Illuminate\Database\Eloquent\Relations\HasMany;
use Kyslik\ColumnSortable\Sortable;

class RentalOffice extends Model
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
        'verified_at',
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

    public function items(): HasMany
    {
        return $this->hasMany(RentalItem::class);
    }

    public function getRegionNameAttribute(): string
    {
        return $this->region?->getAttribute('name');
    }
}
