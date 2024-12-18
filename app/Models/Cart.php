<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class Cart extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $table='carts';
    protected $fillable = [
        'cliente_id',
        'product_id',
    ];
}
