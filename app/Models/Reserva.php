<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Idioma;

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
		'idioma' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['fechaFin','fechaInicio', 'email', 'idioma'];

    public function getIdioma()
    {
      return Idioma::find($this->idioma)->idioma;
    }

}
