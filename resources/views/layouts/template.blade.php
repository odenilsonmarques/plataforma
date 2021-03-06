<!DOCTYPE html>
<html lang="pt-BR">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="{{('/assets/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{('/assets/css/estiloHeader.css')}}">
    <link rel="stylesheet" href="{{('/assets/css/estiloBody.css')}}">
    <link rel="stylesheet" href="{{('/assets/css/estiloFooter.css')}}">
  </head>

  <body>
    <header id="eduAmbiental">
      <nav class="navbar navbar-default navbar-fixed-top">
        <div class="container">
          <div class="navbar-header" >
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>                              
            </button>
            <a class="navbar-brand" href="#eduAmbiental"><strong>Educação Ambiental</strong></a>
          </div>
          <div class="collapse navbar-collapse" id="myNavbar">
            <ul class="nav navbar-nav navbar-right">
              <li><a href="#plataforma">Plataforma <span class="glyphicon glyphicon-globe"></span></a></li>
              <li><a href="#departamento">Departamento <span class="glyphicon glyphicon-tree-deciduous"></span></a></li>
              <li><a href="#acoes">Ações <span class="glyphicon glyphicon-th"></span></a></li>
              <li><a href="#projetos">Projetos <span class="glyphicon glyphicon-cog"></span></a></li>
              <li><a href="#praias">Praias <span class="glyphicon glyphicon-picture"></span></a></li>
              <li><a href="#curiosidades">Curiosidades <span class="glyphicon glyphicon-tasks"></span></a></li>
            </ul>
          </div>
        </div>
      </nav>
      <div class="jumbotron text-center">
        <h2>Secretaria Municipal do Ambiente </h2>
        <h3><strong>Departamento de Educação Ambiental</strong></h3>
      </div>
    </header>

    <!--na parte abaixo é inserido o conteudo que vai ser exibido no corpo da pagina-->
    <article class="anime">
      <div class="container-fluid">     
        <div class="container">
          <div class="row">
            <div id="carouselSlide" class="carousel slide" data-ride="carousel">
              <div class="carousel-inner">
                <div class="item active">
                  <div class="col-lg-3">
                    <img src="{{('/assets/img/img16.jpg')}}" class="img-responsive">
                  </div>  
                  <div class="col-lg-3">
                    <img src="{{('/assets/img/img17.jpg')}}" class="img-responsive">
                  </div>
                  <div class="col-lg-3">
                    <img src="{{('/assets/img/img18.jpg')}}" class="img-responsive">
                  </div>
                  <div class="col-lg-3">
                    <img src="{{('/assets/img/img19.jpg')}}" class="img-responsive"><br/>
                  </div>
                  <p class="text-center">Doação de Mudas</p>
                </div>

                <div class="item">
                  <div class="col-lg-3">
                    <img src="{{('/assets/img/img6.jpg')}}" class="img-responsive">
                  </div>  
                  <div class="col-lg-3">
                    <img src="{{('/assets/img/img7.jpg')}}" class="img-responsive">
                  </div>
                  <div class="col-lg-3">
                    <img src="{{('/assets/img/img8.jpg')}}" class="img-responsive">
                  </div>
                  <div class="col-lg-3">
                    <img src="{{('/assets/img/img9.jpg')}}" class="img-responsive"><br/>
                  </div>
                    <p class="text-center">Praia Legal é Praia Limpa</p>
                </div>

                <div class="item">
                  <div class="col-lg-3">
                    <img src="{{('/assets/img/img10.jpg')}}" class="img-responsive">
                  </div>  
                  <div class="col-lg-3">
                    <img src="{{('/assets/img/img11.jpg')}}" class="img-responsive">
                  </div>
                  <div class="col-lg-3">
                    <img src="{{('/assets/img/img12.jpg')}}" class="img-responsive">
                  </div>
                  <div class="col-lg-3">
                    <img src="{{('/assets/img/img13.jpg')}}" class="img-responsive"><br/>
                  </div>
                  <p class="text-center">Oficina de Construcão do Plano de Ação de Educação Ambiental</p> 
                </div>

                <div class="item">
                  <div class="col-lg-3">
                    <img src="{{('/assets/img/img0.jpg')}}"   class="img-responsive">    
                  </div>  
                  <div class="col-lg-3">
                    <img src="{{('/assets/img/img1.jpg')}}" class="img-responsive">
                  </div>
                  <div class="col-lg-3">
                    <img src="{{('/assets/img/img2.jpg')}}" class="img-responsive">
                  </div>  
                  <div class="col-lg-3">
                    <img src="{{('/assets/img/img3.jpg')}}" class="img-responsive"><br/>
                  </div>
                    <p class="text-center">Dia da Árvore</p> 
                </div>

                <div class="item">
                  <div class="col-lg-3">
                    <img src="{{('/assets/img/img20.jpg')}}"   class="img-responsive">    
                  </div>  
                  <div class="col-lg-3">
                    <img src="{{('/assets/img/img21.jpg')}}" class="img-responsive">
                  </div>
                  <div class="col-lg-3">
                    <img src="{{('/assets/img/img23.jpg')}}" class="img-responsive">
                  </div>  
                  <div class="col-lg-3">
                    <img src="{{('/assets/img/img24.jpg')}}" class="img-responsive"><br/>
                  </div>
                    <p class="text-center">Ações Sociais</p> 
                </div>
                <br/><br/><br/>
                <!-- Indicators -->
                <ol class="carousel-indicators">
                  <li data-target="#carouselSlide" style="background-color:#77cc6d;" data-slide-to="0" class="active"></li>
                  <li data-target="#carouselSlide" style="background-color:#77cc6d;" data-slide-to="1"></li>
                  <li data-target="#carouselSlide" style="background-color:#77cc6d;" data-slide-to="2"></li>
                  <li data-target="#carouselSlide" style="background-color:#77cc6d;" data-slide-to="3"></li>
                  <li data-target="#carouselSlide" style="background-color:#77cc6d;" data-slide-to="4"></li>
                </ol>
              </div>
            </div>
          </div>
        </div>
      </div>
    </article>
    <!--na parte acima é inserido o conteudo que vai ser exibido no corpo da pagina-->

    <!--na parte abaixo é inserido o conteudo que vai ser exibido no corpo da pagina-->
    <section class="anime">
      <div class="container-fluid" id="plataforma">    
        <div class="container"> 
          <div class="row">
            <div class="col-sm-12 text-center">
              <h2 class="text-left tituloVerde"><b>Plataforma</b></h2><br/>
                <p class="textoVerde">
                  A plataforma ambiental criada pela Secretaria Municipal do Ambiente tem o
                  objetivo de apresentar projetos socioeducativos, ações ambientais e curiosidades da
                  nossa cidade, que são realizados por esta secretaria, atingindo um número significativo
                  de pessoas e ajudando a transformar a realidade em que vivemos. Nosso trabalho
                  possibilita o desenvolvimento de diversos benefícios ambientais que, por sua vez,
                  reproduzem efeitos positivos para a sociedade.
                  A plataforma vem trazer informação para o cidadão para que possa ter
                  conhecimento das nossas atividades e através desse conhecimento mostrar que é
                  possível que cada cidadão tenha consciência da sua responsabilidade perante o meio
                  ambiente. Sendo também um canal de comunicação para a difusão do conhecimento e
                  informações que despertem a conscientização sobre o desenvolvimento sustentável,
                  além de apoiar e promover campanhas, projetos e iniciativas que incentivem uma
                  postura consciente diante a nossa sociedade.
                </p>
            </div>
          </div>
          <div class="row" id="imgPlataforma">
            <div class="col-lg-4 text-center">
              <img src="{{('/assets/img/nature.png')}}" >  
            </div>
            <div class="col-lg-4 text-center">
              <img src="{{('/assets/img/world.png')}}" >  
            </div>
            <div class="col-lg-4 text-center">
              <img src="{{('/assets/img/ecosystem.png')}}" >  
            </div>
          </div>
        </div>
      </div>
    </section>
  
    <section class="anime">
      <div class="container-fluid" id="departamento">    
        <div class="container"> 
        <h2 class="text-left tituloVerde"><b>Departamento</b></h2>
          <div class="row">
            <div class="col-sm-4 text-center">
              <h3 class="subTituloVerde"><b>Sobre</b></h2>
                <p class="textoVerde">
                  A Secretaria Municipal do Ambiente de São José de Ribamar - SEMAM tem por finalidade através do Departamento de
                  Educação Ambiental realizar projetos e ações socioambientais para promover a sensibilização e preservação do meio ambiente e dos recursos naturais, voltada à população do nosso Município espaços entre palavras.
                </p>
            </div>
            <div class="col-sm-4 text-center">
              <h3 class="subTituloVerde"><b>Missão</b></h2>
                <p class="textoVerde">
                    Temos a missão de proteger, conservar e recuperar o meio ambiente, incentivando o desenvolvimento 
                    com responsabilidade socioambiental, ações e programas que visam à preservação e conservação de recursos naturais e qualidade de vida, tendo a Educação Ambiental como forma de mudança comportamental da população acerca da preservação do ambiente.
                </p>
            </div>
            <div class="col-sm-4 text-center">
              <h3 class="subTituloVerde"><b>Visão</b></h2>
                <p class="textoVerde">
                  Hoje a Secretaria Municipal do Ambiente-SEMAM é formada por uma equipe de Técnicos, Analista, Fiscais, Setor Jurídico, 
                  que procuram oferecer suporte na área de Controle, Fiscalização e Proteção Ambiental, almeja ser reconhecida como modelo 
                  de Secretaria de Meio Ambiente, no que diz respeito às ações socioambientais e na promoção das políticas públicas voltadas à 
                  preservação de recursos naturais e desenvolvimento sustentável.
                </p>
            </div>
          </div>
          <div class="row" id="imgDepartamento">
            <div class="col-lg-4 text-center">
              <img src="{{('/assets/img/about2.png')}}">
            </div>
            <div class="col-lg-4 text-center">
              <img src="{{('/assets/img/alvo2.png')}}">
            </div>
            <div class="col-lg-4 text-center">
              <img src="{{('/assets/img/oportunidade1.png')}}">
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="anime">
      <div class="container-fluid" id="acoes">   
        <div class="container"> 
        <h2 class="text-left tituloVerde"><b>Nossas Ações</b></h2><br>
          <div class="row"> 
            <div class="col-lg-4">
              <div class="thumbnail">
                <img src="{{('/assets/img/img26.jpg')}}" class="img-responsive" style="height:200px">
                <div class="caption text-center">
                  <h4 class="text-center subTituloAcoes"><strong>Dia da Água</strong></h4>
                  <p class="textoBrancoAcoes">
                    A SEMAM em parcerias com as Secretaria Municipal de Educação (SEMED) realiza anualmente um evento socioeducativo nas escolas municipais do Município, em comemoração ao dia mundial da água... 
                  </p><br/>
                  <!--link para chamar o modal-->
                  <a href="#" class="btn btn-success btn-sm" data-toggle="modal" data-target="#myModalDiaDaAgua">
                    <span class="glyphicon glyphicon-th"></span><br/>
                    Galeria
                  </a>
                </div>
              </div>
            </div>
            <div class="col-lg-4">
              <div class="thumbnail">
                <img src="{{('/assets/img/img25.jpg')}}" class="img-responsive" style="height:200px">
                <div class="caption text-center">
                  <h4 class="text-center subTituloAcoes"><strong>Dia da árvore</strong></h4>
                  <p class="textoBrancoAcoes">
                    Em sua comemoração é realizado varias atividades, tais como: mesa redonda com engenheiro agrônomo, palestras nas escolas sobre a importância das árvores, plantio e doações de mudas...
                  </p><br/>
                  <a href="#" class="btn btn-success btn-sm" data-toggle="modal" data-target="#myModalDiaDaArvore">
                    <span class="glyphicon glyphicon-th"></span><br/>
                    Galeria
                  </a>
                </div>
              </div>
            </div>  
            <div class="col-lg-4">
              <div class="thumbnail">
              <img src="{{('/assets/img/img66.jpg')}}" class="img-responsive" style="height:200px" >             
                <div class="caption text-center">
                  <h4 class="text-center subTituloAcoes"><strong>Doação de Mudas</strong></h4>
                  <p  class="textoBrancoAcoes">
                    A secretaria promove a recuperação de áreas degradadas, paisagismo das praças e a inclusão social através das ações ambientais em todo o município, são doadas mudas de espécies frutíferas...
                  </p><br/>
                  <a href="#" class="btn btn-success btn-sm" data-toggle="modal" data-target="#myModalDoacaDeMudas">
                    <span class="glyphicon glyphicon-th"></span><br/>
                    Galeria
                  </a>
                </div>
              </div>
            </div> 
          </div>  
          <div class="row">
            <div class="col-lg-4">
              <div class="thumbnail">
                <img src="{{('/assets/img/img76.jpg')}}" class="img-responsive" style="height:200px">
                <div class="caption text-center">
                  <h4 class="text-center subTituloAcoes"><strong>Oficinas</strong></h4>
                  <p  class="textoBrancoAcoes">
                    O objetivo das oficinas é estimular a participação da população na preservação dos recursos naturais e na busca de soluções dos problemas ambientais, enfatizando a importância da reutilização...
                  </p><br/>
                  <a href="#" class="btn btn-success btn-sm" data-toggle="modal" data-target="#myModalOficina">
                    <span class="glyphicon glyphicon-th"></span><br/>
                    Galeria
                  </a>
                </div>
              </div>
            </div>  
            <div class="col-lg-4">
              <div class="thumbnail">
                <img src="{{('/assets/img/img85.jpg')}}" class="img-responsive"  style="height:200px">
                <div class="caption text-center">
                  <h4 class="text-center subTituloAcoes"><strong>Semana Mundial do Meio Ambiente</strong></h4>
                  <p class="textoBrancoAcoes">
                    O principal objetivo da Semana Nacional do Meio Ambiente é conscientizar a comunidade sobre a importância de preservar os diferentes tipos de ecossistemas...
                  </p><br/>
                  <a href="#" class="btn btn-success btn-sm" data-toggle="modal" data-target="#myModalSemana">
                    <span class="glyphicon glyphicon-th"></span><br/>
                    Galeria
                  </a>
                </div>
              </div>
            </div>
            <div class="col-lg-4" >
              <div class="thumbnail">
                <img src="{{('/assets/img/img49.jpg')}}" class="img-responsive"  style="height:200px">
                <div class="caption text-center">
                  <h4 class="text-center subTituloAcoes"><strong>Palestras Educativas</strong></h4>
                  <p class="textoBrancoAcoes">
                    A SEMAM desenvolve o projeto Palestras nas Escolas com o objetivo de levar conhecimento sobre educação ambiental nas salas de aula, com maior enfoque para as problemáticas sobre resíduos sólidos... 
                  </p><br/>
                  <a href="#" class="btn btn-success btn-sm" data-toggle="modal" data-target="#myModalPalestra">
                    <span class="glyphicon glyphicon-th"></span><br/>
                    Galeria
                  </a>
                </div>
              </div>
            </div>
        </div>
      </div>
    </section>

    <!--na parte abaixo é inserido o conteudo(modal) que vai ser exibido no corpo da pagina-->
    <section>
      <div class="container">
        <div class="row">
          <div class="col-lg-12">
            <div class="modal fade" id="myModalDiaDaAgua" role="dialog">
              <div class="modal-dialog modal-lg">
                <div class="modal-content">
                  <div class="modal-header"><br/><br/>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title text-center">Dia da Água</h4>
                  </div>
                  <div class="modal-body">
                    <!--inicio carrossel-->
                    <div id="myCarousel1" class="carousel slide" data-ride="carousel" >
                      <!-- Indicators -->
                        <ol class="carousel-indicators">
                          <li data-target="#myCarousel1" data-slide-to="0" class="active"></li>
                          <li data-target="#myCarousel1" data-slide-to="1"></li>
                        </ol>
                          <!-- Wrapper for slides -->
                        <div class="carousel-inner imgModal">
                          <div class="item active">
                            <div class="col-lg-12">                                       
                              <img src="{{('/assets/img/img026.jpeg')}}" alt="Lights" class="img-responsive">
                            </div>  
                          </div>
                          <div class="item">
                            <div class="col-lg-12">                                       
                              <img src="{{('/assets/img/img26.jpg')}}" alt="Lights" class="img-responsive">
                            </div>      
                          </div>
                        </div>
                        <!-- Left and right controls -->
                        <a class="left carousel-control" href="#myCarousel1" data-slide="prev">
                          <span class="glyphicon glyphicon-chevron-left"></span>
                          <span class="sr-only">Previous</span>
                        </a>
                        <a class="right carousel-control" href="#myCarousel1" data-slide="next">
                          <span class="glyphicon glyphicon-chevron-right"></span>
                          <span class="sr-only">Next</span>
                        </a>
                      </div>
                      <!--fim carrossel-->
                  </div>
                  <div class="modal-footer">
                    <p class="textoModal">
                      <b>A SEMAM em parcerias com as Secretaria Municipal de Educação (SEMED) realiza anualmente um evento socioeducativo nas escolas municipais do Município,
                      em comemoração ao dia mundial da água. A ação tem como objetivo, a conscientização dos alunos e da população para o valor e gestão consciente dos recursos hídricos, 
                      além de chamar a atenção para a necessidade de exercer uma ação efetiva ao desperdício de água através da educação ambiental. A programação é bastante diversificada, 
                      contando com recreação, oficina, palestra, exposição e doação de mudas frutíferas, ornamentais e medicinais.</b>
                    </p>
                  </div>
                </div>
              </div>
            </div>

            <!---->
            <div class="modal fade" id="myModalDiaDaArvore" role="dialog">
              <div class="modal-dialog modal-lg">
                <div class="modal-content">
                  <div class="modal-header"><br/><br/>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title text-center">Dia da Árvore</h4>
                  </div>
                  <div class="modal-body">
                    <!--inicio carrossel-->
                    <div id="myCarousel2" class="carousel slide" data-ride="carousel" >
                      <!-- Indicators -->
                        <ol class="carousel-indicators">
                          <li data-target="#myCarousel2" data-slide-to="0" class="active"></li>
                          <li data-target="#myCarousel2" data-slide-to="1"></li>
                        </ol>
                          <!-- Wrapper for slides -->
                        <div class="carousel-inner">
                          <div class="item active">
                            <div class="col-lg-12">                                       
                              <img src="{{('/assets/img/img25.jpg')}}" alt="Lights" class="img-responsive">
                            </div>  
                          </div>
                          <div class="item">
                            <div class="col-lg-12">                                       
                              <img src="{{('/assets/img/img45.jpg')}}" alt="Lights" class="img-responsive">
                            </div>      
                          </div>
                        </div>
                        <!-- Left and right controls -->
                        <a class="left carousel-control" href="#myCarousel2" data-slide="prev">
                          <span class="glyphicon glyphicon-chevron-left"></span>
                          <span class="sr-only">Previous</span>
                        </a>
                        <a class="right carousel-control" href="#myCarousel2" data-slide="next">
                          <span class="glyphicon glyphicon-chevron-right"></span>
                          <span class="sr-only">Next</span>
                        </a>
                      </div>
                      <!--fim carrossel-->
                  </div>
                  <div class="modal-footer">
                    <p>
                      <b>A Secretaria Municipal do Ambiente- SEMAM realiza anualmente uma vasta programação para o público jovem, 
                        em comemoração ao dia da árvore. Essa data tão importante é comemorada mundialmente e foi escolhida pela 
                        grande importância que as árvores possuem na natureza, pois elas absorvem poluentes do ar e liberam oxigênio 
                        que respiramos, proporcionam sombra e frescor e produzem diversos alimentos.</b>
                    </p>
                  </div>
                </div>
              </div>
            </div>
            <!----->

            <!---->
            <div class="modal fade" id="myModalDoacaDeMudas" role="dialog">
              <div class="modal-dialog modal-lg">
                <div class="modal-content">
                  <div class="modal-header"><br/><br/>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title text-center">Doação de Mudas</h4>
                  </div>
                  <div class="modal-body">
                    <!--inicio carrossel-->
                    <div id="myCarousel3" class="carousel slide" data-ride="carousel" >
                      <!-- Indicators -->
                        <ol class="carousel-indicators">
                          <li data-target="#myCarousel3" data-slide-to="0" class="active"></li>
                          <li data-target="#myCarousel3" data-slide-to="1"></li>
                        </ol>
                          <!-- Wrapper for slides -->
                        <div class="carousel-inner">
                          <div class="item active">
                            <div class="col-lg-12">                                       
                              <img src="{{('/assets/img/img66.jpg')}}" alt="Lights" class="img-responsive">
                            </div>  
                          </div>
                          <div class="item">
                            <div class="col-lg-12">                                       
                              <img src="{{('/assets/img/img70.jpg')}}" alt="Lights" class="img-responsive">
                            </div>      
                          </div>
                        </div>
                        <!-- Left and right controls -->
                        <a class="left carousel-control" href="#myCarousel3" data-slide="prev">
                          <span class="glyphicon glyphicon-chevron-left"></span>
                          <span class="sr-only">Previous</span>
                        </a>
                        <a class="right carousel-control" href="#myCarousel3" data-slide="next">
                          <span class="glyphicon glyphicon-chevron-right"></span>
                          <span class="sr-only">Next</span>
                        </a>
                      </div>
                      <!--fim carrossel-->
                  </div>
                  <div class="modal-footer">
                    <p>
                      <b>Com o intuito de ampliar a biodiversidade, levar a consciência ambiental e recuperar áreas degradadas, 
                        a Prefeitura de São José de Ribamar, através da Secretaria Municipal do Ambiente (SEMAM) realiza diversas
                        ações e campanhas de doação de mudas em toda a Cidade, anualmente são mais de duas mil mudas doadas para 
                        a população. A secretaria promove a recuperação de áreas degradadas, paisagismo das praças e a inclusão 
                        social através das ações ambientais em todo o município, são doadas mudas de espécies frutíferas, 
                        ornamentais e medicinais..</b>
                    </p>
                  </div>
                </div>
              </div>
            </div>
            <!---->

            <!---->
            <div class="modal fade" id="myModalOficina" role="dialog">
              <div class="modal-dialog modal-lg">
                <div class="modal-content">
                  <div class="modal-header"><br/><br/>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title text-center">Oficinas</h4>
                  </div>
                  <div class="modal-body">
                    <!--inicio carrossel-->
                    <div id="myCarousel4" class="carousel slide" data-ride="carousel" >
                      <!-- Indicators -->
                        <ol class="carousel-indicators">
                          <li data-target="#myCarousel4" data-slide-to="0" class="active"></li>
                          <li data-target="#myCarousel4" data-slide-to="1"></li>
                        </ol>
                          <!-- Wrapper for slides -->
                        <div class="carousel-inner">
                          <div class="item active">
                            <div class="col-lg-12">                                       
                              <img src="{{('/assets/img/img76.jpg')}}" alt="Lights" class="img-responsive">
                            </div>  
                          </div>
                          <div class="item">
                            <div class="col-lg-12">                                       
                              <img src="{{('/assets/img/img78.jpg')}}" alt="Lights" class="img-responsive">
                            </div>      
                          </div>
                        </div>
                        <!-- Left and right controls -->
                        <a class="left carousel-control" href="#myCarousel4" data-slide="prev">
                          <span class="glyphicon glyphicon-chevron-left"></span>
                          <span class="sr-only">Previous</span>
                        </a>
                        <a class="right carousel-control" href="#myCarousel4" data-slide="next">
                          <span class="glyphicon glyphicon-chevron-right"></span>
                          <span class="sr-only">Next</span>
                        </a>
                      </div>
                      <!--fim carrossel-->
                  </div>
                  <div class="modal-footer">
                    <p>
                      <b>O objetivo das oficinas é estimular a participação da população na preservação dos recursos 
                        naturais e na busca de soluções dos problemas ambientais, enfatizando a importância da reutilização e 
                        da reciclagem dos resíduos sólidos. A reciclagem é importante também para a sociedade, uma vez que gera 
                        renda com a produção de novos produtos.</b>
                    </p>
                  </div>
                </div>
              </div>
            </div>
            <!---->

            <!---->
            <div class="modal fade" id="myModalSemana" role="dialog">
              <div class="modal-dialog modal-lg">
                <div class="modal-content">
                  <div class="modal-header"><br/><br/>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title text-center">Semana Mundial do Meio Ambiente</h4>
                  </div>
                  <div class="modal-body">
                    <!--inicio carrossel-->
                    <div id="myCarousel5" class="carousel slide" data-ride="carousel" >
                      <!-- Indicators -->
                        <ol class="carousel-indicators">
                          <li data-target="#myCarousel5" data-slide-to="0" class="active"></li>
                          <li data-target="#myCarousel5" data-slide-to="1"></li>
                        </ol>
                          <!-- Wrapper for slides -->
                        <div class="carousel-inner">
                          <div class="item active">
                            <div class="col-lg-12">                                       
                              <img src="{{('/assets/img/img81.jpg')}}" alt="Lights" class="img-responsive">
                            </div>  
                          </div>
                          <div class="item">
                            <div class="col-lg-12">                                       
                              <img src="{{('/assets/img/img85.jpg')}}" alt="Lights" class="img-responsive">
                            </div>      
                          </div>
                        </div>
                        <!-- Left and right controls -->
                        <a class="left carousel-control" href="#myCarousel5" data-slide="prev">
                          <span class="glyphicon glyphicon-chevron-left"></span>
                          <span class="sr-only">Previous</span>
                        </a>
                        <a class="right carousel-control" href="#myCarousel5" data-slide="next">
                          <span class="glyphicon glyphicon-chevron-right"></span>
                          <span class="sr-only">Next</span>
                        </a>
                      </div>
                      <!--fim carrossel-->
                  </div>
                  <div class="modal-footer">
                    <p>
                      <b>O principal objetivo da Semana Nacional do Meio Ambiente é conscientizar a comunidade sobre a importância de preservar os diferentes tipos de ecossistemas. 
                        A secretaria promove eventualmente seminários municipais sobre diversos temas ambientais, promovendo seminários sobre politicas ambientais, com atividades tais como; 
                        palestras socioeducativas, oficinais, exposição de reutilização de pneus, doação de mudas, limpeza de rios e praias e plantios de mudas.    
                        .</b>
                    </p>
                  </div>
                </div>
              </div>
            </div>
            <!---->

            <!---->
            <div class="modal fade" id="myModalPalestra" role="dialog">
              <div class="modal-dialog modal-lg">
                <div class="modal-content">
                  <div class="modal-header"><br/><br/>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title text-center">Palestras Educativas</h4>
                  </div>
                  <div class="modal-body">
                    <!--inicio carrossel-->
                    <div id="myCarousel6" class="carousel slide" data-ride="carousel" >
                      <!-- Indicators -->
                        <ol class="carousel-indicators">
                          <li data-target="#myCarousel6" data-slide-to="0" class="active"></li>
                          <li data-target="#myCarousel6" data-slide-to="1"></li>
                        </ol>
                          <!-- Wrapper for slides -->
                        <div class="carousel-inner">
                          <div class="item active">
                            <div class="col-lg-12">                                       
                              <img src="{{('/assets/img/img26.jpg')}}" alt="Lights" class="img-responsive">
                            </div>  
                          </div>
                          <div class="item">
                            <div class="col-lg-12">                                       
                              <img src="{{('/assets/img/img49.jpg')}}" alt="Lights" class="img-responsive">
                            </div>      
                          </div>
                        </div>
                        <!-- Left and right controls -->
                        <a class="left carousel-control" href="#myCarousel6" data-slide="prev">
                          <span class="glyphicon glyphicon-chevron-left"></span>
                          <span class="sr-only">Previous</span>
                        </a>
                        <a class="right carousel-control" href="#myCarousel6" data-slide="next">
                          <span class="glyphicon glyphicon-chevron-right"></span>
                          <span class="sr-only">Next</span>
                        </a>
                      </div>
                      <!--fim carrossel-->
                  </div>
                  <div class="modal-footer">
                    <p>
                      <b>A SEMAM desenvolve o projeto Palestras nas Escolas com o objetivo de levar conhecimento sobre educação 
                        ambiental nas salas de aula, com maior enfoque para as problemáticas sobre resíduos sólidos, reciclagem, 
                        sustentabilidade e consumo consciente. O projeto é aplicado em conjunto com a Secretaria Municipal de Educação – SEMED 
                        nas escolas do município, abrangendo toda a comunidade escolar.</b>
                    </p>
                  </div>
                </div>
              </div>
            </div>
            <!---->
          </div>
        </div>
      </div>
    </section>
