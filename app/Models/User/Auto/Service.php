<?php

namespace App\Models\User\Auto;

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

    public function items(): BelongsToMany
    {
        return $this->belongsToMany(ServiceGroupItem::class);
    }

    public function specifications(): BelongsToMany
    {
        return $this->belongsToMany(Specification::class);
    }

    public function brands(): BelongsToMany
    {
        return $this->belongsToMany(CarBrand::class);
    }
}
