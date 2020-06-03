<?php

namespace App\Http\Controllers\Administracion;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ReadController extends Controller
{
    public function index($param=''){   

        if(!$param){return "sin parametro";}


        $clase = '\\App\\Modelos\\Administracion\\'.$param;
        $modelo = new $clase;
        $contenido = $modelo->Coleccionar();
        
        $Array = json_decode(json_encode($contenido), true);
        return response()->json($Array);
    
    } 

}
