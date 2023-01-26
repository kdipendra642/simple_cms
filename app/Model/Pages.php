<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Pages extends Model
{
    protected $guarded = [
        'title',
        'status',
    ];
}
