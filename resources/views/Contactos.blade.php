<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="{{asset('static/css/contacto.css')}}">
    <link rel="stylesheet" href="{{asset('static/css/font.css')}}">
    <link rel="stylesheet" href="{{asset('static/css/main.css')}}">
    
    <title>contacto</title>
</head>
<body>
    <nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-dark">
        <span class="navbar-brand mb-0 h1">Sistema de Bodega</span>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
      
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item ">
              <a class="nav-link" href="{{url('inicio')}}">Inicio<span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item active">
              <a class="nav-link" href="{{url('contactos')}}">Contactos</a>
            </li>
           
          </ul>
          <form class="form-inline my-2 my-lg-0">
            <a class="btn btn-outline-success my-2 my-sm-0" href="{{url('login')}}">Login</a>
          </form>
        </div>
      </nav>
      <div class="social-bar">
        <a href="https://www.facebook.com/Steven.Rocha.79/" class="icon icon-facebook" target="_blank"></a>
        <a href="https://twitter.com/Steven33359544" class="icon icon-twitter" target="_blank"></a>
        <a href="https://www.youtube.com/channel/UCO5qe1oDPLF16t8Y4H7wBrg?view_as=subscriber" class="icon icon-youtube" target="_blank"></a>
        <a href="https://www.instagram.com/stev_rt/" class="icon icon-instagram" target="_blank"></a>
      </div>

 <div id="contenidos-paginas">
		<div id="centro3">
			<h2>
				<em class="encabezados t1">Contacta con</em> 
				<em class="encabezados t2">Nosotros</em>
			</h2>
			<p class="descripcion-pagina">
        ¿Cómo me comunico con el servicio de atención al cliente ?
			</p>
			<hr>

			<div id="contenido-nosotros">
				
				<div id="izquierda">
					<p class="descripcion-pagina texto-contacto">
            Puede ponerse en contacto con nosotros de varias maneras diferentes.
             ¡Elige la forma que más te convenga!<br>
						Telélefono: <strong>2981-1111</strong><br>
						Celular: <strong>0998715243</strong><br>
						Email: <strong><a href="mailto: stevenrocha40@gmail.com" class="email-contacto">stevenrocha40@gmail.com</a></strong>
					</p>
				</div>	


				<div id="derecha">
					
          <div style="width: 100%"><iframe width="100%" height="600" src="https://maps.google.com/maps?width=100%&height=600&hl=en&q=L.%20Veloz%20y%20P.%20Valdivieso+()&ie=UTF8&t=&z=18&iwloc=B&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"><a href="https://www.mapsdirections.info/en/measure-map-radius/">Measure circle on map</a></iframe></div><br />			</div>

			
		</div>
    </div>

</body>
</html>