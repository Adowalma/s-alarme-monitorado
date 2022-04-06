<?php

namespace App\Models;

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

}
