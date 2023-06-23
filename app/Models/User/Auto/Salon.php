<?php

namespace App\Models\User\Auto;

use App\Casts\PhonesCast;
use App\Models\Common\Auto\Specification;
use App\Models\Common\Location\Region;
use App\Models\Guard\User;
use App\Traits\Eloquent\Filterable;
use App\Traits\Eloquent\Uploadable;
use Illuminate\Database\Eloquent\Casts\Attribute as AttributeCast;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Kyslik\ColumnSortable\Sortable;

class Salon extends Model
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
        'logo',
        'image',
        'images',
        'description',
        'banners',
        'addresses',
        'published',
        'order',
        'verified_at',
        'published_at',
    ];

    protected $casts = [
        'working_hours' => 'json',
        'images' => 'json',
        'banners' => 'json',
        'addresses' => 'json',
        'phones' => PhonesCast::class
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

    public function specifications(): BelongsToMany
    {
        return $this->belongsToMany(Specification::class, 'salon_specification');
    }

    //TODO: totu ornek yaziram yeni casting methodu istifade et, hamisin bele istifade et
    public function specificationIds(): AttributeCast
    {
        return AttributeCast::make(
            get: fn () => $this->specifications->pluck('id')->toArray()
        );
    }

//    public function getSpecificationIdsAttribute(): array
//    {
//        return $this->specifications->pluck('id')->toArray();
//    }

    public function getRegionNameAttribute(): string
    {
        return $this->region?->getAttribute('name');
    }
}
