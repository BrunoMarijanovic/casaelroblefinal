<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Reserva
 *
 * @property $id
 * @property $fechaFin
 * @property $fechaInicio
 * @property $created_at
 * @property $updated_at
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Reserva extends Model
{
    
    static $rules = [
		'fechaFin' => 'required',
		'fechaInicio' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['fechaFin','fechaInicio'];



}
