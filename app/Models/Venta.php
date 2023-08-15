<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Venta
 *
 * @property $id
 * @property $nombre
 * @property $producto
 * @property $cantidad
 * @property $precio
 * @property $fecha
 * @property $estado
 * @property $created_at
 * @property $updated_at
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Venta extends Model
{
    
    static $rules = [
		'nombre' => 'required',
		'producto' => 'required',
		'cantidad' => 'required',
		'precio' => 'required',
		'fecha' => 'required',
		'estado' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['nombre','producto','cantidad','precio','fecha','estado'];



}
