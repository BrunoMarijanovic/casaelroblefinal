<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Img
 *
 * @property $id
 * @property $imagen
 * @property $tituloES
 * @property $tituloCAT
 * @property $tituloEN
 * @property $tituloFR
 * @property $descripcionES
 * @property $descripcionCAT
 * @property $descripcionEN
 * @property $descripcionFR
 * @property $created_at
 * @property $updated_at
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Img extends Model
{
    
    static $rules = [
		'imagen' => 'required',
		'tituloES' => 'required',
		'tituloCAT' => 'required',
		'tituloEN' => 'required',
		'tituloFR' => 'required',
		'descripcionES' => 'required',
		'descripcionCAT' => 'required',
		'descripcionEN' => 'required',
		'descripcionFR' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['imagen','tituloES','tituloCAT','tituloEN','tituloFR','descripcionES','descripcionCAT','descripcionEN','descripcionFR'];



}
