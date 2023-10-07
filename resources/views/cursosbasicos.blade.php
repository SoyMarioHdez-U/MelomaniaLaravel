@extends('plantilla')
@section('content')
       
    <div class="container-fluid">
    <section class="contenedor_proyectos row">
      <div class="galeria col-md-12 col-xs-12"> 
    
          <!--Inicia div proyectos-->
          <div>
          <div class="proyectos_item col-md-3 col-xs-12" category="web">
            <img class="col-md-12 col-xs-12 img-responsive"  src="https://th.bing.com/th/id/OIP.58LdOl81xyiPtzI-SGi9xgHaFV?pid=ImgDet&rs=1" alt=" " >
            <button class="BotonC"><a class="BotonC" href="{{ route('leccionestrompeta') }}"> Trompeta </button>
          </div>
          <div class="proyectos_item col-md-3 col-xs-12" category="responsive">
            <img class="col-md-12 col-xs-12 img-responsive" src="https://th.bing.com/th/id/OIP.3wbBhOw6xUzv4g-ThR_-JgHaE7?pid=ImgDet&rs=1" alt="">
            <button class="BotonC"><a class="BotonC" href="{{ route('leccionestrompeta') }}"> Saxofon </button>
          </div>
          <div class="proyectos_item col-md-3 col-xs-12" category="ecommerce">
            <img class="col-md-12 col-xs-12 img-responsive" src="https://th.bing.com/th/id/R.76362c642d0b0c87bf4fc2541bf6679f?rik=E4oxmORvoBoecg&pid=ImgRaw&r=0" alt="" >
            <button class="BotonC"><a class="BotonC" href="{{ route('leccionestrompeta') }}"> Guitarra </button>
          </div>
          <div class="proyectos_item col-md-3 col-xs-12" category="app">
            <img class="col-md-12 col-xs-12 img-responsive" src="https://www.1zoom.me/big2/84/184275-Sepik.jpg" alt="">
            <button class="BotonC"><a class="BotonC" href="{{ route('leccionestrompeta') }}">Ecualizacion</button>
          </div>
          <div class="proyectos_item col-md-3 col-xs-12" category="web">
            <img class="col-md-12 col-xs-12 img-responsive" src="https://th.bing.com/th/id/R.a77d53bf43b85e08d774d39bf9196a79?rik=iSYDP1%2fnonkS7g&pid=ImgRaw&r=0" alt="">
            <button class="BotonC"><a class="BotonC" href="{{ route('leccionestrompeta') }}"> Violin</button>
          </div>
        </div>
          <div class="proyectos_item col-md-3 col-xs-12" category="escritorio">
            <img class="col-md-12 col-xs-12 img-responsive" src="https://th.bing.com/th/id/OIP.G-1-jdmIr72oeUDlLLCOIgHaEo?pid=ImgDet&rs=1" alt="">
            <button class="BotonC"><a class="BotonC" href="{{ route('leccionestrompeta') }}"> Cello</button>
          </div>
          <div class="proyectos_item col-md-3 col-xs-12" category="responsive">
            <img class="col-md-12 col-xs-12 img-responsive" src="https://i0.wp.com/www.artsmusica.net/cursos/wp-content/uploads/2019/06/solfeo_1.jpg?fit=450,294&ssl=1" alt="">
            <button class="BotonC"><a class="BotonC" href="{{ route('leccionestrompeta') }}">Teoria Musical</button>
          </div>
          <div class="proyectos_item col-md-3 col-xs-12" category="app">
            <img class="col-md-12 col-xs-12 img-responsive" src="https://th.bing.com/th/id/R.04a1f24d755e6b96fbc44c026818febd?rik=gdxjQVxLQaA%2fIQ&riu=http%3a%2f%2fwww.1zoom.me%2fprev%2f244%2f243791.jpg&ehk=swbOgATA0jFiawiIniyszgIwcEAaqlDLXqYnrnoR9ZU%3d&risl=&pid=ImgRaw&r=0" alt="">
            <button class="BotonC"><a class="BotonC" href="{{ route('leccionestrompeta') }}">Bateria</button>
          </div>
          <div class="proyectos_item col-md-3 col-xs-12" category="web">
            <img class="col-md-12 col-xs-12 img-responsive" src="https://th.bing.com/th/id/OIP.NYQMyCcOFzoWqW84fjTQkAHaEL?pid=ImgDet&rs=1" alt="">
            <button class="BotonC"><a class="BotonC" href="{{ route('leccionestrompeta') }}">Bongos</button>
          </div>
          <div class="proyectos_item col-md-3 col-xs-12" category="escritorio">
            <img class="col-md-12 col-xs-12 img-responsive" src="https://th.bing.com/th/id/OIP.Ezhl-bYhB7rnqE8HhgMN0wHaEK?pid=ImgDet&rs=1" alt="">
            <button class="BotonC"><a class="BotonC" href="{{ route('leccionestrompeta') }}">Piano</button>
          </div>
          <div class="proyectos_item col-md-3 col-xs-12" category="ecommerce">
            <img class="col-md-12 col-xs-12 img-responsive" src="https://th.bing.com/th/id/OIP.yhLYPdHaEhljHhjy7GWiRgHaEK?pid=ImgDet&rs=1" alt="">
            <button class="BotonC"><a class="BotonC" href="{{ route('leccionestrompeta') }}">Canto</button>
          </div>
          <div class="proyectos_item col-md-3 col-xs-12" category="app">
            <img class="col-md-12 col-xs-12 img-responsive" src="https://th.bing.com/th/id/R.77660100b674a6442d918b56c7e1afc2?rik=wTgbRXVYuVKQ%2fg&pid=ImgRaw&r=0" alt="">
            <button class="BotonC"><a class="BotonC" href="{{ route('leccionestrompeta') }}">Direccion Musical</button>
          </div>S
        </div>
      </div>
    </section>
    <script src="http://localhost//MelomaniaSV/js/cursos.js"></script>
@endsection