<?php

namespace App\Models;
use App\Models\ProductType;
use App\Models\Urgency;
use App\Models\Checkout;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;
    use SoftDeletes;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name','username',
        'email',
        'password',
        'estado',
        'telemovel',
        'endereco'
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function products(){
        return $this->belongsToMany(
            ProductType::class,
            'products_users',
            'user_id',
            'product_id'
        );
    }
    public function urgencies(){
        return $this->belongsToMany(
            Urgency::class,
            'uegencies_users',
            'user_id',
            'urgency_id'
        );
    }
    public function checkout()
    {
        return $this->hasmany(
            Checkout::class,
            'cliente_id',
            'id'
        );
    }
}
