<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Servicio
 *
 * @property $id
 * @property $pais_id
 * @property $nombreServicio
 * @property $nClientes
 * @property $nSedes
 * @property $created_at
 * @property $updated_at
 *
 * @property Paise $paise
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Servicio extends Model
{
    
    protected $perPage = 20;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = ['pais_id', 'nombreServicio', 'nClientes', 'nSedes'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function paise()
    {
        return $this->belongsTo(\App\Models\Paise::class, 'pais_id', 'id');
    }
    
}
