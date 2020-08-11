<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <title>Home</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="{{('/assets/css/bootstrap.min.css')}}">
  <link rel="stylesheet" href="{{('/assets/css/estiloIndex.css')}}">
</head>

<body>
  <nav class="navbar navbar-default" style="background-color:#77cc6d">
    <div class="container">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>                              
        </button>
        <a class="navbar-brand" href="#">Educação<br>Ambiental</a>
      </div>
      <div class="collapse navbar-collapse" id="myNavbar">
        <ul class="nav navbar-nav navbar-right" style="color:#FFF">
          <li><a href="#">Sobre</a></li>
          <li><a href="#">Missão</a></li>
          <li><a href="#">Visão</a></li>
          <li><a href="#">Curiosidades</a></li>
        </ul>  
      </div>
    </div>
    <div class="jumbotron text-center" style="background-color:#77cc6d;">
      <h2 style="color:#FFF;"> Secretaria Municipal do Ambiente </h2>
      <h3  style="color:#FFF;">Departamento de Educação Ambiental</h3>
    </div>
  </nav>
  

  <div class="container" style="background-color:none;">
    <div id="demo" class="carousel slide" data-ride="carousel">
      <div class="carousel-inner">
        <div class="item active">
          <div class="col-sm-3" style="border-radius:15px">
            <img src="{{('/assets/img/falesia.jpg')}}" style="">
            <p class="text-center" style="background-color:#64a0d4;font-size:17px;color:#FFF">AÇÕES</p>
          </div>  
          <div class="col-sm-3" style="border-radius:15px" >
            <img src="{{('/assets/img/falesia.jpg')}}" style="">
            <p class="text-center" style="background-color:#64a0d4;font-size:17px;color:#FFF">PROJETOS</p>
          </div>
          <div class="col-sm-3" style="border-radius:15px">
            <img src="{{('/assets/img/falesia.jpg')}}" style="">
            <p class="text-center" style="background-color:#64a0d4;font-size:17px;color:#FFF">AÇÕES</p>
          </div>  
          <div class="col-sm-3" style="border-radius:15px" >
            <img src="{{('/assets/img/falesia.jpg')}}" style="">
            <p class="text-center" style="background-color:#64a0d4;font-size:17px;color:#FFF">PROJETOS</p>
          </div>
        </div>

        <div class="item">
          <div class="col-sm-3" >
            <img src="{{('/assets/img/falesia.jpg')}}" style="border:none">
            <p class="text-center" style="background-color: #64a0d4;font-size:17px;color:#FFF">AÇÕES</p>
          </div>  
          <div class="col-sm-3">
            <img src="{{('/assets/img/falesia.jpg')}}" style="none">
            <p class="text-center" style="background-color:#64a0d4;font-size:17px;color:#FFF">PROJETOS</p>
          </div>
          <div class="col-sm-3">
            <img src="{{('/assets/img/falesia.jpg')}}" style="border:none">
            <p class="text-center" style="background-color:#64a0d4;font-size:17px;color:#FFF">PALESTRAS</p>
          </div>
          <div class="col-sm-3">
            <img src="{{('/assets/img/falesia.jpg')}}" style="border:none">
            <p class="text-center" style="background-color:#64a0d4;font-size:17px;color:#FFF">PRAIAS</p>
          </div>   
        </div>
      </div><br><br><br>
      <!-- Indicators -->
      <ol class="carousel-indicators"style="border:none">
        <li data-target="#demo" style="background-color:#64a0d4;" data-slide-to="0" class="active"></li>
        <li data-target="#demo" style="background-color:#64a0d4;" data-slide-to="1"></li>
      </ol>
    </div>
  </div>
  
    <div class="container-fluid" style="background-color:#64a0d4;border:none">    
      <div class="container"> 
        <div class="row"><br>
          <div class="col-sm-12 text-center">
            <h2 style="color:#FFF"><b>Quem somos</b></h2><br>
              <p style="font-size:18px;color:#FFF">
                A Secretaria Municipal do Ambiente de São José de Ribamar- SEMAM tem por finalidade através do Departamento 
                de Educação Ambiental realizar projetos e ações socioambientais para promover a sensibilização e preservação 
                do meio ambiente e dos recursos naturais, voltada à população do nosso Município.
              </p><br><br><br><br>
          </div>
        </div> 
      </div>
    </div><hr>

    <footer class="container-fluid text-center">
      <p>Footer Text</p>
    </footer>
    <script src="{{('/assets/js/jquery-3.1.1.min.js')}}"></script>
    <script src="/assets/js/bootstrap.min.js"></script>

  </body>
</html>
