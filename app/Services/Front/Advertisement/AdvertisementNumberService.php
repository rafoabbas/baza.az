<?php

namespace App\Services\Front\Advertisement;

use App\Helpers\Classes\Breadcrumb;

class AdvertisementNumberService
{
    public function pageTitleHtml(): string
    {
        return (new Breadcrumb())
            ->addTitle(__('Satışa nömrə nişanı əlavə edin'))
            ->add(__('Ana səhifə'), route('index'))
            ->addIsAuth(__('Şəxsi kabinet'))
            ->add(__('Nömrə nişanı əlavə edin'), null, true)
            ->titleAndBreadCrumb();
    }
}
