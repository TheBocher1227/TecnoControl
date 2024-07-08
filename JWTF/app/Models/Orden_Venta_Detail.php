<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Orden_Venta_Detail extends Model
{
    use HasFactory;

    protected $table=('orden_venta_detail'
);

protected $fillable =
[
    'id',
    'orden_venta_id',
    'producto_id',
    'cantidad'
];

    public function orden_venta()
    {
        return $this->belongsTo(Orden_Venta::class, 'orden_venta_id');
    }

    public function productos()
    {
        return $this->belongsTo(Producto::class, 'producto_id');
    }
}
