<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Orden_Venta extends Model
{
    use HasFactory;

    protected $tbale =('orden_venta');


    protected $fillable = 
    [
        'id',
        'user_id',
        'tipo'
    ];

    public function users()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function orden_venta_detail()
    {
        return $this->hasMany(Orden_Venta_Detail::class, 'orden_venta_id');
    }
}
