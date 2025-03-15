<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Envio
 *
 * @property $id
 * @property $idPedido
 * @property $numSeguimiento
 * @property $transportista
 * @property $estado
 * @property $fechaEntrega
 * @property $created_at
 * @property $updated_at
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Envio extends Model
{
    
    protected $perPage = 20;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = ['idPedido', 'numSeguimiento', 'transportista', 'estado', 'fechaEntrega'];


}
