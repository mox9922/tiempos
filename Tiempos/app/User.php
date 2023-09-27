<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * Class User
 *
 * @property $id
 * @property $name
 * @property $telefono
 * @property $email
 * @property $email_verified_at
 * @property $password
 * @property $perfil
 * @property $estado
 * @property $credito
 * @property $remember_token
 * @property $created_at
 * @property $updated_at
 *
 * @property Compradore[] $compradores
 * @property Vendedore[] $vendedores
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class User extends Model
{
    
    static $rules = [
        'name' => ['required', 'string', 'max:255'],
        'telefono' => ['required', 'integer','min:1'],
        'email' => ['required', 'string', 'email', 'max:255'],
        'password' => ['required', 'string', 'min:1'],
		'perfil' => ['required'],
		'estado' => ['required'],
        'credito' => ['required'],
    
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['name','telefono','email','perfil','estado','credito','password'];

    

}
