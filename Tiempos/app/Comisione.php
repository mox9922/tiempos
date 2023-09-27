<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Comisione
 *
 * @property $id
 * @property $id_user
 * @property $porcentaje
 *
 * @property ComisionesSorteo[] $comisionesSorteos
 * @property User $user
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Comisione extends Model
{
    
    static $rules = [
		'id_user' => 'required',
		'porcentaje' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['id_user','porcentaje'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function comisionesSorteos()
    {
        return $this->hasMany('App\ComisionesSorteo', 'id_comision', 'id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function user()
    {
        return $this->hasOne('App\User', 'id', 'id_user');
    }
    

}
