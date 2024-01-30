<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Resenas extends Model
{
    static $rules = [
		'nombre' => 'required',
		'email' => 'required',
		'calidadPrecio' => 'required',
		'tratoPersonal' => 'required',
		'ubicacion' => 'required',
		'instalacionServicios' => 'required',
		'limpieza' => 'required',
		'comentario' => 'required',
		'notaFinal' => 'required',
		'habilitado' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['nombre','email', 'calidadPrecio', 'tratoPersonal', 'ubicacion', 'instalacionServicios',
      'limpieza', 'comentario', 'notaFinal', 'habilitado'];
}
