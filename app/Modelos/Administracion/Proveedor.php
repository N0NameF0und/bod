<?php

namespace App\Modelos\Administracion;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Model;

class Proveedor extends Model
{
    public function Coleccionar() {
        return DB::connection('sqlsrv')->select(
           " Select Proveedor.ruc as Ruc,Proveedor.nombre as Razon_social,Proveedor.direccion as Direccion,Proveedor.telefono1 as Telefono_1,
            Proveedor.telefono2 as Telefono_2, Proveedor.mail as Mail,Ciudad.descripcion as Ciudad,Proveedor.contacto as Contacto,
            (Select Case Proveedor.ESTADO When 1 Then 'ACTIVO'When 0 Then 'INACTIVO' END) as Estado from Proveedor left join Ciudad on Proveedor.ciudad=Ciudad.codigo
            "
         );
     }
}
