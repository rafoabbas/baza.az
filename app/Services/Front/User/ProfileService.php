<?php

namespace App\Services\Front\User;

use App\Helpers\Classes\Breadcrumb;
use App\Models\Guard\User;
use App\Repositories\Contracts\User\UserRepositoryInterface;
use App\Rules\User\Auth\PersonalPhoneRule;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;

class ProfileService
{
    public Model|User $user;

    public array $data;

    public function __construct(
        public UserRepositoryInterface $repository
    ) {
    }

    public static function rules(User $auth): array
    {
        return $auth->getAttribute('is_business')
            ? self::businessRules()
            : self::personalRules();
    }

    public static function personalRules(): array
    {
        return [
            'name'  => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'max:255'],
        ];
    }

    public static function businessRules(): array
    {
        return [
            'name'          => ['required', 'string', 'max:255'],
            'company_name'  => ['required', 'string', 'max:255'],
            'tin'           => ['required', 'string', 'max:255'],
        ];
    }

    public static function update($request): void
    {
        $request->user()->update($request->validated());
    }

    public function pageTitleHtml(): string
    {
        return (new Breadcrumb())
            ->addTitle(__('Şəxsi kabinet'))
            ->add(__('Ana səhifə'), route('index'))
            ->add(__('Şəxsi kabinet'), null, true)
            ->titleAndBreadCrumb();
    }
}
