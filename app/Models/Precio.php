<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Precio
 *
 * @property $id
 * @property $fecha
 * @property $precio
 * @property $created_at
 * @property $updated_at
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Precio extends Model
{
    
    static $rules = [
		'fecha' => 'required',
		'precio' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['fecha','precio'];



}
