<?php

namespace App\Modelos\Administracion;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Model;

class Proceso extends Model
{
    public function Coleccionar() {
        return  DB::connection('sqlsrv')->select(
             "Select Etapa.nombre_etapa as Proceso,Etapa.ci_responsable as Id_Responsable,Empleado.nombres+' '+
             Empleado.apellidos as Responsable, (Select Case Etapa.ESTADO When 1 Then 'ACTIVO' When 0 Then 'INACTIVO' END) as Estado
             from  Etapa inner join Empleado on Etapa.ci_responsable=Empleado.ci_empleado"
         );

     }

     public function Insertar($data) {
        return  DB::connection('sqlsrv')->insert(
             "INSERT INTO Proyecto
                        ([ci_responsable]
                        ,[nombre_proyecto]
                        ,[direccion_proyecto]
                        ,[fecha_proyecto]
                        ,[observacion]
                        ,[num_guia_contador]
                        ,[ESTADO])
                  VALUES
                        (?,?,?,?,?,?,?)",[$data['Proceso'],$data['Id_Responsable'],$data['Responsable']]
         );

     }

     
}
