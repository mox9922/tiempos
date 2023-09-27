<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Configuracione
 *
 * @property $id
 * @property $descripcion
 * @property $fecha_inicio
 * @property $fecha_final
 * @property $hora_inicio
 * @property $hora_final
 * @property $premio_primer_numero
 * @property $premio_segundo_numero
 * @property $premio_tercer_numero
 * @property $status
 *
 * @property Sorteo[] $sorteos
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Configuracione extends Model
{
    
    static $rules = [
		'descripcion' => 'required',
		'fecha_inicio' => 'required',
		'fecha_final' => 'required',
		'hora_inicio' => 'required',
		'hora_final' => 'required',
		'premio_primer_numero' => 'required',
		'premio_segundo_numero' => 'required',
		'premio_tercer_numero' => 'required',
		'status' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['descripcion','fecha_inicio','fecha_final','hora_inicio','hora_final','premio_primer_numero','premio_segundo_numero','premio_tercer_numero','status'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function sorteos()
    {
        return $this->hasMany('App\Sorteo', 'id_configuracion', 'id');
    }
    

}
