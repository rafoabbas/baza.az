<?php

namespace App\Services\Front\User\Auto;

use App\Helpers\Classes\Breadcrumb;
use App\Models\User\Auto\Salon;
use App\Repositories\Contracts\User\Auto\SalonRepositoryInterface;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

class SalonService
{
    public Model|Salon $salon;

    public array $data;

    public function __construct(
        public SalonRepositoryInterface $repository
    ) {
    }

    public function update(array $data): Model|Salon
    {
        $this->repository->update($this->getSalon(), $data);

        return $this->getSalon();
    }

    public function getSalonId(): Model|Salon
    {
        return $this->salon->getAttribute('id');
    }

    public function setSalonByUserId(?int $userId = null): void
    {
        $userId ??= Auth::id();

        $this->salon = $this->repository->firstByUserId($userId);
    }

    public function setSalonId(int $salonId): void
    {
        $this->salon = $this->repository->findById($salonId);
    }

    public function setSalon(Model|Salon $salon): void
    {
        $this->salon = $salon;
    }

    public function getSalon(): Model|Salon
    {
        return $this->salon;
    }

    public function data(array $data): array
    {
        return array_merge([
            'user_id' => Auth::id(),
            'slug'    => \Str::slug($data['name']),
        ], $data);
    }

    public function syncSpecifications(?array $specifications = null): void
    {
        if (is_null($specifications)) {
            $specifications = [];
        }

        $this->salon->specifications()->sync($specifications);
    }

    public static function rules(): array
    {
        return [
            'region_id'             => 'required|integer|exists:regions,id',
            'name'                  => 'required|string|max:255',
            'address'               => 'required|string',
            'addresses'             => 'nullable|array',
            'addresses.*'           => 'required|array',
            'addresses.*.address'   => 'required|string',
            'addresses.*.latitude'  => 'required|string',
            'addresses.*.longitude' => 'required|string',
            'email'                 => 'required|email|max:255',
            'web_site'              => 'required|string|max:255',
            'working_hours'         => 'required|array',
            'working_hours.*'       => 'required|string',
            'phones'                => 'required|array',
            'phones.*'              => 'required|array',
            'phones.*.phone'        => 'nullable|string|max:255',
            'phones.*.whatsapp'     => 'nullable|string',
            'image'                 => 'required|string|max:255',
            'images'                => 'nullable|array',
            'images.*'              => 'required|string|max:255',
            'description'           => 'required|string',
            'banners'               => 'nullable|array',
            'banners.*'             => 'required|string|max:255',
            // relation validations
            'specifications'        => 'nullable|array',
            'specifications.*'      => 'required|integer|exists:specifications,id',
        ];
    }

    public function pageTitleHtml($add = null): string
    {
        return (new Breadcrumb())
            ->addTitle(__('Mənim avtosalonum'))
            ->add(__('Ana səhifə'), route('index'))
            ->add(__('Şəxsi kabinet'), null, true)
            ->add(__('Mənim avtosalonum'), null, true)
            ->whenMerge($add, function ($breadcrumb) use ($add) {
                $breadcrumb->add($add['name'], null, true);
            })
            ->titleAndBreadCrumb();
    }
}
