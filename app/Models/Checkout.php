<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Checkout extends Model
{
    use HasFactory;
    use SoftDeletes;
    
    protected $table='checkout';
    protected $fillable = [
        'quantity',
        'estado',
        'cliente_id',
        'product_id',
        'referencia'
    ];
}
