<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Venta
 *
 * @property $id
 * @property $fecha_compra
 * @property $numero
 * @property $monto
 * @property $id_user
 * @property $id_sorteo
 *
 * @property Sorteo $sorteo
 * @property User $user
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Venta extends Model
{
    
    static $rules = [
		'fecha_compra' => 'required',
		'numero' => 'required',
		'monto' => 'required',
		'id_user' => 'required',
		'id_sorteo' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['fecha_compra','numero','monto','id_user','id_sorteo'];


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
