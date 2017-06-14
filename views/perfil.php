<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="A front-end template that helps you build fast, modern mobile web apps.">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0">
    <title>UPCLASS - Editar o perfil</title>

    <!-- Add to homescreen for Chrome on Android -->
    <meta name="mobile-web-app-capable" content="yes">
    <link rel="icon" sizes="192x192" href="">

    <!-- Add to homescreen for Safari on iOS -->
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">
    <meta name="apple-mobile-web-app-title" content="Material Design Lite">
    <link rel="apple-touch-icon-precomposed" href="assets/img/ios-desktop.png">

    <!-- Tile icon for Win8 (144x144 + tile color) -->
    <meta name="msapplication-Tile" content="assets/img/touch/ms-touch-icon-144x144-precomposed.png">
    <meta name="msapplication-TileColor" content="#3372DF">

    <link rel="shortcut icon" href="assets/img/favicon.png">

    <!-- SEO: If your mobile URL is different from the desktop URL, add a canonical link to the desktop page https://developers.google.com/webmasters/smartphone-sites/feature-phones -->
    <!--
 <link rel="canonical" href="http://www.example.com/">
 -->

    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:regular,bold,italic,thin,light,bolditalic,black,medium&amp;lang=en">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="assets/css/material.css">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/styles.css">
</head>

<body>
    <!-- drawer+header -->
    <div class="layout mdl-layout mdl-js-layout mdl-layout--fixed-drawer mdl-layout--fixed-header">
        <header class="header mdl-layout__header grey-100 -text--grey-600">
            <div class="mdl-layout__header-row">
                <span class="mdl-layout-title">Meu painel</span>
                <div class="mdl-layout-spacer"></div>
                <div class="mdl-textfield mdl-js-textfield mdl-textfield--expandable mdl-textfield--floating-label mdl-textfield--align-right">
                    <label class="mdl-button mdl-js-button mdl-button--icon" for="fixed-header-drawer-exp">
          <i class="material-icons">search</i>
        </label>
                    <div class="mdl-textfield__expandable-holder">
                        <input class="mdl-textfield__input" type="text" name="sample" id="fixed-header-drawer-exp">
                    </div>
                </div>
                <div>
                    <button class="mdl-button mdl-js-button mdl-js-ripple-effect mdl-button--icon" id="bottom-right-btn">
            <i class="material-icons">more_vert</i>
          </button>
                    <ul class="mdl-menu mdl-js-menu mdl-js-ripple-effect mdl-menu--bottom-right" for="bottom-right-btn">
                        <li><a href="<?php echo BASE; ?>perfil" class="mdl-menu__item">Editar Perfil</a></li>
                        <li><a href="<?php echo BASE; ?>login/sair" class="mdl-menu__item">Sair</a></li>
                        <li class="mdl-menu__item">Suporte</li>
                    </ul>
                </div>
            </div>
        </header>
        <div class="drawer mdl-layout__drawer blue-grey-900 -text--blue-grey-50 fixed">
            <header class="drawer-header">
                <img id="logo" src="assets/img/logos.png" alt="UPCLASS" class="logo-sm" href="www.upclass.com">
            </header>
            <nav class="navigation mdl-navigation">
                <div class="card">
                    <img src="assets/img/avatar_m.png" class="img-circle" alt="Mônica">
                    <h1><?php echo $viewData['usuario_nome']; ?></h1>
                    <p class="title">Professor(a) de <?php echo $viewData['usuario_disciplina']; ?></p>
                    <p><?php echo $viewData['usuario_instituicao']; ?></p>
                    <a href="#"><i class="fa fa-facebook link-social"></i></a>
                    <a href="#"><i class="fa fa-twitter link-social"></i></a>
                    <a href="#"><i class="fa fa-linkedin link-social"></i></a>
                </div>
                <div class="mdl-layout-spacer"></div>
                    <div id="mini-atalhos">
                        <div id="btn-acervo"><button id="btn-acervo" class="mini-atalho mdl-button mdl-js-button mdl-button--fab mdl-button--mini-fab mdl-js-ripple-effect mdl-button--colored-white">
  <i class="material-icons">home</i>
</button></div>
                        <div class="mdl-tooltip mdl-tooltip--large mdl-tooltip--top" for="btn-acervo">
                            Meu Painel</div>
                        <div id="btn-contatos"><button class="mini-atalho mdl-button mdl-js-button mdl-button--fab mdl-button--mini-fab mdl-js-ripple-effect mdl-button--colored-white">
  <i class="material-icons">supervisor_account</i>
