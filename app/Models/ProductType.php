<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Models\Product;


class ProductType extends Model
{
    use HasFactory;
    use SoftDeletes;
    
    protected $table='product_types';
    protected $fillable = [
        'tipo',
        'descricao',
        'image',
        'preco'
    ];

    public function product()
    {
        return $this->hasmany(Product::class,'type_id','id');
    }

}
