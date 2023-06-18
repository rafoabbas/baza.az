<?php

namespace App\Services\Front\User\Rental;

use App\Helpers\Classes\Breadcrumb;
use App\Models\User\Auto\Salon;
use App\Models\User\Rental\RentalOffice;
use App\Repositories\Contracts\User\Auto\SalonRepositoryInterface;
use App\Repositories\Contracts\User\Rental\RentalOfficeRepositoryInterface;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

class RentalOfficeService
{
    public Model|RentalOffice $office;

    public array $data;

    public function __construct(
        public RentalOfficeRepositoryInterface $repository
    ) {
    }

    public function update(array $data): Model|RentalOffice
    {
        $this->repository->update($this->getOffice(), $data);

        return $this->getOffice();
    }

    public function getOfficeId(): Model|RentalOffice
    {
        return $this->office->getAttribute('id');
    }

    public function setOfficeByUserId(?int $userId = null): void
    {
        $userId ??= Auth::id();

        $this->office = $this->repository->firstByUserId($userId);
    }

    public function setOfficeId(int $officeId): void
    {
        $this->office = $this->repository->findById($officeId);
    }

    public function setOffice(Model|RentalOffice $office): void
    {
        $this->office = $office;
    }

    public function getOffice(): Model|RentalOffice
    {
        return $this->office;
    }

    public function data(array $data): array
    {
        return array_merge([
            'user_id' => Auth::id(),
            'slug'    => \Str::slug($data['name']),
        ], $data);
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
            'banners'               => 'nullable|array',
            'banners.*'             => 'required|string|max:255',
        ];
    }

    public function pageTitleHtml($add = null): string
    {
        return (new Breadcrumb())
            ->addTitle(__('Mənim Rental ofisim'))
            ->add(__('Ana səhifə'), route('index'))
            ->add(__('Şəxsi kabinet'), null, true)
            ->add(__('Mənim Rental ofisim'), null, true)
            ->whenMerge($add, function ($breadcrumb) use ($add) {
                $breadcrumb->add($add['name'], null, true);
            })
            ->titleAndBreadCrumb();
    }
}
