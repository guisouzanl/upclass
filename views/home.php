<!DOCTYPE html>
<html lang="en">

<head>
  <title>UpClass - Postar</title>
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
  <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
  <link href="assets/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="assets/css/estilos.css">
  <link rel="stylesheet" href="assets/css/style.css">
  <script type="text/javascript" src="assets/js/bootstrap-filestyle.min.js"> </script>
</head>

<body>
  <!-- Barra de navegação-->
  <nav class="navbar navbar-fixed-top">
    <img id="logo" src="" alt="UPCLASS" class="navbar-brand" href="www.upclass.com">
    <!-- caixa de pesquisa -->
    <form class="navbar-form navbar-left">
      <!-- <div class="input-group">
        <input type="text" class="form-control" placeholder="Encontrar colegas" name="search">
        <div class="input-group-btn">
          <button class="btn btn-default" type="submit"><i class="glyphicon glyphicon-search"></i></button>
        </div>
      </div> -->
    </form>
    <!-- <div class="nav navbar-nav navbar-right">
      <button class="btn navbar-btn">
              <a href="#">SAIR <span class="material-icons">exit_to_app</span></a>
            </button>
          </div> -->
        </nav>
        <!-- Barra lateral esquerda -->
        <!-- Barra lateral esquerda -->
        <div id="sidenav" class="col-md-2 panel">
          <div class="card panel-body">
            <img src="assets/img/avatar_f.png" class="img-circle" alt="Mônica">
            <h1>Mônica</h1>
            <p class="title">Professora de matemática</p>
            <p>Colégio Tiradentes</p>
            <a href="#"><i class="fa fa-facebook link-social"></i></a>
            <a href="#"><i class="fa fa-twitter link-social"></i></a>
            <a href="#"><i class="fa fa-linkedin link-social"></i></a>
          </div>
          <div class="btn-group-md mini-atalhos">
            <span data-toggle="tooltip" title="Eventos" data-placement="top" class="btn btn-default circle material-icons md-18">event</span>
            <span class="btn btn-default circle material-icons md-18">folder_open</span>
            <span class="btn btn-default circle material-icons md-18">group_work</span>
            <span class="btn btn-default circle material-icons md-18">supervisor_account</span>
          </div>
        </div>
        <div id="corpo" class="col-md-6 col-md-offset-2">
          <h3>Meu Acervo</h3>
          <div id="post-bar" class="panel-group">
            <div class="panel panel-heading">
              <h4>Postar material</h4><br>
              <div class="post_area panel-body">
                <form method="post" enctype="multipart/form-data">
                  <div class="form-group" >
                    <textarea id="texto-post" name="post" class="form-control" placeholder="Texto da postagem"></textarea>
                    <input type="file" name="foto">Carregar Imagem<br/>
        <input type="file" name="file">Carregar Arquivo<br/>
                    <button id="btn-publicar" type="submit" class="btn btn-info" value="Enviar">Publicar</button>
                  </form>
                </div>
              </div>
            </div>
            <div class="panel acervo">
              <?php foreach($acervo as $postitem)
              {
                $this->loadView('postitem', $postitem);
              }
              ?>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
