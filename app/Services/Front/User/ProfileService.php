<?php

namespace App\Services\Front\User;

use App\Helpers\Classes\Breadcrumb;
use App\Models\Guard\User;

class ProfileService
{
    public static function rules(User $auth): array
    {
        return $auth->getAttribute('is_business')
            ? self::businessRules()
            : self::personalRules();
    }

    public static function personalRules(): array
    {
        return [
            'name' => ['required', 'string', 'max:255'],
            'surname' => ['required', 'string', 'max:255'],
        ];
    }

    public static function businessRules(): array
    {
        return [
            'name' => ['required', 'string', 'max:255'],
            'surname' => ['required', 'string', 'max:255'],
        ];
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
