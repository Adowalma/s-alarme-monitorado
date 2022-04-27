<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Livrete extends Model
{
    use HasFactory;
    protected $table='livretes';
    protected $fillable = [
        'marca',
        'modelo',
        'matricula',
        'motor',
        'quadro',
        'pneumaticos',
        'servico',
        'peso_bruto',
        'combustivel',
        'distancia_eixos',
        'data_emissao',
    ];
}
