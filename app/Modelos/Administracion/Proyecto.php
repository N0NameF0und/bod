<?php

namespace App\Modelos\Administracion;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Model;

class Proyecto extends Model
{
    public function Coleccionar() {
        return DB::connection('sqlsrv')->select(
             "Select Empleado.nombres+' '+
             Empleado.apellidos as Responsable,Proyecto.nombre_proyecto as Proyecto,Proyecto.direccion_proyecto as Direccion,
             Proyecto.fecha_proyecto as Fecha,Proyecto.observacion as Observaciones, (Select Case Proyecto.ESTADO When 1 Then 'ACTIVO' When 0 Then 'INACTIVO' END) as Estado
              from Empleado inner join Proyecto on Empleado.ci_empleado= Proyecto.ci_responsable 
             "
         );
     }

     public function Insertar($datos){
        return DB::connection('sqlsrv')->insert(   
       "INSERT INTO Proyecto
       ([ci_responsable]
       ,[nombre_proyecto]
       ,[direccion_proyecto]
       ,[fecha_proyecto]
       ,[observacion]
       ,[num_guia_contador]
       ,[ESTADO])
 VALUES
       ( ?,?,?,?,?,?,?)",
       []
        );
    }
}