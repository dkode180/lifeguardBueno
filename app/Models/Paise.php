<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Paise
 *
 * @property $id
 * @property $nombrePais
 * @property $caducidadContrato
 * @property $nClientesTotales
 * @property $created_at
 * @property $updated_at
 *
 * @property Servicio[] $servicios
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Paise extends Model
{
    
    protected $perPage = 20;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = ['nombrePais', 'caducidadContrato', 'nClientesTotales'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function servicios()
    {
        return $this->hasMany(\App\Models\Servicio::class, 'id', 'pais_id');
    }
    
}
