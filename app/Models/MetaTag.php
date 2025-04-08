<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class MetaTag extends Model
{
    protected $table = "meta_tags";

    protected $fillable = [
        'page_name',
        'page_route',
        'headerdata',
        'status',
    ];

    protected $casts = [
        'headerdata' => 'json'
    ];
}
