
function obtener_items_administracion(postData, jtParams) {
    console.log('Hola');
    var ret;
    var direccion = "http://127.0.0.1:8000/api/administracion/leer/Proceso" //root uri
/*     + "?$select=ID,Name,Email,Phone" //reduce the payload to what we need */
    + "&$inlinecount=allpages"
    + "&$orderby=" + jtParams.jtSorting.replace(' DESC', ' desc').replace(' ASC', ' asc')
    + "&$skip=" + jtParams.jtStartIndex
    + "&$top=" + jtParams.jtPageSize 
    //+ "&$format=json" //give me json... will be used in newer OData
    //+ "&$callback=callback"; //this is my callback for future
    return $.Deferred(function ($dfd) {
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
            }
        });
        $.ajax({
            url: "{{ url('api/administracion/leer/Proceso') }}",
            type: 'GET',
            dataType: 'json',
            data: postData,
            success: function (data) {
                response = {
                    'Result': "OK",
                    'Records': data.value,
                    'TotalRecordCount': data['odata.count']
                };
                $dfd.resolve(response);
            },
            error: function () {
                $dfd.reject();
            }
        });
    });
 
}

/* 
jQuery(document).ready(function(){
    jQuery('#ajaxSubmit').click(function(e){
       e.preventDefault();
       $.ajaxSetup({
          headers: {
              'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
          }
      });
       jQuery.ajax({
          url: "{{ url('/grocery/post') }}",
          method: 'post',
          data: {
             name: jQuery('#name').val(),
             type: jQuery('#type').val(),
             price: jQuery('#price').val()
          },
          success: function(result){
             console.log(result);
          }});
       });
    }); */