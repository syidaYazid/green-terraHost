<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Plants extends Model
{
    use HasFactory;

    protected $table = 'plants';

    protected $casts = [
        'plants_price' => 'float'
    ];

    protected $fillable = [
        'plants_name', 'plants_desc', 'plants_picture', 'plants_price'
    ];
}
