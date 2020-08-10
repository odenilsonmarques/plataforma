<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <title>Bootstrap Example</title>
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
          <li><a href="#">Projetos</a></li>
          <li><a href="#">Palestras</a></li>
          <li><a href="#">Ações</a></li>
          <li><a href="#">Praias</a></li>
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
      <!-- Indicators -->
      <ol class="carousel-indicators">
        <li data-target="#demo" style="background-color:#77cc6d;" data-slide-to="0" class="active"></li>
        <li data-target="#demo" style="background-color:#77cc6d;" data-slide-to="1"></li>
      </ol>
  
      <!-- The slideshow -->
      <div class="carousel-inner">
        <div class="item active">
          <div class="col-sm-3">
            <img src="{{('/assets/img/falesia.jpg')}}">
          </div>  
          <div class="col-sm-3">
            <img src="{{('/assets/img/falesia.jpg')}}">
          </div>
          <div class="col-sm-3">
            <img src="{{('/assets/img/falesia.jpg')}}">
          </div>
          <div class="col-sm-3">
            <img src="{{('/assets/img/falesia.jpg')}}">
          </div>   
        </div>

        <div class="item">
          <div class="col-sm-3">
            <img src="{{('/assets/img/praia.jpg')}}">
          </div>   
          <div class="col-sm-3">
            <img src="{{('/assets/img/praia.jpg')}}">
          </div>   
          <div class="col-sm-3">
            <img src="{{('/assets/img/praia.jpg')}}">
          </div>    
          <div class=" col-sm-3 ">
            <img src="{{('/assets/img/praia.jpg')}}">
          </div>  
        </div>
      </div>
  
      <!-- Left and right controls -->
      <a class="carousel-control-prev" href="#demo" data-slide="prev">
        <span class="carousel-control-prev-icon"></span>
      </a>
      <a class="carousel-control-next" href="#demo" data-slide="next">
        <span class="carousel-control-next-icon"></span>
      </a>
    </div>
  </div>

    
<div class="container text-center">    
    <div class="row">
      <div class="col-sm-12">
        <h2 style="color:#3CB371;"><b>Quem somos</b></h2>
        <p style="font-size:18px">A plataforma surge através do Departamento de Educação Ambiental da Secretaria Municipal do Ambiente – SEMAM, 
        para informação de ações e projetos de Educação Ambiental desenvolvido pela secretaria.</p>
      </div>
    </div>
  </div><hr>



       



<div class="container text-center">    
  <h3>Sobre nós</h3>
  <br>
  <div class="row">
    <div class="col-sm-3">
      <img src="https://placehold.it/150x80?text=IMAGE" class="img-responsive" style="width:100%" alt="Image">
      <p>Current Project</p>
    </div>
    <div class="col-sm-3"> 
      <img src="https://placehold.it/150x80?text=IMAGE" class="img-responsive" style="width:100%" alt="Image">
      <p>Project 2</p>    
    </div>
    <div class="col-sm-3">
      <div class="well">
       <p>Some text..</p>
      </div>
      <div class="well">
       <p>Some text..</p>
      </div>
    </div>
    <div class="col-sm-3">
      <div class="well">
       <p>Some text..</p>
      </div>
      <div class="well">
       <p>Some text..</p>
      </div>
    </div>  
  </div>
  <hr>
</div>

<div class="container text-center">    
  <h3>Our Partners</h3>
  <br>
  <div class="row">
    <div class="col-sm-2">
      <img src="https://placehold.it/150x80?text=IMAGE" class="img-responsive" style="width:100%" alt="Image">
      <p>Partner 1</p>
    </div>
    <div class="col-sm-2"> 
      <img src="https://placehold.it/150x80?text=IMAGE" class="img-responsive" style="width:100%" alt="Image">
      <p>Partner 2</p>    
    </div>
    <div class="col-sm-2"> 
      <img src="https://placehold.it/150x80?text=IMAGE" class="img-responsive" style="width:100%" alt="Image">
      <p>Partner 3</p>
    </div>
    <div class="col-sm-2"> 
      <img src="https://placehold.it/150x80?text=IMAGE" class="img-responsive" style="width:100%" alt="Image">
      <p>Partner 4</p>
    </div> 
    <div class="col-sm-2"> 
      <img src="https://placehold.it/150x80?text=IMAGE" class="img-responsive" style="width:100%" alt="Image">
      <p>Partner 5</p>
    </div>     
    <div class="col-sm-2"> 
      <img src="https://placehold.it/150x80?text=IMAGE" class="img-responsive" style="width:100%" alt="Image">
      <p>Partner 6</p>
    </div> 
  </div>
</div><br>

<div id="myCarousel" class="carousel slide" data-ride="carousel" >
                            <!-- Indicators -->
                            <ol class="carousel-indicators">
                                <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                                <li data-target="#myCarousel" data-slide-to="1"></li>
                            </ol>
                            <!-- Wrapper for slides -->
                            <div class="carousel-inner">
                                <div class="item active">
                                    <div class="col-md-4">
                                        <div class="">
                                            <a href="#">
                                                <img src="assets/img/aniver11(15).JPG" alt="Lights" style="width:100%;height: 50%" class="zoom">
                                                <img src="assets/img/aniver07(15).JPG" alt="Lights" style="width:100%;height: 50%;margin-top: 2%" class="zoom">
                                            </a>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="">
                                            <a href="#">
                                                <img src="assets/img/aniver9(15).JPG" alt="Lights" style="width:100%;height:50%" class="zoom">
                                                <img src="assets/img/aniver010(15).JPG" alt="Lights" style="width:100%;height:50%; margin-top: 2%" class="zoom">
                                            </a>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="">
                                            <a href="#">
                                                <img src="assets/img/aniver12(15).JPG" alt="Lights" style="width:100%;height: 50%" class="zoom">
                                                <img src="assets/img/aniver09(15).JPG" alt="Lights" style="width:100%;height: 50%;margin-top: 2%" class="zoom">
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="item ">
                                    <div class="col-md-4">
                                        <div class="">
                                            <a href="#" >
                                                <img src="assets/img/aniver01(1).JPG" alt="Lights" style="width:100%;height: 50%" class="zoom">
                                                <img src="assets/img/aniver011(1).JPG" alt="Lights" style="width:100%;height: 50%;margin-top: 2%" class="zoom">
                                            </a>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="">
                                            <a href="#">
                                                <img src="assets/img/aniver013(1).JPG" alt="Lights" style="width:100%;height:50%" class="zoom">
                                                <img src="assets/img/aniver016(1).JPG" alt="Lights" style="width:100%;height:50%; margin-top: 2%" class="zoom">
                                            </a>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="">
                                            <a href="#">
                                                <img src="assets/img/aniver014(1).JPG" alt="Lights" style="width:100%;height: 50%" class="zoom">
                                                <img src="assets/img/aniver015(1).JPG" alt="Lights" style="width:100%;height: 50%;margin-top: 2%" class="zoom">
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Left and right controls -->
                            <a class="left carousel-control" href="#myCarousel" data-slide="prev">
                                <span class="glyphicon glyphicon-chevron-left"></span>
                                <span class="sr-only">Previous</span>
                            </a>
                            <a class="right carousel-control" href="#myCarousel" data-slide="next">
                                <span class="glyphicon glyphicon-chevron-right"></span>
                                <span class="sr-only">Next</span>
                            </a>
                        </div>



<footer class="container-fluid text-center">
  <p>Footer Text</p>
</footer>
<script src="{{('/assets/js/jquery-3.1.1.min.js')}}"></script>
<script src="/assets/js/bootstrap.min.js"></script>

</body>
</html>
