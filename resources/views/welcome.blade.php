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
  <nav class="navbar navbar-default" style="background-color:#3CB371">
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
    </div><br/>
  </nav>

  <div class="container">
    <div class="row">
      <div class="col-sm-12">
        <div class="jumbotron">
              Educação Ambiental
        </div>
      </div>
    </div>
  </div>

  <div class="container">
    <div class="row">
      <div class="col-sm-8">
        <div id="myCarousel" class="carousel slide" data-ride="carousel">
            <!-- Indicators -->
          <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
          </ol>
            <!-- Wrapper for slides -->
          <div class="carousel-inner" role="listbox">
            <div class="item active">
              <img src="{{('/assets/img/img4.jpg')}}" alt="Image">
              <div class="carousel-caption">
                <h3>Dia da árvore</h3>
                <p>Palestra</p>
            </div>      
          </div>

          <div class="item">
            <img src="{{('/assets/img/img3.jpg')}}" alt="Image">
            <div class="carousel-caption">
              <h3>Prai legal é praia limpa</h3>
              <p>limpeza de praia do meio</p>
            </div>      
          </div>
        </div>

            <!-- Left and right controls -->
            <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
                <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
                <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
            </div>
        </div>
        <div class="col-sm-4">
            <div class="well">
              <p>Sobre nós</p>
              A plataforma surge através do Departamento de Educação Ambiental da Secretaria Municipal do Ambiente – SEMAM, 
              para informação de ações e projetos de Educação Ambiental desenvolvido pela secretaria.
            </div>
        </div>
    </div><hr>
  </div>

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

<footer class="container-fluid text-center">
  <p>Footer Text</p>
</footer>
<script src="{{('/assets/js/jquery-3.1.1.min.js')}}"></script>
<script src="/assets/js/bootstrap.min.js"></script>

</body>
</html>
