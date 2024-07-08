<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    use HasFactory;

    protected $table = 'productos';


    protected $fillable = 
    [
       'id',
       'stock',
       'price',
       'status',
       'image'
    ];

    public function ordern_venta_detail()
    {
        return $this->hasMany(Orden_Venta_Detail::class, 'producto_id');
    }
}
