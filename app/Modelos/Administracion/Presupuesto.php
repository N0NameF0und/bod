<?php

namespace App\Modelos\Administracion;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Model;

class Presupuesto extends Model
{
    public function Coleccionar() {
        return DB::connection('sqlsrv')->select(
          "Select Proyecto.nombre_proyecto as Proyecto,Presupuesto.nombre_presupuesto as Presupuesto,
            Presupuesto.descripcion_presupuesto as Descripcion,Presupuesto.valor_presupuesto as Valor
            ,(Select Case Presupuesto.estado When 1 Then 'ACTIVO'
             When 0 Then 'INACTIVO' END) as Estado from Presupuesto inner join Proyecto on 
             Presupuesto.cod_proyecto=Proyecto.cod_proyecto ORDER BY Presupuesto.cod_presupuesto"
         );
     }
}
