<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Content extends Model
{
    protected $guarded = [
        'title',
        'description',
        'cover',
        'foreign_references',
    ];

    public function pages()
    {
        return $this->belongsTo(Pages::class, 'pages_id', 'id');
    }
}
