<?php

namespace App\Modelos\Administracion;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Model;

class Destino extends Model
{
    public function Coleccionar() {
        return DB::connection('sqlsrv')->select(
           " Select Destino.cod_destino as Codigo,Destino.nombre_destino as Destino, (Select Case Destino.ESTADO When 1 Then 'ACTIVO'
            When 0 Then 'INACTIVO' END) as Estado from Destino "
         );
     }

     public function Insertar($data){
        return  DB::connection('sqlsrv')->insert(
            "INSERT INTO Destino
            (
            [nombre_destino]
            ,[ESTADO])
      VALUES
            (?,?)",[$data['Destino'],'1']
        );
        
     }
}
