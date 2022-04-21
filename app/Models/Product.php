<?php

namespace App\Models;
use App\Models\User;
use App\Models\ProductType;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Product extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $table='products';
    protected $fillable = [
        'product_key',
        'user_id',
        'type_id',
        'estado'
    ];
    
    public function users(){
        return $this->belongsToMany(
            User::class,
            'products_users',
            'product_id',
            'user_id'
        );
    }

    public function productType()
    {
        return $this->belongsTo(ProductType::class,'type_id','id');
    }
}