<!--na parte acima é inserido o conteudo(modal) que vai ser exibido no corpo da pagina-->
    <section class="anime">
      <div class="container-fluid" id="projetos">   
        <div class="container"> 
          <h2 class="text-left tituloVerde"><b>Projetos</b></h2><br>
          <div class="row" id="slide">
            <div class="col-lg-4" id="carousel-bounding-box">
              <div id='carousel-custom' class='carousel slide' data-ride='carousel'>
                <div class='carousel-inner'>
                  <div class='item active'>
                    <img src="{{('/assets/img/img30.jpg')}}" alt=''/>
                  </div>
                  <div class='item'>
                    <img src="{{('/assets/img/img27.jpg')}}" alt=''/>
                  </div>
                  <div class='item'>
                    <img src="{{('/assets/img/img35.jpg')}}" alt=''/>
                  </div>
                  <div class='item'>
                    <img src="{{('/assets/img/img29.jpg')}}" alt=''/>
                  </div>
                </div>
                <a class='left carousel-control' href='#carousel-custom' data-slide='prev'>
                  <span class='glyphicon glyphicon-chevron-left'></span>
                </a>
                <a class='right carousel-control' href='#carousel-custom' data-slide='next'>
                  <span class='glyphicon glyphicon-chevron-right'></span>
                </a> 
              </div>
            </div> 
            
            <div class="col-lg-8"> 
              <p id="subTituloProjeto"><b>Parque Natural  Municipal da Quinta</b></p>
                <p class="textoVerde">
                  O parque natural da quinta possui uma área de aproximadamente de 24 hectares e dotado de um rico ecossistema, 
                  situado no município de são José de Ribamar, foi transformado em uma unidade de conservação sustentável, 
                  situação que permite preservar a fauna e a flora do local.
                </p>
              <div class="row">
                <div class="col-lg-3">
                  <img src="{{('/assets/img/img30.jpg')}}" class="img-responsive" width="100%">
                </div>
                <div class="col-lg-3">
                  <img src="{{('/assets/img/img27.jpg')}}" class="img-responsive" width="100%">
                </div>
                <div class="col-lg-3">
                  <img src="{{('/assets/img/img35.jpg')}}" class="img-responsive" width="100%">
                </div>
                <div class="col-lg-3">
                  <img src="{{('/assets/img/img29.jpg')}}" class="img-responsive" width="100%">
                </div>
              </div>
            </div> 
          </div><hr/>
          
          <div class="row" id="slide">
            <div class="col-lg-4" id="carousel-bounding-box">
              <div id='carousel-custom2' class='carousel slide' data-ride='carousel'>
                <div class='carousel-inner'>
                  <div class='item active'>
                    <img src="{{('/assets/img/img41.jpg')}}" alt=''/>
                  </div>
                  <div class='item'>
                    <img src="{{('/assets/img/img42.jpg')}}" alt=''/>
                  </div>
                  <div class='item'>
                    <img src="{{('/assets/img/img40.jpg')}}" alt=''/>
                  </div>
                  <div class='item'>
                    <img src="{{('/assets/img/img43.jpg')}}" alt=''/>
                  </div>
                </div>
                <a class='left carousel-control' href='#carousel-custom2' data-slide='prev'>
                  <span class='glyphicon glyphicon-chevron-left'></span>
                </a>
                <a class='right carousel-control' href='#carousel-custom2' data-slide='next'>
                  <span class='glyphicon glyphicon-chevron-right'></span>
                </a> 
              </div>
            </div> 
            
            <div class="col-lg-8"> 
              <p id="subTituloProjeto"><b>Projeto Praia Legal é Praia Limpa</b></p>
                <p class="textoVerde">
                  O Projeto Praia Legal é Praia Limpa, desenvolvido pela Secretaria do Ambiente- SEMAM realizando várias ações de conscientização
                  para limpeza e preservação das praias que compreende a orla marítima das praias do município de São José de Ribamar-MA. 
                </p>
              <div class="row">
                <div class="col-lg-3">
                  <img src="{{('/assets/img/img41.jpg')}}" class="img-responsive" width="100%">
                </div>
                <div class="col-lg-3">
                  <img src="{{('/assets/img/img42.jpg')}}" class="img-responsive" width="100%">
                </div>
                <div class="col-lg-3">
                  <img src="{{('/assets/img/img40.jpg')}}" class="img-responsive" width="100%">
                </div>
                <div class="col-lg-3">
                  <img src="{{('/assets/img/img43.jpg')}}" class="img-responsive" width="100%">
                </div>
              </div>
            </div> 
          </div><hr/>

          <div class="row" id="slide">
            <div class="col-lg-4"  id="carousel-bounding-box">
              <div id='carousel-custom3' class='carousel slide' data-ride='carousel'>
                <div class='carousel-inner'>
                  <div class='item active'>
                    <img src="{{('/assets/img/img60.jpg')}}" alt=''/>
                  </div>
                  <div class='item'>
                    <img src="{{('/assets/img/img61.jpg')}}" alt=''/>
                  </div>
                  <div class='item'>
                    <img src="{{('/assets/img/img62.jpg')}}" alt=''/>
                  </div>
                  <div class='item'>
                    <img src="{{('/assets/img/img59.jpg')}}" alt=''/>
                  </div>
                </div>
                <a class='left carousel-control' href='#carousel-custom3' data-slide='prev'>
                  <span class='glyphicon glyphicon-chevron-left'></span>
                </a>
                <a class='right carousel-control' href='#carousel-custom3' data-slide='next'>
                  <span class='glyphicon glyphicon-chevron-right'></span>
                </a> 
              </div>
            </div> 
            
            <div class="col-lg-8"> 
              <p id="subTituloProjeto"><b>Projeto Ribamar Mais Verde</b></p>
                <p class="textoVerde">
                  O projeto Ribamar Mais Verde tem como objetivo aumentar as áreas verdes do município, diversificando a
                  quantidade de espécies arbóreas, ocupando os espaços vazios nas vias e logradouros públicos. Foram plantadas
                  diversas árvores arbóreas em diversos lugares da Cidade.
                </p>
              <div class="row">
                <div class="col-lg-3">
                  <img src="{{('/assets/img/img60.jpg')}}"   class="img-responsive" width="100%">
                </div>
                <div class="col-lg-3">
                  <img src="{{('/assets/img/img61.jpg')}}"   class="img-responsive" width="100%">
                </div>
                <div class="col-lg-3">
                  <img src="{{('/assets/img/img62.jpg')}}"   class="img-responsive" width="100%">
                </div>
                <div class="col-lg-3">
                  <img src="{{('/assets/img/img59.jpg')}}"   class="img-responsive" width="100%">
                </div>
              </div>
            </div> 
          </div><hr/>

          <div class="row" id="slide">
            <div class="col-lg-4"  id="carousel-bounding-box">
              <div id='carousel-custom4' class='carousel slide' data-ride='carousel'>
                <div class='carousel-inner'>
                  <div class='item active'>
                    <img src="{{('/assets/img/img54.jpg')}}" alt=''/>
                  </div>
                  <div class='item'>
                    <img src="{{('/assets/img/img55.jpg')}}" alt=''/>
                  </div>
                  <div class='item'>
                    <img src="{{('/assets/img/img56.jpg')}}" alt=''/>
                  </div>
                  <div class='item'>
                    <img src="{{('/assets/img/img58.jpg')}}" alt=''/>
                  </div>
                </div>
                <a class='left carousel-control' href='#carousel-custom4' data-slide='prev'>
                  <span class='glyphicon glyphicon-chevron-left'></span>
                </a>
                <a class='right carousel-control' href='#carousel-custom4' data-slide='next'>
                  <span class='glyphicon glyphicon-chevron-right'></span>
                </a> 
              </div>
            </div> 
            
            <div class="col-lg-8"> 
              <p id="subTituloProjeto"><b>Recuperação de Nascente e Monitoramento do Rio da Prata</b></p>
                <p class="textoVerde">
                  O presente projeto vem apresentar uma proposta de recuperação do potencial hídrico das nascentes degradadas no Município de São Jose de Ribamar. 
                  O aumento da expansão imobiliária e a ocupação desordenada veio impactar o ecossistema. 
                </p>
              <div class="row">
                <div class="col-lg-3">
                  <img src="{{('/assets/img/img54.jpg')}}"   class="img-responsive" width="100%">
                </div>
                <div class="col-lg-3">
                  <img src="{{('/assets/img/img55.jpg')}}"   class="img-responsive" width="100%">
                </div>
                <div class="col-lg-3">
                  <img src="{{('/assets/img/img56.jpg')}}"   class="img-responsive" width="100%">
                </div>
                <div class="col-lg-3">
                  <img src="{{('/assets/img/img58.jpg')}}"   class="img-responsive" width="100%">
                </div>
              </div>
            </div> 
          </div><hr/>
          
          <div class="row" id="slide">
            <div class="col-lg-4"  id="carousel-bounding-box">
              <div id='carousel-custom5' class='carousel slide' data-ride='carousel'>
                <div class='carousel-inner'>
                  <div class='item active'>
                    <img src="{{('/assets/img/img50.jpg')}}" alt=''/>
                  </div>
                  <div class='item'>
                    <img src="{{('/assets/img/img26.jpg')}}" alt=''/>
                  </div>
                  <div class='item'>
                    <img src="{{('/assets/img/img47.jpg')}}" alt=''/>
                  </div>
                  <div class='item'>
                    <img src="{{('/assets/img/img48.jpg')}}" alt=''/>
                  </div>
                </div>
                <a class='left carousel-control' href='#carousel-custom5' data-slide='prev'>
                  <span class='glyphicon glyphicon-chevron-left'></span>
                </a>
                <a class='right carousel-control' href='#carousel-custom5' data-slide='next'>
                  <span class='glyphicon glyphicon-chevron-right'></span>
                </a> 
              </div>
            </div> 
            
            <div class="col-lg-8"> 
              <p id="subTituloProjeto"><b>Educação Ambiental nas Escolas</b></p>
                <p class="textoVerde">
                  A presente secretaria realiza projetos em diversas áreas ambientais, buscando uma melhor interação da juventude com a natureza,
                  além de proporcionar momentos de lazer e aprendizagem, com o objetivo de alinhar o conhecimento dos alunos com a prática, 
                  sensibilizando-os sobre a importância da preservação ambiental.
                </p>
              <div class="row">
                <div class="col-lg-3">
                  <img src="{{('/assets/img/img50.jpg')}}"   class="img-responsive" width="100%">
                </div>
                <div class="col-lg-3">
                  <img src="{{('/assets/img/img26.jpg')}}"   class="img-responsive" width="100%">
                </div>
                <div class="col-lg-3">
                  <img src="{{('/assets/img/img47.jpg')}}"   class="img-responsive" width="100%">
                </div>
                <div class="col-lg-3">
                  <img src="{{('/assets/img/img48.jpg')}}"   class="img-responsive" width="100%">
                </div>
              </div>
            </div> 
          </div>
        </div><br>
      </div>
    </section>

    <section class="anime">
      <div class="container-fluid" id="praias"><br/>  
        <div class="container">
          <h2 class="text-left tituloVerde"><b>Nossas Praias</b></h2><br/>
          <div id="myCarousepraias" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
              <div class="item active">
                <div class="row">
                  <div class="col-lg-4" >
                    <div class="">
                      <img src="{{('/assets/img/img150.jpg')}}" alt="Lights" class="zoom" style="height:250px">
                    </div>
                    <div class="caption text-center text-center">
                        <h3><strong>Panaquantira</strong>
                          <a href="https://goo.gl/maps/Xq9fxzu21itmqimr7" target="blank"><span class="glyphicon glyphicon-map-marker" style="text-align:center;font-size:22px"></span></a>
                        </h3><hr>
                        <a href="#" class="btn btn-success btn-sm" data-toggle="modal" data-target="#myModalPraiaPanaquatira">
                          <span class="glyphicon glyphicon-th"></span><br/>
                          Galeria
                        </a>
                      </div>
                  </div>  
                  <div class="col-lg-4" >
                    <div class="">
                        <img src="{{('/assets/img/img97.jpg')}}" alt="Lights"  class="zoom" style="height:250px">
                    </div>
                    <div class="caption text-center">
                        <h3 class="text-center"><strong>Guarapiranga</strong>
                          <a href="https://goo.gl/maps/b9RpmmYo6q8P9qHK7" target="blank"><span class="glyphicon glyphicon-map-marker" style="text-align:center;font-size:22px"></span></a>
                        </h3><hr>
                        <a href="#" class="btn btn-success btn-sm" data-toggle="modal" data-target="#myModalPraiaGuarapiranga">
                          <span class="glyphicon glyphicon-th"></span><br/>
                          Galeria
                        </a>
                    </div><br/>
                  </div>
                  <div class="col-lg-4">
                    <div class="">
                        <img src="{{('/assets/img/img87.jpg')}}" alt="Lights" class="zoom" style="height:250px">
                    </div>
                    <div class="caption text-center">
                      <h3 class="text-center"><strong>Aribual</strong>
                        <a href="https://olhares.com/praia-do-aribual-sao-jose-de-ribamar-ma-foto3655758.html" target="blank"><span class="glyphicon glyphicon-map-marker" style="text-align:center;font-size:22px"></span></a>
                      </h3><hr>
                      <a href="#" class="btn btn-success btn-sm" data-toggle="modal" data-target="#myModalPraiaAribual">
                        <span class="glyphicon glyphicon-th"></span><br/>
                        Galeria
                      </a>
                    </div><br/>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="row">
                  <div class="col-lg-4">
                    <div class="">
                        <img src="{{('/assets/img/img99.jpg')}}" alt="Lights" class="zoom" style="height:250px">
                    </div>
                    <div class="caption text-center">
                      <h3 class="text-center"><strong>Moça</strong>
                        <a href="https://goo.gl/maps/ixAVHoNTtGgBmdi2A" target="blank"><span class="glyphicon glyphicon-map-marker" style="text-align:center;font-size:22px"></span></a>
                      </h3><hr>
                      <a href="#" class="btn btn-success btn-sm" data-toggle="modal" data-target="#myModalPraiaDaMoca">
                        <span class="glyphicon glyphicon-th"></span><br/>
                        Galeria
                      </a>
                    </div><br/>
                  </div>
                  <div class="col-lg-4">
                    <div class="">
                        <img src="{{('/assets/img/img135.jpg')}}" alt="Lights" class="zoom" style="height:250px">
                    </div>
                    <div class="caption text-center">
                      <h3 class="text-center"><strong>Unicamping</strong>
                        <a href="https://goo.gl/maps/V9siy1BAmddwwcFJ8" target="blank"><span class="glyphicon glyphicon-map-marker" style="text-align:center;font-size:22px"></span></a>
                      </h3><hr>
                      <a href="#" class="btn btn-success btn-sm" data-toggle="modal" data-target="#myModalPraiaUnicamping">
                        <span class="glyphicon glyphicon-th"></span><br/>
                        Galeria
                      </a>
                    </div><br/>
                  </div> 
                  <div class="col-lg-4">
                    <div class="">
                        <img src="{{('/assets/img/img107.jpg')}}" alt="Lights" class="zoom" style="height:250px">
                    </div>
                    <div class="caption text-center">
                      <h3 class="text-center"><strong>Ponta da Jaraúna</strong>
                        <a href="https://www.google.com/maps/search/praia+ponta+da+jarauna/@25.5247326,82.3756904,14z/data=!3m1!4b1" target="blank"><span class="glyphicon glyphicon-map-marker" style="text-align:center;font-size:22px"></span></a>
                      </h3><hr>
                      <a href="#" class="btn btn-success btn-sm" data-toggle="modal" data-target="#myModalPraiaDaJarauna">
                        <span class="glyphicon glyphicon-th"></span><br/>
                        Galeria
                      </a>
                    </div><br/>
                  </div>
                </div>
              </div>

              <div class="item">
                <div class="row">
                  <div class="col-lg-4">
                    <div class="">
                        <img src="{{('/assets/img/img104.jpg')}}" alt="Lights" class="zoom" style="height:250px">
                    </div>
                    <div class="caption text-center">
                      <h3 class="text-center"><strong>Boa viagem</strong>
                        <a href="https://goo.gl/maps/CfUbQt2JCy2Drc2U7" target="blank"><span class="glyphicon glyphicon-map-marker" style="text-align:center;font-size:22px"></span></a>
                      </h3><hr>
                      <a href="#" class="btn btn-success btn-sm" data-toggle="modal" data-target="#myModalPraiaDaBoaViagem">
                        <span class="glyphicon glyphicon-th"></span><br/>
                        Galeria
                      </a>
                    </div><br/>
                  </div>
                  <div class="col-lg-4">
                    <div class="">
                        <img src="{{('/assets/img/img111.jpg')}}" alt="Lights" class="zoom" style="height:250px">
                    </div>
                    <div class="caption text-center">
                      <h3 class="text-center"><strong>Jararaí</strong>
                        <a href="https://goo.gl/maps/WtE3CDmgYmaZrG1v7" target="blank"><span class="glyphicon glyphicon-map-marker" style="text-align:center;font-size:22px"></span></a>
                      </h3><hr>
                      <a href="#" class="btn btn-success btn-sm" data-toggle="modal" data-target="#myModalPraiaDoJararai">
                        <span class="glyphicon glyphicon-th"></span><br/>
                        Galeria
                      </a>
                    </div><br/>
                  </div> 
                  <div class="col-lg-4">
                    <div class="">
                        <img src="{{('/assets/img/img117.jpg')}}" alt="Lights" class="zoom" style="height:250px">
                    </div>
                    <div class="caption text-center">
                      <h3 class="text-center"><strong>São Raimundo</strong>
                        <a href="https://goo.gl/maps/3UxqmrEmq2dxKgBE9" target="blank"><span class="glyphicon glyphicon-map-marker" style="text-align:center;font-size:22px"></span></a>
                      </h3><hr>
                      <a href="#" class="btn btn-success btn-sm" data-toggle="modal" data-target="#myModalPraiDoSaoRaimundo">
                        <span class="glyphicon glyphicon-th"></span><br/>
                        Galeria
                      </a>
                    </div><br/>
                  </div> 
                </div>
              </div>

              <div class="item">
                <div class="row">
                  <div class="col-lg-4">
                    <div class="">
                        <img src="{{('/assets/img/img120.jpg')}}" alt="Lights" class="zoom" style="height:250px">
                    </div>
                    <div class="caption text-center">
                      <h3 class="text-center"><strong>Porto da Campina</strong>
                        <a href="https://goo.gl/maps/3UxqmrEmq2dxKgBE9" target="blank"><span class="glyphicon glyphicon-map-marker" style="text-align:center;font-size:22px"></span></a>
                      </h3><hr>
                      <a href="#" class="btn btn-success btn-sm" data-toggle="modal" data-target="#myModalPraiaPortoDaCampina">
                        <span class="glyphicon glyphicon-th"></span><br/>
                        Galeria
                      </a>
                    </div><br/>
                  </div> 
                  <div class="col-lg-4">
                    <div class="">
                        <img src="{{('/assets/img/img123.jpg')}}" alt="Lights" class="zoom" style="height:250px">
                    </div>
                    <div class="caption text-center">
                      <h3 class="text-center"><strong>Porto da Barbosa</strong>
                        <a href="https://goo.gl/maps/3UxqmrEmq2dxKgBE9" target="blank"><span class="glyphicon glyphicon-map-marker" style="text-align:center;font-size:22px"></span></a>
                      </h3><hr>
                      <a href="#" class="btn btn-success btn-sm" data-toggle="modal" data-target="#myModalPraiaPortoDoBarbosa">
                        <span class="glyphicon glyphicon-th"></span><br/>
                        Galeria
                      </a>
                    </div><br/>
                  </div>
                  <div class="col-lg-4">
                    <div class="">
                        <img src="{{('/assets/img/img143.jpg')}}" alt="Lights" class="zoom" style="height:250px">
                    </div>
                    <div class="caption text-center">
                      <h3 class="text-center"><strong>Praia de Banho</strong>
                        <a href="https://goo.gl/maps/ychEkN7ZqTcmE5RK8" target="blank"><span class="glyphicon glyphicon-map-marker" style="text-align:center;font-size:22px"></span></a>
                      </h3><hr>
                      <a href="#" class="btn btn-success btn-sm" data-toggle="modal" data-target="#myModalPraiaDeBanho">
                        <span class="glyphicon glyphicon-th"></span><br/>
                        Galeria
                      </a>
                    </div><br/>
                  </div> 
                </div>
              </div>

              <div class="item">
                <div class="row">
                  <div class="col-lg-4">
                    <div class="">
                        <img src="{{('/assets/img/img131.jpg')}}" alt="Lights" class="zoom" style="height:250px">
                    </div>
                    <div class="caption text-center">
                      <h3 class="text-center"><strong>Caúra</strong>
                        <a href="https://goo.gl/maps/WPeta15vckWcBe3c8" target="blank"><span class="glyphicon glyphicon-map-marker" style="text-align:center;font-size:22px"></span></a>
                      </h3><hr>
                      <a href="#" class="btn btn-success btn-sm" data-toggle="modal" data-target="#myModalPraiaDoCaura">
                        <span class="glyphicon glyphicon-th"></span><br/>
                        Galeria
                      </a>
                    </div><br/>
                  </div> 
                  <div class="col-lg-4">
                    <div class="">
                        <img src="{{('/assets/img/img127.jpg')}}" alt="Lights" class="zoom" style="height:250px">
                    </div>
                    <div class="caption text-center">
                      <h3 class="text-center"><strong>Ponta Verde</strong>
                        <a href="https://goo.gl/maps/pzax2dV4RMcWwEM8A" target="blank"><span class="glyphicon glyphicon-map-marker" style="text-align:center;font-size:22px"></span></a>
                      </h3><hr>
                      <a href="#" class="btn btn-success btn-sm" data-toggle="modal" data-target="#myModalPraiaDaPontaVerde">
                        <span class="glyphicon glyphicon-th"></span><br/>
                        Galeria
                      </a>
                    </div><br/>
                  </div> 
                  <div class="col-lg-4">
                    <div class="">
                        <img src="{{('/assets/img/img139.jpg')}}" alt="Lights" class="zoom" style="height:250px">
                    </div>
                    <div class="caption text-center">
                      <h3 class="text-center"><strong>Ponta da Madalena</strong>
                        <a href="https://goo.gl/maps/MkHiepZHrxdAGMft6" target="blank"><span class="glyphicon glyphicon-map-marker" style="text-align:center;font-size:22px"></span></a>
                      </h3><hr>
                      <a href="#" class="btn btn-success btn-sm" data-toggle="modal" data-target="#myModalPraiaPontaDaMadalena">
                        <span class="glyphicon glyphicon-th"></span><br/>
                        Galeria
                      </a>
                    </div><br/>
                  </div>  
                </div>
              </div>

              <div class="item">
                <div class="row">
                  <div class="col-lg-4">
                    <div class="">
                        <img src="{{('/assets/img/img152.jpg')}}" alt="Lights" class="zoom" style="height:250px">
                    </div>
                    <div class="caption text-center">
                      <h3 class="text-center"><strong>Meio</strong>
                        <a href="https://goo.gl/maps/6RMkGETh2oQEmBqt5" target="blank"><span class="glyphicon glyphicon-map-marker" style="text-align:center;font-size:22px"></span></a>
                      </h3><hr>
                      <a href="#" class="btn btn-success btn-sm" data-toggle="modal" data-target="#myModalPraiaMeio">
                        <span class="glyphicon glyphicon-th"></span><br/>
                        Galeria
                      </a>
                    </div><br/>
                  </div>  
                  <div class="col-lg-4">
                    <div class="">
                        <img src="{{('/assets/img/img147.jpg')}}" alt="Lights" class="zoom" style="height:250px">
                    </div>
                    <div class="caption text-center">
                      <h3 class="text-center"><strong>Araçagy</strong>
                        <a href="https://goo.gl/maps/Zd4iGWMmQCubuDmu6" target="blank"><span class="glyphicon glyphicon-map-marker" style="text-align:center;font-size:22px"></span></a>
                      </h3><hr>
                      <a href="#" class="btn btn-success btn-sm" data-toggle="modal" data-target="#myModalPraiaAracagy">
                        <span class="glyphicon glyphicon-th"></span><br/>
                        Galeria
                      </a>
                    </div><br/>
                  </div>  
                </div>
              </div>
              <!-- Indicators -->
              <ol class="carousel-indicators">
                <li data-target="#myCarousepraias" style="background-color:#77cc6d;" data-slide-to="0" class="active"></li>
                <li data-target="#myCarousepraias" style="background-color:#77cc6d;" data-slide-to="1"></li>
                <li data-target="#myCarousepraias" style="background-color:#77cc6d;" data-slide-to="2"></li>
                <li data-target="#myCarousepraias" style="background-color:#77cc6d;" data-slide-to="3"></li>
                <li data-target="#myCarousepraias" style="background-color:#77cc6d;" data-slide-to="4"></li>
                <li data-target="#myCarousepraias" style="background-color:#77cc6d;" data-slide-to="5"></li>
              </ol><br/><br/><br/>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!--a seciotn abaixo exibirá os modais referente a cada praia-->
    <section>
      <div class="modal fade" id="myModalPraiaPanaquatira" role="dialog">
          <div class="modal-dialog modal-lg">
            <div class="modal-content">
              <div class="modal-header"><br/><br/>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title text-center">Praia do Panaquantira</h4>
              </div>
              <div class="modal-body">
                <!--inicio carrossel-->
                <div id="myCarouselPanaquatira" class="carousel slide" data-ride="carousel" >
                  <!-- Indicators -->
                    <ol class="carousel-indicators">
                      <li data-target="#myCarouselPanaquatira" data-slide-to="0" class="active"></li>
                      <li data-target="#myCarouselPanaquatira" data-slide-to="1"></li>
                    </ol>
                      <!-- Wrapper for slides -->
                    <div class="carousel-inner">
                      <div class="item active">
                        <div class="col-lg-12">                                       
                          <img src="{{('/assets/img/img150.jpg')}}" alt="Lights" class="img-responsive" style="height: 500px">
                        </div>  
                      </div>
                      <div class="item">
                        <div class="col-lg-12">                                       
                          <img src="{{('/assets/img/img151.jpg')}}" alt="Lights" class="img-responsive" style="height: 500px">
                        </div>      
                      </div>
                    </div>
                    <!-- Left and right controls -->
                    <a class="left carousel-control" href="#myCarouselPanaquatira" data-slide="prev">
                      <span class="glyphicon glyphicon-chevron-left"></span>
                      <span class="sr-only">Previous</span>
                    </a>
                    <a class="right carousel-control" href="#myCarouselPanaquatira" data-slide="next">
                      <span class="glyphicon glyphicon-chevron-right"></span>
                      <span class="sr-only">Next</span>
                    </a>
                  </div>
                  <!--fim carrossel-->
              </div>
            </div>
          </div>
        </div>

        <div class="modal fade" id="myModalPraiaMeio" role="dialog">
          <div class="modal-dialog modal-lg">
            <div class="modal-content">
              <div class="modal-header"><br/><br/>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title text-center">Praia do Meio</h4>
              </div>
              <div class="modal-body">
                <!--inicio carrossel-->
                <div id="myCarouselMeio" class="carousel slide" data-ride="carousel" >
                  <!-- Indicators -->
                    <ol class="carousel-indicators">
                      <li data-target="#myCarouselMeio" data-slide-to="0" class="active"></li>
                      <li data-target="#myCarouselMeio" data-slide-to="1"></li>
                    </ol>
                      <!-- Wrapper for slides -->
                    <div class="carousel-inner">
                      <div class="item active">
                        <div class="col-lg-12">                                       
                          <img src="{{('/assets/img/img152.jpg')}}" alt="Lights" class="img-responsive" style="height: 500px">
                        </div>  
                      </div>
                      <div class="item">
                        <div class="col-lg-12">                                       
                          <img src="{{('/assets/img/img153.jpg')}}" alt="Lights" class="img-responsive" style="height: 500px">
                        </div>      
                      </div>
                    </div>
                    <!-- Left and right controls -->
                    <a class="left carousel-control" href="#myCarouselMeio" data-slide="prev">
                      <span class="glyphicon glyphicon-chevron-left"></span>
                      <span class="sr-only">Previous</span>
                    </a>
                    <a class="right carousel-control" href="#myCarouselMeio" data-slide="next">
                      <span class="glyphicon glyphicon-chevron-right"></span>
                      <span class="sr-only">Next</span>
                    </a>
                  </div>
                  <!--fim carrossel-->
              </div>
            </div>
          </div>
        </div>


      <div class="modal fade" id="myModalPraiaAracagy" role="dialog">
        <div class="modal-dialog modal-lg">
          <div class="modal-content">
            <div class="modal-header"><br/><br/>
              <button type="button" class="close" data-dismiss="modal">&times;</button>
              <h4 class="modal-title text-center">Praia do Araçagy</h4>
            </div>
            <div class="modal-body">
              <!--inicio carrossel-->
              <div id="myCarouselAracagy" class="carousel slide" data-ride="carousel" >
                <!-- Indicators -->
                  <ol class="carousel-indicators">
                    <li data-target="#myCarouselAracagy" data-slide-to="0" class="active"></li>
                    <li data-target="#myCarouselAracagy" data-slide-to="1"></li>
                  </ol>
                    <!-- Wrapper for slides -->
                  <div class="carousel-inner">
                    <div class="item active">
                      <div class="col-lg-12">                                       
                        <img src="{{('/assets/img/img147.jpg')}}" alt="Lights" class="img-responsive" style="height: 500px">
                      </div>  
                    </div>
                    <div class="item">
                      <div class="col-lg-12">                                       
                        <img src="{{('/assets/img/img148.jpg')}}" alt="Lights" class="img-responsive" style="height: 500px">
                      </div>      
                    </div>
                  </div>
                  <!-- Left and right controls -->
                  <a class="left carousel-control" href="#myCarouselAracagy" data-slide="prev">
                    <span class="glyphicon glyphicon-chevron-left"></span>
                    <span class="sr-only">Previous</span>
                  </a>
                  <a class="right carousel-control" href="#myCarouselAracagy" data-slide="next">
                    <span class="glyphicon glyphicon-chevron-right"></span>
                    <span class="sr-only">Next</span>
                  </a>
                </div>
                <!--fim carrossel-->
            </div>
          </div>
        </div>
      </div>

      <div class="modal fade" id="myModalPraiaGuarapiranga" role="dialog">
        <div class="modal-dialog modal-lg">
          <div class="modal-content">
            <div class="modal-header"><br/><br/>
              <button type="button" class="close" data-dismiss="modal">&times;</button>
              <h4 class="modal-title text-center">Praia de Guarapiranga</h4>
            </div>
            <div class="modal-body">
              <!--inicio carrossel-->
              <div id="myCarouselGuarapiranga" class="carousel slide" data-ride="carousel" >
                <!-- Indicators -->
                  <ol class="carousel-indicators">
                    <li data-target="#myCarouselGuarapiranga" data-slide-to="0" class="active"></li>
                    <li data-target="#myCarouselGuarapiranga" data-slide-to="1"></li>
                  </ol>
                    <!-- Wrapper for slides -->
                  <div class="carousel-inner">
                    <div class="item active">
                      <div class="col-lg-12">                                       
                        <img src="{{('/assets/img/img95.jpg')}}" alt="Lights" class="img-responsive" style="height: 500px">
                      </div>  
                    </div>
                    <div class="item">
                      <div class="col-lg-12">                                       
                        <img src="{{('/assets/img/img97.jpg')}}" alt="Lights" class="img-responsive" style="height: 500px">
                      </div>      
                    </div>
                  </div>
                  <!-- Left and right controls -->
                  <a class="left carousel-control" href="#myCarouselGuarapiranga" data-slide="prev">
                    <span class="glyphicon glyphicon-chevron-left"></span>
                    <span class="sr-only">Previous</span>
                  </a>
                  <a class="right carousel-control" href="#myCarouselGuarapiranga" data-slide="next">
                    <span class="glyphicon glyphicon-chevron-right"></span>
                    <span class="sr-only">Next</span>
                  </a>
                </div>
                <!--fim carrossel-->
            </div>
          </div>
        </div>
      </div>

      <div class="modal fade" id="myModalPraiaAribual" role="dialog">
        <div class="modal-dialog modal-lg">
          <div class="modal-content">
            <div class="modal-header"><br/><br/>
              <button type="button" class="close" data-dismiss="modal">&times;</button>
              <h4 class="modal-title text-center">Praia do Aribual</h4>
            </div>
            <div class="modal-body">
              <!--inicio carrossel-->
              <div id="myCarouselAribual" class="carousel slide" data-ride="carousel" >
                <!-- Indicators -->
                  <ol class="carousel-indicators">
                    <li data-target="#myCarouselAribual" data-slide-to="0" class="active"></li>
                    <li data-target="#myCarouselAribual" data-slide-to="1"></li>
                  </ol>
                    <!-- Wrapper for slides -->
                  <div class="carousel-inner">
                    <div class="item active">
                      <div class="col-lg-12">                                       
                        <img src="{{('/assets/img/img87.jpg')}}" alt="Lights" class="img-responsive" style="height: 500px">
                      </div> 
                    </div>
                    <div class="item">
                      <div class="col-lg-12">                                       
                        <img src="{{('/assets/img/img88.jpg')}}" alt="Lights" class="img-responsive" style="height: 500px">
                      </div>      
                    </div>
                  </div>
                  <!-- Left and right controls -->
                  <a class="left carousel-control" href="#myCarouselAribual" data-slide="prev">
                    <span class="glyphicon glyphicon-chevron-left"></span>
                    <span class="sr-only">Previous</span>
                  </a>
                  <a class="right carousel-control" href="#myCarouselAribual" data-slide="next">
                    <span class="glyphicon glyphicon-chevron-right"></span>
                    <span class="sr-only">Next</span>
                  </a>
                </div>
                <!--fim carrossel-->
            </div>
          </div>
        </div>
      </div>

      <div class="modal fade" id="myModalPraiaDoCaura" role="dialog">
        <div class="modal-dialog modal-lg">
          <div class="modal-content">
            <div class="modal-header"><br/><br/>
              <button type="button" class="close" data-dismiss="modal">&times;</button>
              <h4 class="modal-title text-center">Praia do Caúra</h4>
            </div>
            <div class="modal-body">
              <!--inicio carrossel-->
              <div id="myCarouselPraiaDoCaura" class="carousel slide" data-ride="carousel" >
                <!-- Indicators -->
                  <ol class="carousel-indicators">
                    <li data-target="#myCarouselPraiaDoCaura" data-slide-to="0" class="active"></li>
                    <li data-target="#myCarouselPraiaDoCaura" data-slide-to="1"></li>
                  </ol>
                    <!-- Wrapper for slides -->
                  <div class="carousel-inner">
                    <div class="item active">
                      <div class="col-lg-12">                                       
                        <img src="{{('/assets/img/img131.jpg')}}" alt="Lights" class="img-responsive" style="height: 500px">
                      </div>  
                    </div>
                    <div class="item">
                      <div class="col-lg-12">                                       
                        <img src="{{('/assets/img/img133.jpg')}}" alt="Lights" class="img-responsive" style="height: 500px">
                      </div>      
                    </div>
                  </div>
                  <!-- Left and right controls -->
                  <a class="left carousel-control" href="#myCarouselPraiaDoCaura" data-slide="prev">
                    <span class="glyphicon glyphicon-chevron-left"></span>
                    <span class="sr-only">Previous</span>
                  </a>
                  <a class="right carousel-control" href="#myCarouselPraiaDoCaura" data-slide="next">
                    <span class="glyphicon glyphicon-chevron-right"></span>
                    <span class="sr-only">Next</span>
                  </a>
                </div>
                <!--fim carrossel-->
            </div>
          </div>
        </div>
      </div>

      <div class="modal fade" id="myModalPraiaDaPontaVerde" role="dialog">
        <div class="modal-dialog modal-lg">
          <div class="modal-content">
            <div class="modal-header"><br/><br/>
              <button type="button" class="close" data-dismiss="modal">&times;</button>
              <h4 class="modal-title text-center">Praia da verde</h4>
            </div>
            <div class="modal-body">
              <!--inicio carrossel-->
              <div id="myCarouselPontaVerde" class="carousel slide" data-ride="carousel" >
                <!-- Indicators -->
                  <ol class="carousel-indicators">
                    <li data-target="#myCarouselPontaVerde" data-slide-to="0" class="active"></li>
                    <li data-target="#myCarouselPontaVerde" data-slide-to="1"></li>
                  </ol>
                    <!-- Wrapper for slides -->
                  <div class="carousel-inner">
                    <div class="item active">
                      <div class="col-lg-12">                                       
                        <img src="{{('/assets/img/img127.jpg')}}" alt="Lights" class="img-responsive" style="height: 500px">
                      </div>  
                    </div>
                    <div class="item">
                      <div class="col-lg-12">                                       
                        <img src="{{('/assets/img/img130.jpg')}}" alt="Lights" class="img-responsive" style="height: 500px">
                      </div>      
                    </div>
                  </div>
                  <!-- Left and right controls -->
                  <a class="left carousel-control" href="#myCarouselPontaVerde" data-slide="prev">
                    <span class="glyphicon glyphicon-chevron-left"></span>
                    <span class="sr-only">Previous</span>
                  </a>
                  <a class="right carousel-control" href="#myCarouselPontaVerde" data-slide="next">
                    <span class="glyphicon glyphicon-chevron-right"></span>
                    <span class="sr-only">Next</span>
                  </a>
                </div>
                <!--fim carrossel-->
            </div>
          </div>
        </div>
      </div>

      <div class="modal fade" id="myModalPraiaPortoDoBarbosa" role="dialog">
        <div class="modal-dialog modal-lg">
          <div class="modal-content">
            <div class="modal-header"><br/><br/>
              <button type="button" class="close" data-dismiss="modal">&times;</button>
              <h4 class="modal-title text-center">Praia Porto do Barbosa</h4>
            </div>
            <div class="modal-body">
              <!--inicio carrossel-->
              <div id="myCarouselPortoDoBarbosa" class="carousel slide" data-ride="carousel" >
                <!-- Indicators -->
                  <ol class="carousel-indicators">
                    <li data-target="#myCarouselPortoDoBarbosa" data-slide-to="0" class="active"></li>
                    <li data-target="#myCarouselPortoDoBarbosa" data-slide-to="1"></li>
                  </ol>
                    <!-- Wrapper for slides -->
                  <div class="carousel-inner">
                    <div class="item active">
                      <div class="col-lg-12">                                       
                        <img src="{{('/assets/img/img123.jpg')}}" alt="Lights" class="img-responsive" style="height: 500px">
                      </div>  
                    </div>
                    <div class="item">
                      <div class="col-lg-12">                                       
                        <img src="{{('/assets/img/img126.jpg')}}" alt="Lights" class="img-responsive" style="height: 500px">
                      </div>      
                    </div>
                  </div>
                  <!-- Left and right controls -->
                  <a class="left carousel-control" href="#myCarouselPortoDoBarbosa" data-slide="prev">
                    <span class="glyphicon glyphicon-chevron-left"></span>
                    <span class="sr-only">Previous</span>
                  </a>
                  <a class="right carousel-control" href="#myCarouselPortoDoBarbosa" data-slide="next">
                    <span class="glyphicon glyphicon-chevron-right"></span>
                    <span class="sr-only">Next</span>
                  </a>
                </div>
                <!--fim carrossel-->
            </div>
          </div>
        </div>
      </div>

      <div class="modal fade" id="myModalPortoDaCampina" role="dialog">
        <div class="modal-dialog modal-lg">
          <div class="modal-content">
            <div class="modal-header"><br/><br/>
              <button type="button" class="close" data-dismiss="modal">&times;</button>
              <h4 class="modal-title text-center">Porto da Campina</h4>
            </div>
            <div class="modal-body">
              <!--inicio carrossel-->
              <div id="myCarouselPortoDaCampina" class="carousel slide" data-ride="carousel" >
                <!-- Indicators -->
                  <ol class="carousel-indicators">
                    <li data-target="#myCarouselPortoDaCampina" data-slide-to="0" class="active"></li>
                    <li data-target="#myCarouselPortoDaCampina" data-slide-to="1"></li>
                    <li data-target="#myCarouselPortoDaCampina" data-slide-to="2"></li>
                    <li data-target="#myCarouselPortoDaCampina" data-slide-to="3"></li>
                  </ol>
                    <!-- Wrapper for slides -->
                  <div class="carousel-inner">
                    <div class="item active">
                      <div class="col-lg-12">                                       
                        <img src="{{('/assets/img/img120.jpg')}}" alt="Lights" class="img-responsive" style="height: 500px">
                      </div>  
                    </div>
                    <div class="item">
                      <div class="col-lg-12">                                       
                        <img src="{{('/assets/img/img122.jpg')}}" alt="Lights" class="img-responsive" style="height: 500px">
                      </div>      
                    </div>
                    <div class="item">
                      <div class="col-lg-12">                                       
                        <img src="{{('/assets/img/img121.jpg')}}" alt="Lights" class="img-responsive" style="height: 500px">
                      </div>      
                    </div>
                    <div class="item">
                      <div class="col-lg-12">                                       
                        <img src="{{('/assets/img/img119.jpg')}}" alt="Lights" class="img-responsive" style="height: 500px">
                      </div>      
                    </div>
                  </div>
                  <!-- Left and right controls -->
                  <a class="left carousel-control" href="#myCarouselPortoDaCampina" data-slide="prev">
                    <span class="glyphicon glyphicon-chevron-left"></span>
                    <span class="sr-only">Previous</span>
                  </a>
                  <a class="right carousel-control" href="#myCarouselPortoDaCampina" data-slide="next">
                    <span class="glyphicon glyphicon-chevron-right"></span>
                    <span class="sr-only">Next</span>
                  </a>
                </div>
                <!--fim carrossel-->
            </div>
          </div>
        </div>
      </div>

      <div class="modal fade" id="myModalPraiDoSaoRaimundo" role="dialog">
        <div class="modal-dialog modal-lg">
          <div class="modal-content">
            <div class="modal-header"><br/><br/>
              <button type="button" class="close" data-dismiss="modal">&times;</button>
              <h4 class="modal-title text-center">Praia do São Raimundo</h4>
            </div>
            <div class="modal-body">
              <!--inicio carrossel-->
              <div id="myCarouselSaoRaimundo" class="carousel slide" data-ride="carousel" >
                <!-- Indicators -->
                  <ol class="carousel-indicators">
                    <li data-target="#myCarouselSaoRaimundo" data-slide-to="0" class="active"></li>
                    <li data-target="#myCarouselSaoRaimundo" data-slide-to="1"></li>
                  </ol>
                    <!-- Wrapper for slides -->
                  <div class="carousel-inner">
                    <div class="item active">
                      <div class="col-lg-12">                                       
                        <img src="{{('/assets/img/img115.jpg')}}" alt="Lights" class="img-responsive" style="height: 500px">
                      </div>  
                    </div>
                    <div class="item">
                      <div class="col-lg-12">                                       
                        <img src="{{('/assets/img/img118.jpg')}}" alt="Lights" class="img-responsive" style="height: 500px">
                      </div>      
                    </div>
                  </div>
                  <!-- Left and right controls -->
                  <a class="left carousel-control" href="#myCarouselSaoRaimundo" data-slide="prev">
                    <span class="glyphicon glyphicon-chevron-left"></span>
                    <span class="sr-only">Previous</span>
                  </a>
                  <a class="right carousel-control" href="#myCarouselSaoRaimundo" data-slide="next">
                    <span class="glyphicon glyphicon-chevron-right"></span>
                    <span class="sr-only">Next</span>
                  </a>
                </div>
                <!--fim carrossel-->
            </div>
          </div>
        </div>
      </div>

      <div class="modal fade" id="myModalPraiaDoJararai" role="dialog">
        <div class="modal-dialog modal-lg">
          <div class="modal-content">
            <div class="modal-header"><br/><br/>
              <button type="button" class="close" data-dismiss="modal">&times;</button>
              <h4 class="modal-title text-center">Praia do Jararaí</h4>
            </div>
            <div class="modal-body">
              <!--inicio carrossel-->
              <div id="myCarouselJararai" class="carousel slide" data-ride="carousel" >
                <!-- Indicators -->
                  <ol class="carousel-indicators">
                    <li data-target="#myCarouselJararai" data-slide-to="0" class="active"></li>
                    <li data-target="#myCarouselJararai" data-slide-to="1"></li>
                  </ol>
                    <!-- Wrapper for slides -->
                  <div class="carousel-inner">
                    <div class="item active">
                      <div class="col-lg-12">                                       
                        <img src="{{('/assets/img/img111.jpg')}}" alt="Lights" class="img-responsive" style="height: 500px">
                      </div>  
                    </div>
                    <div class="item">
                      <div class="col-lg-12">                                       
                        <img src="{{('/assets/img/img112.jpg')}}" alt="Lights" class="img-responsive" style="height: 500px">
                      </div>      
                    </div>
                  </div>
                  <!-- Left and right controls -->
                  <a class="left carousel-control" href="#myCarouselJararai" data-slide="prev">
                    <span class="glyphicon glyphicon-chevron-left"></span>
                    <span class="sr-only">Previous</span>
                  </a>
                  <a class="right carousel-control" href="#myCarouselJararai" data-slide="next">
                    <span class="glyphicon glyphicon-chevron-right"></span>
                    <span class="sr-only">Next</span>
                  </a>
                </div>
                <!--fim carrossel-->
            </div>
          </div>
        </div>
      </div>

      <div class="modal fade" id="myModalPraiaDaJarauna" role="dialog">
        <div class="modal-dialog modal-lg">
          <div class="modal-content">
            <div class="modal-header"><br/><br/>
              <button type="button" class="close" data-dismiss="modal">&times;</button>
              <h4 class="modal-title text-center">Praia Ponta da Jaraúna</h4>
            </div>
            <div class="modal-body">
              <!--inicio carrossel-->
              <div id="myCarouselJarauna" class="carousel slide" data-ride="carousel" >
                <!-- Indicators -->
                  <ol class="carousel-indicators">
                    <li data-target="#myCarouselJarauna" data-slide-to="0" class="active"></li>
                    <li data-target="#myCarouselJarauna" data-slide-to="1"></li>
                  </ol>
                    <!-- Wrapper for slides -->
                  <div class="carousel-inner">
                    <div class="item active">
                      <div class="col-lg-12">                                       
                        <img src="{{('/assets/img/img107.jpg')}}" alt="Lights" class="img-responsive" style="height: 500px">
                      </div>  
                    </div>
                    <div class="item">
                      <div class="col-lg-12">                                       
                        <img src="{{('/assets/img/img110.jpg')}}" alt="Lights" class="img-responsive" style="height: 500px">
                      </div>      
                    </div>
                  </div>
                  <!-- Left and right controls -->
                  <a class="left carousel-control" href="#myCarouselJarauna" data-slide="prev">
                    <span class="glyphicon glyphicon-chevron-left"></span>
                    <span class="sr-only">Previous</span>
                  </a>
                  <a class="right carousel-control" href="#myCarouselJarauna" data-slide="next">
                    <span class="glyphicon glyphicon-chevron-right"></span>
                    <span class="sr-only">Next</span>
                  </a>
                </div>
                <!--fim carrossel-->
            </div>
          </div>
        </div>
      </div>

      <div class="modal fade" id="myModalPraiaDaBoaViagem" role="dialog">
        <div class="modal-dialog modal-lg">
          <div class="modal-content">
            <div class="modal-header"><br/><br/>
              <button type="button" class="close" data-dismiss="modal">&times;</button>
              <h4 class="modal-title text-center">Praia da Boa Viagem</h4>
            </div>
            <div class="modal-body">
              <!--inicio carrossel-->
              <div id="myCarouselBoaViagem" class="carousel slide" data-ride="carousel" >
                <!-- Indicators -->
                  <ol class="carousel-indicators">
                    <li data-target="#myCarouselBoaViagem" data-slide-to="0" class="active"></li>
                    <li data-target="#myCarouselBoaViagem" data-slide-to="1"></li>
                  </ol>
                    <!-- Wrapper for slides -->
                  <div class="carousel-inner">
                    <div class="item active">
                      <div class="col-lg-12">                                       
                        <img src="{{('/assets/img/img104.jpg')}}" alt="Lights" class="img-responsive" style="height: 500px">
                      </div>  
                    </div>
                    <div class="item">
                      <div class="col-lg-12">                                       
                        <img src="{{('/assets/img/img106.jpg')}}" alt="Lights" class="img-responsive" style="height: 500px">
                      </div>      
                    </div>
                  </div>
                  <!-- Left and right controls -->
                  <a class="left carousel-control" href="#myCarouselBoaViagem" data-slide="prev">
                    <span class="glyphicon glyphicon-chevron-left"></span>
                    <span class="sr-only">Previous</span>
                  </a>
                  <a class="right carousel-control" href="#myCarouselBoaViagem" data-slide="next">
                    <span class="glyphicon glyphicon-chevron-right"></span>
                    <span class="sr-only">Next</span>
                  </a>
                </div>
                <!--fim carrossel-->
            </div>
          </div>
        </div>
      </div>

      <div class="modal fade" id="myModalPraiaDaMoca" role="dialog">
        <div class="modal-dialog modal-lg">
          <div class="modal-content">
            <div class="modal-header"><br/><br/>
              <button type="button" class="close" data-dismiss="modal">&times;</button>
              <h4 class="modal-title text-center">Praia da Moça</h4>
            </div>
            <div class="modal-body">
              <!--inicio carrossel-->
              <div id="myCarouselMoca" class="carousel slide" data-ride="carousel" >
                <!-- Indicators -->
                  <ol class="carousel-indicators">
                    <li data-target="#myCarouselMoca" data-slide-to="0" class="active"></li>
                    <li data-target="#myCarouselMoca" data-slide-to="1"></li>
                  </ol>
                    <!-- Wrapper for slides -->
                  <div class="carousel-inner">
                    <div class="item active">
                      <div class="col-lg-12">                                       
                        <img src="{{('/assets/img/img100.jpg')}}" alt="Lights" class="img-responsive" style="height: 500px">
                      </div>      
                    </div>
                    <div class="item">
                      <div class="col-lg-12">                                       
                        <img src="{{('/assets/img/img102.jpg')}}" alt="Lights" class="img-responsive" style="height: 500px">
                      </div>      
                    </div>
                  </div>
                  <!-- Left and right controls -->
                  <a class="left carousel-control" href="#myCarouselMoca" data-slide="prev">
                    <span class="glyphicon glyphicon-chevron-left"></span>
                    <span class="sr-only">Previous</span>
                  </a>
                  <a class="right carousel-control" href="#myCarouselMoca" data-slide="next">
                    <span class="glyphicon glyphicon-chevron-right"></span>
                    <span class="sr-only">Next</span>
                  </a>
                </div>
                <!--fim carrossel-->
            </div>
          </div>
        </div>
      </div>

      <div class="modal fade" id="myModalPraiaPortoDaCampina" role="dialog">
        <div class="modal-dialog modal-lg">
          <div class="modal-content">
            <div class="modal-header"><br/><br/>
              <button type="button" class="close" data-dismiss="modal">&times;</button>
              <h4 class="modal-title text-center">Porto da Campina</h4>
            </div>
            <div class="modal-body">
              <!--inicio carrossel-->
              <div id="myCarouselCampina" class="carousel slide" data-ride="carousel" >
                <!-- Indicators -->
                  <ol class="carousel-indicators">
                    <li data-target="#myCarouselCampina" data-slide-to="0" class="active"></li>
                    <li data-target="#myCarouselCampina" data-slide-to="1"></li>
                  </ol>
                    <!-- Wrapper for slides -->
                  <div class="carousel-inner">
                    <div class="item active">
                      <div class="col-lg-12">                                       
                        <img src="{{('/assets/img/img91.jpg')}}" alt="Lights" class="img-responsive" style="height: 500px">
                      </div>  
                    </div>
                    <div class="item">
                      <div class="col-lg-12">                                       
                        <img src="{{('/assets/img/img92.jpg')}}" alt="Lights" class="img-responsive" style="height: 500px">
                      </div>      
                    </div>
                  </div>
                  <!-- Left and right controls -->
                  <a class="left carousel-control" href="#myCarouselCampina" data-slide="prev">
                    <span class="glyphicon glyphicon-chevron-left"></span>
                    <span class="sr-only">Previous</span>
                  </a>
                  <a class="right carousel-control" href="#myCarouselCampina" data-slide="next">
                    <span class="glyphicon glyphicon-chevron-right"></span>
                    <span class="sr-only">Next</span>
                  </a>
                </div>
                <!--fim carrossel-->
            </div>
          </div>
        </div>
      </div>

      <div class="modal fade" id="myModalPraiaUnicamping" role="dialog">
        <div class="modal-dialog modal-lg">
          <div class="modal-content">
            <div class="modal-header"><br/><br/>
              <button type="button" class="close" data-dismiss="modal">&times;</button>
              <h4 class="modal-title text-center">Praia da Unicamping</h4>
            </div>
            <div class="modal-body">
              <!--inicio carrossel-->
              <div id="myCarouselUnicamping" class="carousel slide" data-ride="carousel" >
                <!-- Indicators -->
                  <ol class="carousel-indicators">
                    <li data-target="#myCarouselUnicamping" data-slide-to="0" class="active"></li>
                    <li data-target="#myCarouselUnicamping" data-slide-to="1"></li>
                  </ol>
                    <!-- Wrapper for slides -->
                  <div class="carousel-inner">
                    <div class="item active">
                      <div class="col-lg-12">                                       
                        <img src="{{('/assets/img/img135.jpg')}}" alt="Lights" class="img-responsive" style="height: 500px">
                      </div>  
                    </div>
                    <div class="item">
                      <div class="col-lg-12">                                       
                        <img src="{{('/assets/img/img138.jpg')}}" alt="Lights" class="img-responsive" style="height: 500px">
                      </div>      
                    </div>
                  </div>
                  <!-- Left and right controls -->
                  <a class="left carousel-control" href="#myCarouselUnicamping" data-slide="prev">
                    <span class="glyphicon glyphicon-chevron-left"></span>
                    <span class="sr-only">Previous</span>
                  </a>
                  <a class="right carousel-control" href="#myCarouselUnicamping" data-slide="next">
                    <span class="glyphicon glyphicon-chevron-right"></span>
                    <span class="sr-only">Next</span>
                  </a>
                </div>
                <!--fim carrossel-->
            </div>
          </div>
        </div>
      </div>

      <div class="modal fade" id="myModalPraiaPontaDaMadalena" role="dialog">
        <div class="modal-dialog modal-lg">
          <div class="modal-content">
            <div class="modal-header"><br/><br/>
              <button type="button" class="close" data-dismiss="modal">&times;</button>
              <h4 class="modal-title text-center">Porta da Madalena</h4>
            </div>
            <div class="modal-body">
              <!--inicio carrossel-->
              <div id="myCarouselMadalena" class="carousel slide" data-ride="carousel" >
                <!-- Indicators -->
                  <ol class="carousel-indicators">
                    <li data-target="#myCarouselMadalena" data-slide-to="0" class="active"></li>
                    <li data-target="#myCarouselMadalena" data-slide-to="1"></li>
                  </ol>
                    <!-- Wrapper for slides -->
                  <div class="carousel-inner">
                    <div class="item active">
                      <div class="col-lg-12">                                       
                        <img src="{{('/assets/img/img139.jpg')}}" alt="Lights" class="img-responsive" style="height: 500px">
                      </div>  
                    </div>
                    <div class="item">
                      <div class="col-lg-12">                                       
                        <img src="{{('/assets/img/img140.jpg')}}" alt="Lights" class="img-responsive" style="height: 500px">
                      </div>      
                    </div>
                  </div>
                  <!-- Left and right controls -->
                  <a class="left carousel-control" href="#myCarouselMadalena" data-slide="prev">
                    <span class="glyphicon glyphicon-chevron-left"></span>
                    <span class="sr-only">Previous</span>
                  </a>
                  <a class="right carousel-control" href="#myCarouselMadalena" data-slide="next">
                    <span class="glyphicon glyphicon-chevron-right"></span>
                    <span class="sr-only">Next</span>
                  </a>
                </div>
                <!--fim carrossel-->
            </div>
          </div>
        </div>
      </div>

      <div class="modal fade" id="myModalPraiaDeBanho" role="dialog">
        <div class="modal-dialog modal-lg">
          <div class="modal-content">
            <div class="modal-header"><br/><br/>
              <button type="button" class="close" data-dismiss="modal">&times;</button>
              <h4 class="modal-title text-center">Praia de Banho</h4>
            </div>
            <div class="modal-body">
              <!--inicio carrossel-->
              <div id="myCarouselBanho" class="carousel slide" data-ride="carousel" >
                <!-- Indicators -->
                  <ol class="carousel-indicators">
                    <li data-target="#myCarouselBanho" data-slide-to="0" class="active"></li>
                    <li data-target="#myCarouselBanho" data-slide-to="1"></li>
                  </ol>
                    <!-- Wrapper for slides -->
                  <div class="carousel-inner">
                    <div class="item active">
                      <div class="col-lg-12">                                       
                        <img src="{{('/assets/img/img143.jpg')}}" alt="Lights" class="img-responsive" style="height: 500px">
                      </div>  
                    </div>
                    <div class="item">
                      <div class="col-lg-12">                                       
                        <img src="{{('/assets/img/img144.jpg')}}" alt="Lights" class="img-responsive" style="height: 500px">
                      </div>      
                    </div>
                  </div>
                  <!-- Left and right controls -->
                  <a class="left carousel-control" href="#myCarouselBanho" data-slide="prev">
                    <span class="glyphicon glyphicon-chevron-left"></span>
                    <span class="sr-only">Previous</span>
                  </a>
                  <a class="right carousel-control" href="#myCarouselBanho" data-slide="next">
                    <span class="glyphicon glyphicon-chevron-right"></span>
                    <span class="sr-only">Next</span>
                  </a>
                </div>
                <!--fim carrossel-->
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="anime">
      <div class="container-fluid" id="curiosidades">   
        <div class="container"> 
          <div class="row">
            <h2 class="text-left tituloVerde"><b>Curiosidades</b></h2><br>
            <ul class="nav nav-tabs">
              <li class="active"><a data-toggle="tab" href="#camboas">Camboas</a></li>
              <li><a data-toggle="tab" href="#cacimbas">Cacimbas</a></li>
              <li><a data-toggle="tab" href="#falesias">Falésias</a></li>
              <li><a data-toggle="tab" href="#corredorDeAves">Corredor das Aves Migratórias</a></li>
              <li><a data-toggle="tab" href="#ninhalCampina">Ninhal da Campina</a></li>
              <li><a data-toggle="tab" href="#sitioArqueologico">Sítio Arqueológico</a></li>
            </ul>

            <div class="tab-content">
              <div id="camboas" class="tab-pane fade in active">
                <h3 class="tituloVerde"><b>Camboas de São José de Ribamar</b></h3>
                <p class="textoVerde">Estão localizadas na praia da Ponta Verde, que são currais construídos de pedras para captura de peixes. Essas camboas foram feitas pelos índios gamelas que habitaram em São José de Ribamar no século XVII..</p>
                <div class="row">
                  <div class="col-lg-3">
                    <img src="{{('/assets/img/imgCB1.jpeg')}}" alt="Lights" class="img-responsive" style="border-radius:none">
                  </div>
                  <div class="col-lg-3">
                    <img src="{{('/assets/img/imgCB2.jpeg')}}" alt="Lights" class="img-responsive" style="border-radius:none">
                  </div>
                  <div class="col-lg-3">
                    <img src="{{('/assets/img/imgCB3.jpeg')}}" alt="Lights" class="img-responsive" style="border-radius:none">
                  </div>
                  <div class="col-lg-3">
                    <img src="{{('/assets/img/imgCB4.jpeg')}}" alt="Lights" class="img-responsive" style="border-radius:none">
                  </div>
                </div>
              </div>
              <div id="cacimbas" class="tab-pane fade">
                <h3 class="tituloVerde"><b>Cacimbas de água doce</b></h3>
                <p  class="textoVerde">As cacimbas de água doce são cova ou poço que recebe a água pluvial filtrada pelos terrenos circunjacentes e são utilizadas pela população. São Típicas do nordeste brasileiro, em nosso município as cacimbas são encontradas em duas praias de São José Ribamar: Praia da Sede e Praia da Moça.</p>
                <div class="row">
                  <div class="col-lg-3">
                    
                  </div>
                  <div class="col-lg-3">

                  </div>
                  <div class="col-lg-3">

                  </div>
                  <div class="col-lg-3">

                  </div>
                </div>
              </div>
              <div id="falesias" class="tab-pane fade">
                <h3 class="tituloVerde"><b>Falésias</b></h3>
                <p  class="textoVerde">As falésias são formações litorâneas que é produzida por processos erosivos naturais, relacionado a oscilações do nível do mar e mudanças nas condições climáticas. A praia da ponta verde é formada por paredões esculpidos pela ação da água do mar e do vento formando as falésias com belezas magnificas.</p>
                <div class="row">
                  <div class="col-lg-3">
                    <img src="{{('/assets/img/imgFL1.jpeg')}}" alt="Lights" class="img-responsive" style="border-radius:none">
                  </div>
                  <div class="col-lg-3">
                    <img src="{{('/assets/img/imgFL2.jpeg')}}" alt="Lights" class="img-responsive" style="border-radius:none">
                  </div>
                  <div class="col-lg-3">
                    <img src="{{('/assets/img/imgFL3.jpeg')}}" alt="Lights" class="img-responsive" style="border-radius:none">
                  </div>
                  <div class="col-lg-3">
                    <img src="{{('/assets/img/imgFL4.jpg')}}" alt="Lights" class="img-responsive" style="border-radius:none">
                  </div>
                </div>
              
              </div>
              <div id="corredorDeAves" class="tab-pane fade">
                <h3 class="tituloVerde"><b>Corredor das aves migratórias</b></h3>
                <p class="textoVerde">O corredor de aves migratórias localiza-se na Praia da Ponta da Madalena situada no final da Praia do Panaquatira, as aves migratórias que durante um determinado período do ano migram para o Brasil, vindo de outros países como dos Estados Unidos, Canadá e Alasca, durante a viagem ao Brasil as aves encostam na  Praia da Ponta da Madalena para alimentação, descanso e reprodução. E em um determinado período elas seguem viagem para outras regiões do Maranhão e depois retornam para seu país de origem. </p>
              </div>
              <div id="ninhalCampina" class="tab-pane fade">
                <h3 class="tituloVerde"><b>Ninhal da campina</b></h3>
                <p class="textoVerde">O ninhal encontra-se no manguezal no bairro da Campina no Município de São José de Ribamar. Os guarás utilizam o manguezal mais isolado para fazer os ninhos e aproveitam os galhos mais altos para escaparem da ação dos predadores. A reprodução dos guarás ocorre em colônias e vai de julho a setembro, durante os outros meses os ninhais permanecem vazios no período do dia, após o pôr do sol, os guarás retornam aos ninhais para dormirem e encherem de cores o manguezal. </p>
              </div>
              <div id="sitioArqueologico" class="tab-pane fade">
                <h3  class="tituloVerde"><b>Sítio arqueológico</b></h3>
                <p class="textoVerde">O sítio arqueológico é localizado no pólo turístico de Panaquatira. No local, existem vestígios de uma população denominada "Sambaqui", que habitou o lugar entre 5 mil e 8 mil anos atrás. O local está sendo estudado para a construção de um museu arqueológico na área para garantir a preservação do patrimônio histórico, que seria o primeiro do Brasil nessas condições. </p>
                <div class="row">
                  <div class="col-lg-3">
                    <img src="{{('/assets/img/imgSA1.jpeg')}}" alt="Lights" class="img-responsive" style="border-radius:none">
                  </div>
                  <div class="col-lg-3">
                    <img src="{{('/assets/img/imgSA2.jpeg')}}" alt="Lights" class="img-responsive" style="border-radius:none">
                  </div>
                  <div class="col-lg-3">
                    <img src="{{('/assets/img/imgSA3.jpeg')}}" alt="Lights" class="img-responsive" style="border-radius:none">
                  </div>
                  <div class="col-lg-3">
                    <img src="{{('/assets/img/imgSA1.jpeg')}}" alt="Lights" class="img-responsive" style="border-radius:none">
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div><br/><br/>
    </section>

    <footer>
      <div class="container-fluid" id="rodape">
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
                <li>Projetos</li>         
              </ul>
            </div>
            <div class="col-lg-4 text-center" id="borda">
              <h3>LOCALIZAÇÃO</h3>
              <p>A Secretaria Municipal do Ambiente - SEMAM, Encontra-se localizada na praça São José, nº 65, centro, galeria José de Alencar - São José de Ribamar / Cep 65110-000.</p><br>
              <iframe src="https://www.google.com/maps/embed?pb=!1m23!1m12!1m3!1d3985.829588328001!2d-44.0578895352439!3d-2.5622097981330714!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m8!3e3!4m0!4m5!1s0x7f6bcde2d47b959%3A0xb948650e423c8221!2sGaleria%20Jos%C3%A9%20De%20Alencar%20-%20Av.%20Gon%C3%A7alves%20Dias%2C%20309%20-%20Moropia%2C%20S%C3%A3o%20Jos%C3%A9%20de%20Ribamar%20-%20MA%2C%2065110-000!3m2!1d-2.5611843999999997!2d-44.0555666!5e0!3m2!1spt-BR!2sbr!4v1599160393192!5m2!1spt-BR!2sbr" height="120px" style="border:0;" allowfullscreen="" class="embed-responsive-item" aria-hidden="false" tabindex="0"></iframe>
            </div>
            <div class="col-lg-2 text-center">
              <h3>CONTATOS</h3>
              <p><span class="glyphicon glyphicon-map-marker"></span> São José de Ribamar</p>
              <p><span class="glyphicon glyphicon-phone-alt"></span> 98 3224-0107</p>
              <p><span class="glyphicon glyphicon-envelope"></span> semampmsjr@gmail</p>
            </div>
            <div class="col-lg-2 links">
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
          </div><br/><br/>
          <div class="row">
            <div class="col-lg-12">
              <div class="informacao">
                Todos os direito reservados || Secretaria Municipal do Ambiente - SEMAM
              </div>
            </div>
          </div><br/><br/>
        </div>
      </div>
    </footer>
    <script src="{{('/assets/js/jquery-3.1.1.min.js')}}"></script>
    <script src="{{('/assets/js/bootstrap.min.js')}}"></script>
    <script src="{{('/assets/js/efeitoScroll.js')}}"></script>
    <script src="{{('/assets/js/slide.js')}}"></script>
    <script src="{{('/assets/js/app.js')}}"></script>
  </body>
</html>
