<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Comentarios;
use App\Models\municipios;

class Hospedaje extends Model
{
    protected $table = 'hospedajes';
    protected $primaryKey = 'id';
    public $incrementing = true;
    protected $keyType = 'int';
    
    protected $fillable = [
        'nombre',
        'ubicacion',
        'descripcion',
        'municipio_id',
        'tipo',
        'contacto',
        'coordenadas',
        'servicios',
        'imagenes',
    ];

    protected $casts = [
        'imagenes' => 'array',
        'servicios' => 'array',
    ];

    public function municipio()
    {
        return $this->belongsTo(municipios::class, 'municipio_id');
    }
    
     public function opiniones()
    {
        return $this->hasMany(Comentarios::class, 'hospedaje_id')->latest();
    }

}