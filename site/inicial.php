      <!DOCTYPE html> 
      <html lang="en">
      <head>
        <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
        <script src="assets/js/lib.js"></script>
        <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
        <link href="assets/bootstrap/css/bootstrap.min.css" rel="stylesheet">
        <link rel="stylesheet" href="assets/css/estilos.css">  
        <title>UpClass - início</title>
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
        <meta charset="UTF-8"> 
      </head> 
      <body> 
        <!-- Barra de navegação-->
        <nav class="navbar navbar-fixed-top"> 
          <img id="logo" src="" alt="Logo" class="navbar-brand" href="www.upclass.com">
        </nav>
        <div class="row">
          <!-- Barra lateral esquerda -->
          <div id="sidenav" class="col-sm-2 panel mobile-nofixed">
            <div class="card">
              <img src="assets/img/avatar_f.png" class="img-circle" alt="Aretuza" style="width:100%">
              <div class="container-fluid">
                <h1>Aretuza</h1>
                <p class="title">Professora de Geografia</p>
                <p>Escola Municipal Dilma Vana Rousseff</p>
                <a href="#"><i class="fa fa-dribbble"></i></a> 
                <a href="#"><i class="fa fa-twitter"></i></a> 
                <a href="#"><i class="fa fa-linkedin"></i></a> 
                <a href="#"><i class="fa fa-facebook"></i></a> 
              </div>
            </div>            
            <!--<div class="panel-heading">
              <img id="foto_user" class="img-circle" src="" alt="foto do usuário">
              <h5 id="short_bio">short bio</h5>
              <i class="fa fa-facebook-official" aria-hidden="true"></i>
            </div> -->
            <br><input type="text" class="search" name="pesquisa"></input>
            <span class="material-icons md-24">search</span>
          </div> 
          <div id="postar" class="col-sm-7 col-sm-offset-2 container-fluid text-center">
            <h2>Postar material</h2><br>
            <h4>Que tipo de conteúdo você deseja postar? </h4>
            <div id="tipos_post">
              <a href="#">
                <span class="material-icons md-48">description</span>
                <p>Texto</p>
              </a>
              <a href="#">
                <span class="material-icons md-48">video_library</span>
                <p">Vídeos</p>
              </a>
              <a href="#"">
                <span class="material-icons md-48">library_music</span>
                <p>Músicas</p>
              </a>
              <a href="#">
                <span class="material-icons md-48">subscriptions</span>
                <p>Youtube</p>
              </a>
            </div>
          </div>
          <!-- Barra lateral direita -->
          <div id="aside" class="row col-sm-3">
            <div id= "Materiais-sugeridos"><h4>Materiais sugeridos para você:</h4><br>
              <!-- modelo de slide show do W3Schools - deve ser trocado pela lightbox? -->
              <div class="slideshow-container">
                <div class="mySlides fade">
                  <div class="numbertext">1 / 3</div>
                  <img src="assets/img/empresa.jpg" style="width:75%">
                  <div class="text">Caption Text</div>
                </div>

                <div class="mySlides fade">
                  <div class="numbertext">2 / 3</div>
                  <img src="assets/img/empresa.jpg" style="width: 75%">
                  <div class="text">Caption Two</div>
                </div>

                <div class="mySlides fade">
                  <div class="numbertext">3 / 3</div>
                  <img src="assets/img/empresa.jpg" style="width:75%">
                  <div class="text">Caption Three</div>
                </div>

                <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
                <a class="next" onclick="plusSlides(1)">&#10095;</a>
              </div>
            </div>
            <br>
            <div style="text-align:center">
              <span class="dot" onclick="currentSlide(1)"></span> 
              <span class="dot" onclick="currentSlide(2)"></span> 
              <span class="dot" onclick="currentSlide(3)"></span> 
            </div><br>
            <!-- Sugestões de amigos - baseado nos contact chips W3Schools 
            ADICIONAR FUNÇÃO ON HOVER PARA MOSTRAR DETALHES DO PERFIL-->
            <div id="sugestoes-amigos"><h4>Sugestões de amigos</h4><br>
              <h6>Encontre professores da sua área ou com os mesmos interesses que você:</h6><br>
              <div class="chip">
                <img src="assets/img/empresa.jpg" alt="Person" width="96" height="96">
                Catarina
                <span class="closebtn" onclick="this.parentElement.style.display='none'">&times;</span>
              </div>
              <div class="chip">
                <img src="assets/img/empresa.jpg" alt="Person" width="96" height="96">
                Aretuza
                <span class="closebtn" onclick="this.parentElement.style.display='none'">&times;</span>
              </div>
            </div>
          </div>
        </div>
        <footer class="navbar-fixed-bottom">
          <a href="#" class="btn btn-default circle">
            <span class="material-icons md-18">event</span>
            <p>Eventos</p>
          </a>
          <a href="#" class="btn btn-default circle">
            <span class="material-icons md-18">folder_open</span>
            <p>Meu acervo</p>
          </a>
          <a href="#" class="btn btn-default circle">
            <span class="material-icons md-18">question_answer</span>
            <p>Fórum</p>
          </a>
          <a href="#" class="btn btn-default circle">
            <span class="material-icons md-18">supervisor_account</span>
            <p>Amigos</p>
          </a>
        </footer>
      </body>
      </html>