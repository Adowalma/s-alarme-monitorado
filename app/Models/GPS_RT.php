<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GPS_RT extends Model
{
    use HasFactory;
    protected $table='gps_real_time';
    protected $fillable = [
        'lat',
        'lng',
    ];
}
