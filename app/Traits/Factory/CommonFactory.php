<?php

namespace App\Traits\Factory;

trait CommonFactory
{
    public function setCommon($key, $value): self
    {
        return $this->state(fn (array $attributes) => [
            $key => $value
        ]);
    }
}
