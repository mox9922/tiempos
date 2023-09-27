<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Restringido
 *
 * @property $id
 * @property $numero
 * @property $id_sorteo
 * @property $created_at
 * @property $updated_at
 *
 * @property Sorteo $sorteo
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Restringido extends Model
{
    
    static $rules = [
		'numero' => 'required',
		'id_sorteo' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['numero','id_sorteo'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function sorteo()
    {
        return $this->hasOne('App\Sorteo', 'id', 'id_sorteo');
    }
    

}
