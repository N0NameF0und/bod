<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


class DashboardController extends Controller
{   

   
     /* return $game->Coleccionar(); */

    public function index($clase=''){        
        if(!$clase){return view('dashboard')->with('contenido','');}
        $clase = '\\App\\Modelos\\Administracion\\'.$clase;
        $modelo = new $clase;
        $contenido = $modelo->Coleccionar();
        $Array = json_decode(json_encode($contenido), true);
        return view('dashboard')->with('contenido', $Array);
    } 

    
}
