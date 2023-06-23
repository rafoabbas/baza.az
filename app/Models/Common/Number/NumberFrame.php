<?php

namespace App\Models\Common\Number;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class NumberFrame extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'fame'
    ];
}
