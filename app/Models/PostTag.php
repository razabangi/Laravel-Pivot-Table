<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PostTag extends Model
{
    use HasFactory;

    protected $cast = [
        'created_at' => 'datetime:Y-m-d',
        'created_at' => 'datetime:Y-m-d',
    ];
}
