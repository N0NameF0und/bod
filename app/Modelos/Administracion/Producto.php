<?php

namespace App\Modelos\Administracion;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    public function Coleccionar() {
        return DB::connection('sqlsrv')->select(
         "   Select (Select Case Producto.tipo_producto When 2 Then 'PRODUCTO' END) as Tipo,Producto.nombre_producto as Producto,
            Producto.num_parte as NumParte,UnidadMedicion.descripcion as Tipo,Producto.requiere_iva as Requiere_IVA,
            Producto.activo_fijo as Activo_fijo,Producto.ubicacion_fisica as Ubicacion_fisica,Producto.observacion as Observacion,(Select Case Producto.ESTADO
             When 1 Then 'ACTIVO'When 0 Then 'INACTIVO' END) as Estado from Producto inner join UnidadMedicion on Producto.unidad=UnidadMedicion.codigo where Producto.tipo_producto=2"
             
         );
     }
}
