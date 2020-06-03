<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.css">
  <link rel="stylesheet" href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
  <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>>
  <!-- JQUERY -->
  <script src="https://code.jquery.com/jquery-3.4.1.js" integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU=" crossorigin="anonymous">
  </script>
  <!-- DATATABLES -->
  <script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js">
  </script>
  <!-- BOOTSTRAP -->
  <script src="https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap4.min.js">
  </script>

  <link rel="stylesheet" href="{{asset('static/css/estilo.css')}}">

  <script src="{{asset('static/js/tabla.js')}}"></script>
  <script>
    var llaves = [],
      values = [],
      admC = {};

    $(document).ready(function() {

      $(function() {
        var $table = $("#crear_administracion_tabla"),
          $header = $table.find("thead th"),
          $celdas = $table.find("tbody tr td");



        $header.each(function(k, v) {
          llaves[llaves.length] = $(this).text();
        });

        $celdas.each(function(k, v) {
          values[values.length] = $(this).text();
        });

        for (i = 0; i < llaves.length; i++) {
          admC[llaves[i]] = values[i]
        }
        console.log(JSON.stringify(admC));
      });

      $("#nuevoingreso").on("input", function() {
        $keycolumna = $(this).closest("th").attr("class");
        console.log($keycolumna);
      });

    });



    function administracion_guardar() {
      console.log(values);
    }
  </script>

  <title>Bodega</title>
</head>

<body>

  <nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-dark">
    <a class="navbar-brand" href="{{URL::to('dashboard')}}">Sistema de Bodega</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item active dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Administrar
          </a>

          <div class="dropdown-menu" aria-labelledby="navbarDropdown">
            <a class="dropdown-item" href="{{URL::to('dashboard/Proyecto')}}">Proyecto</a>
            <a class="dropdown-item" href="{{URL::to('dashboard/Proceso')}}">Proceso</a>
            <a class="dropdown-item" href="{{URL::to('dashboard/Destino')}}">Destino</a>
            <a class="dropdown-item" href="{{URL::to('dashboard/Presupuesto')}}">Presupuesto</a>
            <a class="dropdown-item" href="{{URL::to('dashboard/Empleado')}}">Empleado</a>
            <a class="dropdown-item" href="{{URL::to('dashboard/Producto')}}">Producto</a>
            <a class="dropdown-item" href="{{URL::to('dashboard/Maquinaria')}}">Maquinaria</a>
            <a class="dropdown-item" href="{{URL::to('dashboard/Proveedor')}}">Proveedores</a>
       {{--      <a class="dropdown-item" href="{{URL::to('dashboard/Departamento')}}">Departamento</a>
            <a class="dropdown-item" href="{{URL::to('dashboard/Cargo')}}">Cargo</a> --}}
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="#">Perfil</a>
            <a class="dropdown-item" href="#">Usuario</a>
            <a class="dropdown-item" href="#">Menu</a>
            <a class="dropdown-item" href="#">Acceso</a>
          </div>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Movimientos</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link" href="#">Reportes</a>
        </li>
      </ul>
      <form class="form-inline my-2 my-lg-0" id='busqueda_nav' action="{{url::to('inicio')}}">
        <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Salir</button>
      </form>
    </div>
  </nav>



  <center>
    <div class="barra" style="margin-top: 35px;padding: 10px;">

      <button type="button" data-toggle="modal" data-target="#crear_administracion"><img src="{{asset('static/img/crea.png')}}" /> Crear</button>
      <button type="button"><img src="{{asset('static/img/editar.png')}}" alt=""> Editar</button>
      <button type="button"><img src="{{asset('static/img/eliminar.png')}}" alt=""> Eliminar</button>
      <button onclick="exportTableToExcel('tablax', 'members-data')"><img src="{{asset('static/img/excel.png')}}" alt=""> Exportar a Excel</button>
    </div>
  </center>


  <div class="container" id='Contenido' style="margin-top: 0px;padding: 5px">
    <table id="tablax" class="table table-striped table-bordered" style="width:100%">

      {{-- {{ var_dump(get_object_vars($contenido[0])) }} --}}
      {{-- {{var_dump($contenido[0][2])}} --}}

      @unless (is_string($contenido))
      <thead class="thead-dark">
        @foreach ($contenido[0] as $key => $value)
        <th>{{$key}}</th>
        @endforeach
      </thead>
      <tbody>

        @for ($i = 0; $i < count($contenido); $i++) <tr>


          @if($contenido[$i]['Estado']='ACTIVO')
          @foreach($contenido[$i] as $clave => $valor)

          <td>{{$valor}}</td>
          @endforeach
          @endif

          </tr>

          @endfor

      </tbody>
      @endunless

    </table>
  </div>

  {{-- MODAL CREAR --}}

  <div class="modal fade" id="crear_administracion" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <form action="{{url('api/administracion/insertar',str_replace("http://127.0.0.1:8000/dashboard/","", URL::current()))}}" method="post" name="FormEntrar">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Crear {{$newphrase = str_replace("http://127.0.0.1:8000/dashboard/","", URL::current())}}</h5>
          </div>

          <div class="modal-body">
 
            <table class="table table-striped table-bordered" id='crear_administracion_tabla' style="width:100%">
              @unless (is_string($contenido))
      
              @foreach ($contenido[0] as $key => $value)
              @if ($key!='Estado')
              <thead class="thead-dark">
                <td>{{$key}}</td>
                 </thead>
                 <tbody>
                   <tr>
                     <td><input name="{{$key}}" id="nuevoingreso" type="text"></input></td>
                   </tr>
                 </tbody>
              @endif
            
              @endforeach
      
              @endunless
      
            </table>
          

              </table>


              <div class="clearfix"></div>
            </div>

            <div class="modal-footer">

              <button type="submit" class="btn btn-success">Insertar</button>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
        </form>
      </div>
    </div>
  </div>
  {{-- FIN MODAL CREAR --}}
</body>


<script>

</script>
