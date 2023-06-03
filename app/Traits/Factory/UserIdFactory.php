<?php

namespace App\Traits\Factory;

use Str;

trait UserIdFactory
{
    public function userId(int $userId): self
    {
        return $this->state([
            'user_id' => $userId
        ]);
    }
}
