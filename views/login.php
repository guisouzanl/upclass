<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="">
<meta name="author" content="">
<title>UpClass - Portal do Professor</title>
<link rel="stylesheet" href="assets/layout/css/bootstrap.min.css" type="text/css">
<link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>
<link rel="stylesheet" href="assets/layout/font-awesome/css/font-awesome.min.css" type="text/css">
<link rel="stylesheet" href="assets/layout/css/animate.min.css" type="text/css">
<link rel="stylesheet" href="assets/layout/css/creative.css" type="text/css">
</head>

<body id="page-top">
<?php if(!empty($erro)): ?>
<script type="text/javascript">alert('<?php echo $erro; ?>');</script>
<?php endif ?>
<nav id="mainNav" class="navbar navbar-default navbar-fixed-top">
  <div class="container-fluid"> 
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
      <a class="navbar-brand page-scroll" href="#page-top">UpClass</a> </div>
    
    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav navbar-right">
        <li> <a href="#" data-toggle="modal" data-target="#myModal"><font color="#FF6E00">Login</font></a> </li>
        <li> <a class="page-scroll" href="#about">Sobre</a> </li>
        <li> <a class="page-scroll" href="#services">Serviços</a> </li>
        <li> <a class="page-scroll" href="#portfolio">Media</a> </li>
        <li> <a class="page-scroll" href="#contact">Contato</a> </li>
      </ul>
    </div>
    <!-- /.navbar-collapse --> 
  </div>
  <!-- /.container-fluid --> 
</nav>
<header>
  <div class="header-content">
    <div class="header-content-inner">
      <h1>UpClass</h1>
      <hr>
      <p>Um portal feito para o Professor!</p>
      <a href="#" class="btn btn-primary btn-xl page-scroll" data-toggle="modal" data-target="#myModal2">Cadastre-se, e gratis!</a> </div>
  </div>
</header>
<section class="bg-primary" id="about">
  <div class="container">
    <div class="row">
      <div class="col-lg-8 col-lg-offset-2 text-center">
        <h2 class="section-heading">Somos uma empresa seria!</h2>
        <hr class="light">
        <p class="text-faded">Voltado a facilitar a organização dos educadores, criamos um portal no qual permite ao educador poder criar e armazenar planejamentos, acompanhar o desenvolvimento das turmas, vizualizar estatisticas e lançar a nota dos alunos.</p>
        <a href="#" class="btn btn-default btn-xl" data-toggle="modal" data-target="#myModal2">Se interessou? Então Cadastre-se!</a> </div>
    </div>
  </div>
</section>
<section id="services">
  <div class="container">
    <div class="row">
      <div class="col-lg-12 text-center">
        <h2 class="section-heading">Novidades da Edição Escolar</h2>
        <hr class="primary">
      </div>
    </div>
  </div>
  <div class="container">
    <div class="row">
      <div class="col-lg-3 col-md-6 text-center">
        <div class="service-box"> <i class="fa fa-4x fa-diamond wow bounceIn text-primary"></i>
          <h3>Gratis, Gratis, Gratis!</h3>
          <p class="text-muted">Serviço 24Hrs Diamante, com os mesmos beneficios de um portal pago!</p>
        </div>
      </div>
      <div class="col-lg-3 col-md-6 text-center">
        <div class="service-box"> <i class="fa fa-4x fa-paper-plane wow bounceIn text-primary" data-wow-delay=".1s"></i>
          <h3>Servidores Robustos na Nuvem</h3>
          <p class="text-muted">Garantimos o melhor uptime e tempo de reposta, o que nos diferencia de outros projetos gratuitos.</p>
        </div>
      </div>
      <div class="col-lg-3 col-md-6 text-center">
        <div class="service-box"> <i class="fa fa-4x fa-newspaper-o wow bounceIn text-primary" data-wow-delay=".2s"></i>
          <h3>Sempre Atualizado!</h3>
          <p class="text-muted">Estamos sempre adicionando novos recursos, e mantendo o portal sempre atualizado de acordo com a nessecidade dos educadores e alunos.</p>
        </div>
      </div>
      <div class="col-lg-3 col-md-6 text-center">
        <div class="service-box"> <i class="fa fa-4x fa-heart wow bounceIn text-primary" data-wow-delay=".3s"></i>
          <h3>Estamos pensando no futuro!</h3>
          <p class="text-muted">Para que a educação no pais vá para frente, esté e apenas o primeiro passo de um grande projeto!</p>
        </div>
      </div>
    </div>
  </div>
