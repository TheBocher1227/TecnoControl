<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cita extends Model
{
    use HasFactory;
    protected $table = 'citas';

    protected $fillable  = 
    [
       'id',
       'user_id',
       'service_id',
        'fecha_cita',
        'fecha_cancelacion',
        'fecha_reagendacion'
    ];

    public function users()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
    public function servicios()
    {
        return $this->belongsTo(Service::class, 'service_id');
    }

}
