<?php

namespace App\Models;
use App\Models\User;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $table='products';
    protected $fillable = [
        'name',
        'descricao',
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
}
