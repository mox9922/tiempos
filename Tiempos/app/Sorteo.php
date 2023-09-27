<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Sorteo
 *
 * @property $id
 * @property $id_configuracion
 * @property $fecha_inicio
 * @property $fecha_final
 * @property $created_at
 * @property $updated_at
 *
 * @property ComisionesSorteo[] $comisionesSorteos
 * @property Configuracione $configuracione
 * @property Restringido[] $restringidos
 * @property Venta[] $ventas
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Sorteo extends Model
{
    
    static $rules = [
		'id_configuracion' => 'required',
		'fecha_inicio' => 'required',
		'fecha_final' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['id_configuracion','fecha_inicio','fecha_final'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function comisionesSorteos()
    {
        return $this->hasMany('App\ComisionesSorteo', 'id_sorteo', 'id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function configuracione()
    {
        return $this->hasOne('App\Configuracione', 'id', 'id_configuracion');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function restringidos()
    {
        return $this->hasMany('App\Restringido', 'id_sorteo', 'id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function ventas()
    {
        return $this->hasMany('App\Venta', 'id_sorteo', 'id');
    }
    

}
