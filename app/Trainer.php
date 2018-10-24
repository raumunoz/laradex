<?php

namespace Laradex;
//MODELo
use Illuminate\Database\Eloquent\Model;

class Trainer extends Model
{
    //aqui espicificamos los datos que se pueden actualizar
    protected $fillable=['name','avatar','nombre','descripcion'];
    //
    /**
 * Get the route key for the model.
 *
 * @return string
 */
public function getRouteKeyName()
{
    return 'slug';
}
}
