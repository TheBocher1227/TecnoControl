<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    use HasFactory;

    protected $table = ('services');

    protected $fillable =
    [
        'id',
        'name',
        'cost',
        'duration',
    ];

    public function citas()
    {
        return $this->hasMany(Cita::class, 'service_id');
    }
}
