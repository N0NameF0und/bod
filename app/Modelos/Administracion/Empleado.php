<?php

namespace App\Modelos\Administracion;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Model;

class Empleado extends Model
{
    public function Coleccionar() {
        return DB::connection('sqlsrv')->select(
            "Select Empleado.ci_empleado as Cedula_de_identidad,Empleado.nombres as Nombre, Empleado.apellidos as Apellido, Empleado.direccion as Direccion,Empleado.telefono as
            Telefono, Departamento.descripcion as Departamento, Cargo.descripcion as Cargo,(Select Case Empleado.es_empleado_hidalgo When 1 Then 'ES EMPLEADO'
             When 0 Then 'NO ES EMPLEADO' END) as Empleado_HeH,(Select Case Empleado.ESTADO When 1 Then 'ACTIVO'When 0 Then 'INACTIVO' END) as Estado
            from Departamento inner join Empleado on Empleado.departamento=Departamento.codigo inner join Cargo on Empleado.cargo=Cargo.codigo order by ci_empleado"
         );
     }
}
