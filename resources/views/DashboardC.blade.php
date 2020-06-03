<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="csrf-token" content="{{ csrf_token() }}">

  {{-- REFERENCE PATH <script src="{{asset('../../public/static/js/')}}" type="text/javascript"></script> --}}

  {{-- JQUERY --}}
  <script src="https://code.jquery.com/jquery-3.4.1.js" integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU=" crossorigin="anonymous">
  </script>

  {{-- JQUERIE UI --}}
  <link rel="stylesheet" href="{{asset('static/js/jquery-ui-1.12.1/jquery-ui.min.css')}}">
  <script src="{{asset('static/js/jquery-ui-1.12.1/jquery-ui.min.js')}}" type="text/javascript"></script>

  {{-- JTABLE --}}
  <script src="{{asset('static/js/jtable.2.4.0/jquery.jtable.min.js')}}" type="text/javascript"></script>
  <script src="{{asset('static/js/jtable.2.4.0/localization/jquery.jtable.es.js')}}" type="text/javascript"></script> 
  <link rel="stylesheet" href="{{asset('static/js/jtable.2.4.0/themes/metro/lightgray/jtable.css')}}">


{{-- {{SERVICES}} --}}
<script src="{{asset('static/js/service/administracion/methods.js')}}" type="text/javascript"></script>
</head>
{{var_dump($contenido)  }}
<body>

  <script type="text/javascript">
    $(document).ready(function () {
        $('#PersonTableContainer').jtable({
            title: 'Tabla de Procesos',
            actions: {
                listAction: 'fdsfs',
                createAction: '/GettingStarted/CreatePerson',
                updateAction: '/GettingStarted/UpdatePerson',
                deleteAction: '/GettingStarted/DeletePerson'
            },
            fields: {
          /* PersonId: {
            key: true,
            create: false,
            edit: false,
            list: false
          }, */

          /* FIELDS DATA */
          @foreach ($contenido as $field)
             "{{ $field }}": {  
               title: "{{ $field }}" }, 
          @endforeach
          RecordDate: {
            title: 'Record date',
            width: '30%',
            type: 'date',
            create: false,
            edit: false
          }
        },
        success: function(result) { //we got the response
             alert('Successfully called');
         },
         error: function(jqxhr, status, exception) {
             alert('Exception:', exception);
         }
        });
    });
</script>

<div class="contenido">

  <div id="PersonTableContainer"></div>

</div>

</body>

</html>