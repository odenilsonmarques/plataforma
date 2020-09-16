<!DOCTYPE html>
<html lang="pt-BR">
  <head>
    <title>Home</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="{{('/assets/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{('/assets/css/estiloIndex.css')}}">
    <link rel="stylesheet" href="{{('/assets/css/estiloFooter.css')}}">
    <link rel="stylesheet" href="{{('/assets/css/estiloAnime.css')}}">
  </head>

  <body>
    <header id="header">
      <nav class="navbar navbar-default navbar-fixed-top"  style="background-color:#77cc6d; border: none;">
        <div class="container">
          <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar" >
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>                              
            </button>
            <a class="navbar-brand" href="#header">Educação<br>Ambiental</a>
            
          </div>
          <div class="collapse navbar-collapse" id="myNavbar" >
            <ul class="nav navbar-nav navbar-right" style="color:#FFF">
              <li><a href="#plataforma">A Plataforma</a></li>
              <li><a href="#departamento">Departamento</a></li>
              <li><a href="#acoes">Ações</a></li>
              <li><a href="#projetos">Projetos</a></li>
              <li><a href="#praias">Praias</a></li>
              <li><a href="#curiosidades">Curiosidades</a></li>
            </ul>
          </div>
        </div><br>
      </nav>
      <div class="jumbotron text-center" style="background-color:#77cc6d">
        <h2 style="color:#FFF;"> Secretaria Municipal do Ambiente </h2>
        <h3  style="color:#FFF;">Departamento de Educação Ambiental</h3>
      </div>
    </header>

    
    

    
    
    


    <!--------------------------------------------------------------------------->
    

    <!------------------------------------------------------------------------->
    
    <footer  style="background-color:#64a0d4">
      <div class="container-fluid"  style="background-color:#64a0d4">
        <div class="container">
          <div class="row">
            <div class="col-lg-4 text-left" id="borda">
              <h3>EDUCAÇÃO AMBIENTAL</h3>
              <ul>
                <li>Ações</li>
                <li>Curiosidades</li> 
                <li>Dia da árvore</li>  
                <li>Dia da Água</li> 
                <li>Doação de Mudas</li>      
                <li>Prais</li>
                <li>Palestras Educativas</li>   
                <li>Semana Mundial do Meio Ambiente</li>   
                <li>Oficinas</li>           
              </ul>
            </div>
            <div class="col-lg-4 text-center" id="borda">
              <h3>LOCALIZAÇÃO</h3>
              <p>O Ceará o Fotos, Encontra-se Localizado na Rua Manoel José Maia, nº 39, São José de Ribamar / Cep 65110-000.</p><br>
              <iframe src="https://www.google.com/maps/embed?pb=!1m23!1m12!1m3!1d3985.829588328001!2d-44.0578895352439!3d-2.5622097981330714!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m8!3e3!4m0!4m5!1s0x7f6bcde2d47b959%3A0xb948650e423c8221!2sGaleria%20Jos%C3%A9%20De%20Alencar%20-%20Av.%20Gon%C3%A7alves%20Dias%2C%20309%20-%20Moropia%2C%20S%C3%A3o%20Jos%C3%A9%20de%20Ribamar%20-%20MA%2C%2065110-000!3m2!1d-2.5611843999999997!2d-44.0555666!5e0!3m2!1spt-BR!2sbr!4v1599160393192!5m2!1spt-BR!2sbr" width="350" height="125" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
            </div>
            <div class="col-lg-4  links">
              <h3>ENCONTRE-NOS</h3>
              <ul>
                <li >
                  <a href="https://www.facebook.com/"   target="_blank" ><img src="{{('assets/img/facebook-logo.png')}}"> Facebook</a>
                </li><br>  
                <li>  
                  <a href="https://www.instagram.com/?hl=pt-br" target="_blank"><img  src="{{('assets/img/icon.png')}}">  Instagran</a>
                </li><br>
                <li>  
                  <a href="https://www.youtube.com/" target="_blank"><img  src="{{('assets/img/you.png')}}">  Youtube</a>
                </li>
              </ul>
            </div>
          </div><br><br><br>
          <div class="row">
            <div class="col-lg-12">
              <div class="informacao">
                Todos os direito reservados || Secretaria Municipal do Ambiente - SEMAM
              </div>
            </div>
          </div>
        </div>
      </div>
    </footer>
   
    <!--------------------------------------------------------------------------->

    <script>
      jQuery(document).ready(function($){
          $('myCarousepraiasPMDQ').carousel({
                  interval: 4000
          });
        });
    </script>

    <script src="{{('/assets/js/jquery-3.1.1.min.js')}}"></script>
    <script src="{{('/assets/js/bootstrap.min.js')}}"></script>
    <script src="{{('/assets/js/efeitoScroll.js')}}"></script>
    <script src="{{('/assets/js/app.js')}}"></script>
  </body>
</html>
