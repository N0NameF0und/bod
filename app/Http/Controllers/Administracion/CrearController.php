<?php

namespace App\Http\Controllers\Administracion;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CrearController extends Controller
{
    public function index(Request $request,$param=''){   
        $formData = $request->all();
        $clase = '\\App\\Modelos\\Administracion\\'.$param;
        $modelo = new $clase;
        var_dump($formData);
        $contenido = $modelo->Insertar($formData);
        $Array = json_decode(json_encode($contenido), true);
        return view('dashboard')->with('contenido', $Array);
 
    
    } 

}
