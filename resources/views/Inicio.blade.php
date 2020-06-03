<!doctype html>
<html lang="es">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="{{asset('static/css/inicio.css')}}">
    <link rel="stylesheet" href="{{asset('static/css/font.css')}}">
    <link rel="stylesheet" href="{{asset('static/css/main.css')}}">
    <title>Pagina</title>
  </head>
  <body>
    <nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-dark">
        <span class="navbar-brand mb-0 h1">Sistema de Bodega</span>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
      
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
            <a class="nav-link" href="{{url('inicio')}}">Inicio<span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
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
<main>
    <section id="banner">
    <img src="{{asset('static/img/b2.jpg')}}" >
    <div class="contenedor">
    <h2>Control de Ventas</h2>  
        <p>Las mejores soluciones del mercado</p>
      
    </div>
    </section>

    <section id="bienvenidos">
<h2>Bienvenidos al Sistema de Bodega</h2>
<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. 
    Illo vero quas perspiciatis veniam dolor a impedit, et voluptate quae ea?</p>
    </section>
    <section id="blog">
        <h3>Lo que ofrecemos</h3>
        <div class="contenedor">
            <article>
                <img src="{{asset('static/img/ventas.jpg')}}" >
                <h4>Mejorar la calidad de ventas</h4>
              
            </article>
            <article>
                <img src="{{asset('static/img/tv1.png')}}" alt="">
                <h4>Administrar mejor tu empresa</h4>
            </article>
            <article>
                <img src="{{asset('static/img/sube.jpg')}}" alt="">
                <h4>Subir tus ganancias</h4>
            </article>
        </div>
    </section>
<section id="info">
    <h3>Para nosostros es un placer ayudar</h3>
    <div class="contenedor">
        <div class="info-pet">
            <h3>Diseñador</h3>
            <img src="{{asset('static/img/1.jpg')}}" alt="" >
            <h4>Steven</h4>
        </div>
        <div class="info-pet">
            <h3>Base de datos</h3>
            <img src="{{asset('static/img/3.jpg')}}" alt="">
            <h4>Carolina</h4>
        </div>
        <div class="info-pet">
            <h3>Programador</h3>
            <img src="{{asset('static/img/2.jpeg')}}" alt="">
            <h4>Kevin</h4>
        </div>
        
    </div>
</section>

</main>
<footer>
<div class="contenedor">
    <p class="copy">Sistema de Bodega &copy; 2020</p>
</div>    
</footer>
  </body>
</html>