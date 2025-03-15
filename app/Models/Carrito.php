<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Carrito
 *
 * @property $id
 * @property $sesion_id
 * @property $idCliente
 * @property $created_at
 * @property $updated_at
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Carrito extends Model
{
    
    protected $perPage = 20;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = ['sesion_id', 'idCliente'];


}
