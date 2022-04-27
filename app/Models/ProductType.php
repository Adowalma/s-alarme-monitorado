<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Models\Product;
use App\Models\User;
use App\Models\Checkout;

class ProductType extends Model
{
    use HasFactory;
    use SoftDeletes;
    
    protected $table='product_types';
    protected $fillable = [
        'tipo',
        'descricao',
        'image',
        'preco',
        'quantidade'
    ];

    public function users(){
        return $this->belongsToMany(
            User::class,
            'products_users',
            'product_id',
            'user_id'
        );
    }
    public function checkout()
    {
        return $this->hasmany(
            Checkout::class,
            'product_id',
            'id'
        );
    }

}
