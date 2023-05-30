<?php

namespace App\Traits\Factory;

use Str;

trait NameFactory
{
    public function name(string $name, $isSlug = false): static
    {
        $slug = $isSlug ? [
            'slug_az' => Str::slug($name),
            'slug_ru' => Str::slug($name)
        ] : [];

        return $this->state(fn (array $attributes) => array_merge([
            'name_az' => $name,
            'name_ru' => $name
        ], $slug));
    }

    public function nameAz(string $name, $isSlug = false): static
    {
        $slug = $isSlug ? [
            'slug_az' => Str::slug($name),
        ] : [];

        return $this->state(fn (array $attributes) => array_merge([
            'name_az' => $name
        ], $slug));
    }

    public function nameRu(string $name, $isSlug = false): static
    {
        $slug = $isSlug ? [
            'slug_ru' => Str::slug($name),
        ] : [];

        return $this->state(fn (array $attributes) => array_merge([
            'name_ru' => $name
        ], $slug));
    }
}
