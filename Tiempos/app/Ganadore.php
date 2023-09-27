<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Ganadore
 *
 * @property $id
 * @property $id_sorteo
 * @property $premio_primer_numero
 * @property $premio_segundo_numero
 * @property $premio_tercer_numero
 * @property $fecha
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Ganadore extends Model
{
    
    static $rules = [
		'id_sorteo' => 'required',
		'premio_primer_numero' => 'required',
		'premio_segundo_numero' => 'required',
		'premio_tercer_numero' => 'required',
		'fecha' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['id_sorteo','premio_primer_numero','premio_segundo_numero','premio_tercer_numero','fecha'];



}
