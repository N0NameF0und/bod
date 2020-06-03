<?php

namespace App\Modelos\Administracion;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Model;

class Maquinaria extends Model
{
    public function Coleccionar() {
        return DB::connection('sqlsrv')->select(
"            Select (Select Case Producto.tipo_producto When 1 Then 'MAQUINARIA' END) as Tipo,Producto.nombre_producto as Producto, Producto.num_parte as Serie_chasis,UnidadMedicion.descripcion as Unidad, 
            Producto.marca_maquinaria as Marca_Maquinaria,Producto.modelo_maquinaria as Modelo_Maquinaria,Producto.serie_motor as Serie_Motor, Producto.marca_motor as Marca_Motor, Producto.tipo_motor as 
            Tipo_Motor, Producto.anio_fabricacion as Año_fabrica, Producto.capacidad as Capacidad, Producto.snb as SNB, Producto.codigo_heh as Codigo_HeH, Producto.matricula_mop as Matricula_Mop,
            Producto.matricula_transito AS Matricula_transito,Producto.potencia as Potencia, Producto.requiere_iva as Requiere_IVA,Producto.ubicacion_fisica as Ubicacion_fisica, Producto.observacion as
            Observacion,EstadoProducto.descripcion as Estado_Actual, (Select Case Producto.ESTADO When 1 Then 'ACTIVO'When 0 Then 'INACTIVO' END) as Estado from Producto inner join UnidadMedicion on 
            Producto.unidad=UnidadMedicion.codigo inner join EstadoProducto on Producto.estado_actual=EstadoProducto.codigo  where tipo_producto=1" 
         );
     }
}
