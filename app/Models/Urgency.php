<?php

namespace App\Models;
use App\Models\User;


use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class Urgency extends Model
{
    use HasFactory;
    use SoftDeletes;
    
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
