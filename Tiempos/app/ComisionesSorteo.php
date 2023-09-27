<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * Class ComisionesSorteo
 *
 * @property $id
 * @property $id_user
 * @property $id_sorteo
 * @property $id_comision
 * @property $fecha
 * @property $monto
 *
 * @property Comisione $comisione
 * @property Sorteo $sorteo
 * @property User $user
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class ComisionesSorteo extends Model
{
    
    static $rules = [
		'id_user' => 'required',
		'id_sorteo' => 'required',
		'id_comision' => 'required',
		'fecha' => 'required',
		'monto' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['id_user','id_sorteo','id_comision','fecha','monto'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function comisione()
    {
        return $this->hasOne('App\Comisione', 'id', 'id_comision');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function sorteo()
    {
        return $this->hasOne('App\Sorteo', 'id', 'id_sorteo');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function user()
    {
        return $this->hasOne('App\User', 'id', 'id_user');
    }
    

}
