<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Diasminimo
 *
 * @property $id
 * @property $fecha
 * @property $minimodias
 * @property $created_at
 * @property $updated_at
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Diasminimo extends Model
{
    
    static $rules = [
		'fecha' => 'required',
		'minimodias' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['fecha','minimodias'];



}