</button></div>
                        <div class="mdl-tooltip mdl-tooltip--large mdl-tooltip--top" for="btn-contatos">
                            Contatos
                        </div>
                
            </nav>
            </div>
            <!-- /drawer+header -->

            <!-- div corpo -->
            <main class="mdl-layout__content grey-100">
                <div id="corpo" class="mdl-grid">
                    <!-- editprofile-box -->
                    <div id="edit-profile-card" class="mdl-cell mdl-cell--8-col">
                        <div class="card-wide mdl-card mdl-shadow--2dp">
                            <div class="mdl-card__title">
                                <h2 class="mdl-card__title-text">Editar o perfil</h2>
                            </div>
                            <div class="editprofile-box">
                                 <img src="assets/img/avatar_f.png" class="img-circle-sm" alt="Mônica">
                                 <div class="mdl-tabs__panel" id="img-panel">
                                        <input type="file" class="filestyle" data-input="false" data-buttonText=" Trocar a foto do perfil" data-iconName="glyphicon glyphicon-inbox" name="file"><br/>
                             

                                <form method="POST">
                                    <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                                        <input class="mdl-textfield__input" type="text" id="nome" value="<?php echo $info['nome']; ?>">
                                        <label class="mdl-textfield__label" for="nome">NOME</label>
                                    </div>
                              
                                    <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                                        <label class="mdl-textfield__label" for="email"></label>
                                        <strong>E-mail:</strong></br>
                                        <?php echo $info['email']; ?>
                                    </div>
                                    <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                                        <input class="mdl-textfield__input" type="text" id="disciplina" value="<?php echo $info['instituicao']; ?>">
                                        <label class="mdl-textfield__label" for="disciplina">DISCIPLINA</label>
                                    </div>
                                    <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                                        <input class="mdl-textfield__input" type="text" id="instituicao" value="<?php echo $info['disciplina']; ?>">
                                        <label class="mdl-textfield__label" for="instituicao">INSTITUIÇÃO</label>
                                    </div>
                                    <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                                       
                                        <strong>Metodologia:</strong></br>
                                        <input class="mdl-textfield__input" type="text" id="metodologia" value="<?php echo $info['metodologia']; ?>">

                                        
                                    </div>
                                    <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                                        <input class="mdl-textfield__input" type="text" id="senha">
                                        <label class="mdl-textfield__label" for="senha">SENHA</label>
                                    </div>
                                
                                <div>

                                    <button type="submit" class="mdl-button mdl-js-button mdl-button--raised mdl-button--colored">
                                    Salvar
                                    </button>
                                    
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    </div>
                    <!-- /seditprofile-box -->
                    <!-- Paineis à direita -->
                    <div id="aside" class="mdl-cell mdl-cell--4-col">
                        <div id="notificacoes-box" class="mdl-card mdl-shadow--2dp">
                            <div class="mdl-card__title">
                                <h4 class="mdl-card__title-text">Novidades na sua rede</h4>
                            </div>
                            <div class="mdl-list">
                                <a href="#" class="mdl-navigation__link mdl-list__item">Como lidar com a violência na escola?</a>
                                <a href="#" class="mdl-navigation__link mdl-list__item">Técnicas de memorização para alunos</a>
                                <a href="#" class="mdl-navigation__link mdl-list__item">Trigonometria divertida</a>
                            </div>
                        </div><br>

                        <!-- Pedidos de contatos -->
                        <div class="mdl-card mdl-shadow--2dp" id="pedidos-contato">
                            <div class="mdl-card__title">
                                <h4 class="mdl-card__title-text">Solicitações pendentes</h4>
                            </div>
                            <div panel class="mdl-list">
                            </div>
                        </div><br>
                        <!-- !Pedidos de contatos -->
                        <!-- Sugestões de contatos -->
                        <div class="mdl-card mdl-shadow--2dp" id="sugestoes-contatos">
                            <div class="mdl-card__title">
                                <h4 class="mdl-card__title-text">Sugestões de contatos</h4>
                            </div>
                            <div class="mdl-list">
                                <span class="mdl-chip mdl-chip--contact mdl-chip--deletable">
 <img class="mdl-chip__contact" src="assets/img/user.jpg"></img>
 <span class="mdl-chip__text">Adrienne</span>
                                <a href="#" class="mdl-chip__action"><i class="material-icons">add</i></a>
                                </span><br>
                                <span class="mdl-chip mdl-chip--contact mdl-chip--deletable">
 <img class="mdl-chip__contact" src="assets/img/user.jpg"></img>
 <span class="mdl-chip__text">Roberto</span>
                                <a href="#" class="mdl-chip__action"><i class="material-icons">add</i></a>
                                </span><br>
                                <span class="mdl-chip mdl-chip--contact mdl-chip--deletable">
 <img class="mdl-chip__contact" src="assets/img/user.jpg"></img>
 <span class="mdl-chip__text">Joana</span>
                                <a href="#" class="mdl-chip__action"><i class="material-icons">add</i></a>
                                </span><br>
                            </div>
                        </div>
                        <!-- !Sugestões de contatos -->
                    </div>
                    <!-- !Paineis à direita -->
                </div>
        </div>
        </main>
    </div>

    <script src="assets/js/script.js"></script>
    <script src="assets/js/material.js"></script>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/bootstrap.js"></script>
    <script type="text/javascript" src="assets/js/bootstrap-filestyle.min.js"></script>
</body>

</html>