</section>
<section class="no-padding" id="portfolio">
  <div class="container-fluid">
    <div class="row no-gutter">
      <div class="col-lg-4 col-sm-6"> <a href="#" class="portfolio-box"> <img src="assets/layout/img/portfolio/1.jpg" class="img-responsive" alt="">
        <div class="portfolio-box-caption">
          <div class="portfolio-box-caption-content">
            <div class="project-category text-faded"> Painel do Professor </div>
          </div>
        </div>
        </a> </div>
      <div class="col-lg-4 col-sm-6"> <a href="#" class="portfolio-box"> <img src="assets/layout/img/portfolio/2.jpg" class="img-responsive" alt="">
        <div class="portfolio-box-caption">
          <div class="portfolio-box-caption-content">
            <div class="project-category text-faded"> Cadastro de Instituicões </div>
          </div>
        </div>
        </a> </div>
      <div class="col-lg-4 col-sm-6"> <a href="#" class="portfolio-box"> <img src="assets/layout/img/portfolio/3.jpg" class="img-responsive" alt="">
        <div class="portfolio-box-caption">
          <div class="portfolio-box-caption-content">
            <div class="project-category text-faded"> Cadastro de Turmas </div>
          </div>
        </div>
        </a> </div>
      <div class="col-lg-4 col-sm-6"> <a href="#" class="portfolio-box"> <img src="assets/layout/img/portfolio/4.jpg" class="img-responsive" alt="">
        <div class="portfolio-box-caption">
          <div class="portfolio-box-caption-content">
            <div class="project-category text-faded"> Upload de Atividades </div>
          </div>
        </div>
        </a> </div>
      <div class="col-lg-4 col-sm-6"> <a href="#" class="portfolio-box"> <img src="assets/layout/img/portfolio/5.jpg" class="img-responsive" alt="">
        <div class="portfolio-box-caption">
          <div class="portfolio-box-caption-content">
            <div class="project-category text-faded"> Elaboração de Planejamento </div>
          </div>
        </div>
        </a> </div>
      <div class="col-lg-4 col-sm-6"> <a href="#" class="portfolio-box"> <img src="assets/layout/img/portfolio/6.jpg" class="img-responsive" alt="">
        <div class="portfolio-box-caption">
          <div class="portfolio-box-caption-content">
            <div class="project-category text-faded"> Acompanhar as Turmas </div>
          </div>
        </div>
        </a> </div>
    </div>
  </div>
</section>
<aside class="bg-dark">
  <div class="container text-center">
    <div class="call-to-action">
      <h2>Depois de todos esse recursos...</h2>
      <a href="#" class="btn btn-default btn-xl wow tada" data-toggle="modal" data-target="#myModal2">Porque não se cadastrar?</a> </div>
  </div>
</aside>
<section id="contact">
  <div class="container">
    <div class="row">
      <div class="col-lg-8 col-lg-offset-2 text-center">
        <h2 class="section-heading">Duvidas ou Sugestões?</h2>
        <hr class="primary">
        <p>Entre em contato pelas as informações abaixo!</p>
      </div>
      <div class="col-lg-4 col-lg-offset-2 text-center"> <i class="fa fa-phone fa-3x wow bounceIn"></i>
        <p>(31)0000-0000</p>
      </div>
      <div class="col-lg-4 text-center"> <i class="fa fa-envelope-o fa-3x wow bounceIn" data-wow-delay=".1s"></i>
        <p><a href="mailto:educar@educar.me">educar@educar.me</a></p>
      </div>
    </div>
  </div>
</section>