</div>
<!-- Paineis à direita -->
    <aside id="aside" class="col-md-4 panel-group">
      <div class="panel panel-heading" id="materiais-sugeridos">
        <h4>Materiais sugeridos para você:</h4>
        <div class="panel" id="sugestoes-conteudos">
          <div class="list-group">
            <a href="#" class="list-group-item">Como lidar com a violência na escola?</a>
            <a href="#" class="list-group-item">Técnicas de memorização para alunos</a>
            <a href="#" class="list-group-item">Trigonometria divertida</a>
          </div>
        </div>
      </div>
    <!-- Sugestões de amigos - baseado nos contact chips W3Schools 
    ADICIONAR FUNÇÃO ON HOVER PARA MOSTRAR DETALHES DO PERFIL-->
    <div class="panel panel-heading" id="sugestoes-amigos">
      <h4>Sugestões de amigos</h4><br>
      <div panel class="panel">
        <div class="chip">
          <img src="assets/img/empresa.jpg" alt="Person" width="96" height="96"> Catarina
          <span class="closebtn" onclick="this.parentElement.style.display='none'">+</span>
        </div>
        <div class="chip">
          <img src="assets/img/empresa.jpg" alt="Person" width="96" height="96"> Eva
          <span class="closebtn" onclick="this.parentElement.style.display='none'">+</span>
        </div>
      </div>
    </div>
    <!-- chat box -->
    <div id="chatbox" class="container-fluid">
        <div class="row">
          <div class="portlet portlet-default">
            <div class="portlet-heading">
              <div class="portlet-title">
                <h4><i class="fa fa-circle text-green"></i> Mônica</h4>
              </div>
              <div class="portlet-widgets">
                <div class="btn-group">
                  <button type="button" class="btn btn-white dropdown-toggle btn-md" data-toggle="dropdown">
                    <i class="fa fa-circle text-green"></i> Status
                    <span class="caret"></span>
                  </button>
                  <ul class="dropdown-menu" role="menu">
                    <li><a href="#"><i class="fa fa-circle text-green"></i> Online</a>
                    </li>
                    <li><a href="#"><i class="fa fa-circle text-orange"></i> Away</a>
                    </li>
                    <li><a href="#"><i class="fa fa-circle text-red"></i> Offline</a>
                    </li>
                  </ul>
                </div>
                <span class="divider"></span>
                <a data-toggle="collapse" data-parent="#accordion" href="#chat"><i class="fa fa-chevron-down"></i></a>
              </div>
              <div class="clearfix"></div>
            </div>
            <div id="chat" class="panel-collapse collapse in">
              <div>
                <div class="portlet-body chat-widget">
                  <div class="row">
                    <div class="col-md-12">
                      <p class="text-center text-muted small">January 1, 2014 at 12:23 PM</p>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-12">
                      <div class="media">
                        <a class="pull-left" href="#">
                          <img class="media-object img-circle" src="http://lorempixel.com/30/30/people/1/" alt="">
                        </a>
                        <div class="media-body">
                          <h4 class="media-heading">Mônica
                            <span class="small pull-right">12:23 PM</span>
                          </h4>
                          <p>Esta caixa de chat é apenas um exemplo que poderá ser trocado a qualquer momento pelos devs.</p>
                        </div>
                      </div>
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-md-12">
                      <div class="media">
                        <a class="pull-left" href="#">
                          <img class="media-object img-circle" src="http://lorempixel.com/30/30/people/7/" alt="">
                        </a>
                        <div class="media-body">
                          <h4 class="media-heading">Catarina
                            <span class="small pull-right">12:28 PM</span>
                          </h4>
                          <p>Did you have an update on purchase order #302?</p>
                        </div>
                      </div>
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-md-12">
                      <div class="media">
                        <a class="pull-left" href="#">
                          <img class="media-object img-circle" src="http://lorempixel.com/30/30/people/7/" alt="">
                        </a>
                        <div class="media-body">
                          <h4 class="media-heading">Mônica
                            <span class="small pull-right">12:39 PM</span>
                          </h4>
                          <p>No not yet, the transaction hasn't cleared yet. I will let you know as soon as everything goes through. Any
                            idea where you want to get lunch today?</p>
                          </div>
                        </div>
                      </div>
                    </div>
                    <hr>
                  </div>  
                </div>
                <div class="portlet-footer">
                  <form role="form">
                    <div class="form-group">
                      <textarea class="form-control" placeholder="Digite a mensagem..."></textarea>
                    </div>
                    <div class="form-group">
                      <button type="button" class="btn btn-success pull-right">Enviar</button>
                      <div class="clearfix"></div>
                    </div>
                  </form>
                </div>
              </div>
            </div>
            <!-- /.col-md-4 -->
          </div>
        </div>
      </div>
    </div>
  </aside>
</div>
<!-- Postar vídeo -->
<div id="postar-video" class="modal" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Poste seus vídeos</h4>
      </div>
      <div class="modal-body">
        <div class="input-group">
          <span class="input-group-addon" id="basic-addon1">@</span>
          <input type="text" class="form-control" placeholder="Username" aria-describedby="basic-addon1">
        </div><br>

        <div class="input-group">
          <input type="text" class="form-control" placeholder="Recipient's username" aria-describedby="basic-addon2">
          <span class="input-group-addon" id="basic-addon2">@example.com</span>
        </div><br>

        <div class="input-group">
          <span class="input-group-addon">$</span>
          <input type="text" class="form-control" aria-label="Amount (to the nearest dollar)">
          <span class="input-group-addon">.00</span>
        </div><br>

        <label for="basic-url">Your vanity URL</label>
        <div class="input-group">
          <span class="input-group-addon" id="basic-addon3">https://example.com/users/</span>
          <input type="text" class="form-control" id="basic-url" aria-describedby="basic-addon3">
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>
<script src="https://code.jquery.com/jquery-3.2.1.min.js" integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4="
crossorigin="anonymous"></script>
<script src="assets/js/lib.js"></script>
<script src="assets/bootstrap/js/bootstrap.min.js"></script>
</body>

</html>