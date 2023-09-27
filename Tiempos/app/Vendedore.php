<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Vendedore
 *
 * @property $id
 * @property $name
 * @property $email
 * @property $telefono
 * @property $email_verified_at
 * @property $password
 * @property $saldo
 * @property $created_at
 * @property $updated_at
 * @property $id_vendedor
 *
 * @property User $user
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Vendedore extends Model
{
    
    static $rules = [
		'name' => 'required',
		'email' => 'required',
		'telefono' => 'required',
    'password' => 'required',
		'saldo' => 'required',
		'id_vendedor' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['name','email','telefono','password','saldo','id_vendedor'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function user()
    {
        return $this->hasOne('App\User', 'id', 'id_vendedor');
    }
    

}
