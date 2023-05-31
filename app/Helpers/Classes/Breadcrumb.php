<?php

namespace App\Helpers\Classes;

use Illuminate\Support\Facades\Auth;

class Breadcrumb
{
    public string $title = '';

    public array $items = [];

    public function addTitle(string $title): static
    {
        $this->title = $title;

        return $this;
    }

    public function addIsAuth(string $name, ?string $url = null, bool $active = false): static
    {
        return Auth::check() ? $this->add($name, $url, $active) : $this;
    }

    public function add(string $name, ?string $url = null, bool $active = false): static
    {
        return $this->setItem([
            'name' => $name,
            'url' => $url,
            'active' => $active,
        ]);
    }

    public function setItem(array $item): static
    {
        $this->items[] = $item;

        return $this;
    }

    public function getItems(): array
    {
        return $this->items;
    }

    public function itemEmpty(): bool
    {
        return empty($this->getItems());
    }

    public function titleAndBreadCrumb(): string
    {
        return '<h2 class="cart-main-info__title">' . $this->title . '</h2>' . $this->render();
    }

    public function render(): string
    {
        if ($this->itemEmpty()) {
            return '';
        }

        $html = '';

        foreach ($this->getItems() as $key => $item) {
            $html .= $this->link($item['name'], $item['url'], $item['active'], $key);
        }

        return '<div class="catalog_bread-crumbs">' . $html . '</div>';
    }

    public function link(string $name, ?string $url = null, bool $active = false, $key = 0): string
    {
        $slash = $key ? '/' : '';
        return $active ? "$slash<p>$name</p>" : "<a href='$url'>" . $slash . $name . "</a>";
    }
}
