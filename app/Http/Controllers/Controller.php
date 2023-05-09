<?php

namespace App\Http\Controllers;

use App\Traits\Common\DeleteStorage;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use DeleteStorage;
    use ValidatesRequests;
    use AuthorizesRequests;

    public function perPage(): int
    {
        return request('perPage', 50);
    }

    public function sorting($column = 'id'): ?string
    {
        return request('sort', $column);
    }
}
