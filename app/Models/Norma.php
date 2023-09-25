<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Norma
 *
 * @property $id
 * @property $parrafo01ES
 * @property $parrafo01CAT
 * @property $parrafo01EN
 * @property $parrafo01FR
 * @property $parrafo02ES
 * @property $parrafo02CAT
 * @property $parrafo02EN
 * @property $parrafo02FR
 * @property $created_at
 * @property $updated_at
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Norma extends Model
{
    
    static $rules = [
		'parrafo01ES' => 'required',
		'parrafo01CAT' => 'required',
		'parrafo01EN' => 'required',
		'parrafo01FR' => 'required',
		'parrafo02ES' => 'required',
		'parrafo02CAT' => 'required',
		'parrafo02EN' => 'required',
		'parrafo02FR' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['parrafo01ES','parrafo01CAT','parrafo01EN','parrafo01FR','parrafo02ES','parrafo02CAT','parrafo02EN','parrafo02FR'];



}
