<?php

namespace App\Models;
use App\Models\User;


use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Urgency extends Model
{
    use HasFactory;
    protected $table='urgencies';
    protected $fillable = [
        'descricao',
        'user_id',
        'posto_id',
        'estado'
    ];

    public function users(){
        return $this->belongsToMany(
            User::class,
            'urgencies_users',
            'urgency_id',
            'user_id'
        );
    }

}
