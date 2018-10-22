<?php

namespace Laradex\Http\Controllers;
use Laradex\Http\Controllers\Controller;
/*para usar el arrchivo controller dentro de controllers */
class PruebaController extends Controller{
 public function prueba($param){
     return 'estoy dentro del controller RECIBí'.$param  ;
 }
}