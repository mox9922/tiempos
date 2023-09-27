<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Compradore
 *
 * @property $id
 * @property $name
 * @property $email
 * @property $telefono
 * @property $email_verified_at
 * @property $password
 * @property $created_at
 * @property $updated_at
 * @property $id_comprador
 *
 * @property User $user
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Compradore extends Model
{
    
    static $rules = [
		'name' => 'required',
		'email' => 'required',
		'telefono' => 'required',
		'id_comprador' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['name','email','telefono','id_comprador'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function user()
    {
        return $this->hasOne('App\User', 'id', 'id_comprador');
    }
    

}