<!--Tela de Login-->
<div id="myModal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
        <h2 class="text-center"><img src="assets/layout/img/110.jpg" class="img-circle"><br>Login</h2>
      </div>
      <div class="modal-body row">
        <h6 class="text-center">Preencha os campos abaixo para o Login</h6>

        <form class="col-md-10 col-md-offset-1 col-xs-12 col-xs-offset-0" action="<?php echo BASE.'login'; ?>" method="post">
        <input type="hidden" name="action" value="login" />
          <div class="form-group">
            <input type="email" class="form-control input-lg" placeholder="Email" name="email" id="email" required>
          </div>
          <div class="form-group">
            <input type="password" class="form-control input-lg" placeholder="Senha" name="senha" id="senha "required>
          </div>
          <div class="form-group">
              <input class="btn btn-danger btn-lg btn-block" type="submit" value="Logar-se">
          </div>
        </form>
      </div>
      <div class="modal-footer">
        <h6 class="text-center"><a href="">A privacidade é importante para nós. Clique aqui para ler o porquê.</a></h6>
      </div>
    </div>
  </div>
</div>
<!--Fim da Tela de Login--> 

<!--Tela de Cadastro-->
<div id="myModal2" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
        <h2 class="text-center"><img src="assets/layout/img/110.jpg" class="img-circle"><br>Cadastro</h2>
      </div>
      <div class="modal-body row">
        <h6 class="text-center">Preencha os campos abaixo para se cadastrar</h6>
        <form class="col-md-10 col-md-offset-1 col-xs-12 col-xs-offset-0"  action="<?php echo BASE.'login'; ?>" method="post">
          <input type="hidden" name="action" value="cadastrar" />
          <div class="form-group">
            <input type="text" class="form-control input-lg" placeholder="Nome" name="nome" id="nome" required maxlength="80">
          </div>
          <div class="form-group">
            <input type="email" class="form-control input-lg" placeholder="Email" name="email" id="email" required maxlength="60">
          </div>
           <div class="form-group">
            <input type="text" class="form-control input-lg" placeholder="Disciplina" name="disciplina" id="disciplina" required maxlength="80">
          </div>
           <div class="form-group">
            <input type="text" class="form-control input-lg" placeholder="Instituição" name="instituicao" id="instituicao" required maxlength="80">
          </div>
             <div class="form-group">
             <textarea class="form-control" rows="5" id="comment" placeholder="Metodologia(Não é obrigatório)" name="metodologia" id="metodologia"></textarea>
             </div>
          <div class="form-group">
            <input type="password" class="form-control input-lg" placeholder="Senha" name="senha" id="senha" required>
          </div>
          <div class="form-group">
            <input type="password" class="form-control input-lg" placeholder="Confime a Senha" name="csenha" id="csenha" required>
          </div>
          <div class="form-group">
              <input class="btn btn-danger btn-lg btn-block" type="submit" name="NEW_usuario" value="Cadastrar">
          </div>
        </form>
      </div>
      <div class="modal-footer">
        <h6 class="text-center"><a href="">A privacidade é importante para nós. Clique aqui para ler o porquê.</a></h6>
      </div>
    </div>
  </div>
</div>
<!--Fim da Tela de Cadastro-->
<script>
    var password = document.getElementById("senha")
  , confirm_password = document.getElementById("csenha");
function validatePassword(){
  if(password.value !== confirm_password.value) {
    confirm_password.setCustomValidity("Senha de confirmação não corresponde a senha.");
  } else {
    confirm_password.setCustomValidity('');
  }
}
password.onchange = validatePassword;
confirm_password.onkeyup = validatePassword;
</script>


<script src="assets/layout/js/jquery.js"></script> 
<script src="assets/layout/js/bootstrap.min.js"></script> 
<script src="assets/layout/js/jquery.easing.min.js"></script> 
<script src="assets/layout/js/jquery.fittext.js"></script> 
<script src="assets/layout/js/wow.min.js"></script> 
<script src="assets/layout/js/creative.js"></script>
</body>
</html>

