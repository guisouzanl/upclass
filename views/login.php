<!DOCTYPE HTML>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="A front-end template that helps you build fast, modern mobile web apps.">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0">
    <title>UPCLASS - Contatos</title>

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
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/material.css">
    <link rel="stylesheet" href="assets/css/bootstrap.css">
    <link rel="stylesheet" href="assets/css/styles.css">
</head>

<body>
    <div class="layout-transparent mdl-layout mdl-js-layout">
        <header class="mdl-layout__header mdl-layout__header--transparent">
            <div class="mdl-layout__header-row">
                <!-- Title -->
                <span class="mdl-layout-title">UPCLASS</span>
                <!-- Add spacer, to align navigation to the right -->
                <div class="mdl-layout-spacer"></div>
                <!-- Navigation -->
                <nav class="mdl-navigation">
                    <a class="mdl-navigation__link" href="">Link</a>
                    <a class="mdl-navigation__link" href="">Link</a>
                    <a class="mdl-navigation__link" href="">Link</a>
                    <a class="mdl-navigation__link" href="">Link</a>
                </nav>
            </div>
        </header>
        <div class="mdl-grid">
            <div class="auth-box mdl-cell mdl-cell--12-col">
                <div class="mdl-tabs mdl-js-tabs mdl-js-ripple-effect">
                    <div class="mdl-tabs__tab-bar">
                        <a href="#login" class="mdl-tabs__tab is-active">Login</a>
                        <a href="#registro" class="mdl-tabs__tab">Registro</a>
                    </div>
                    <div class="mdl-tabs__panel is-active" id="login">
                        <fieldset>
                            <br>
                            <form method="POST">
                            <p><label>E-mail: </label><input type="email" name="email" id= "email"required></p>
                            <br>
                            <p><label>Senha: </label><input type="password" name="senha" id="senha" required></p>
                            <br>
                            <p><button type="submit">Entrar </button>
                                <button type="submit">Entrar com o facebook</button>
                                <input type="checkbox" checked="checked"> Lembrar minha senha</p>
                            <span class="psw"><a href="#">Esqueci minha senha</a></span>
                            </form>
                        </fieldset>
                    </div>
                    <div class="mdl-tabs__panel" id="registro">
                        <fieldset>
                            <br>
                            <p>Nome completo: <input type="text" id="login" value="" placeholder="Digite o seu nome"></p>
                            
                            <p>E-mail: <input type="password" id="password" placeholder="Digite uma senha"></p>
                            <p>Senha: <input type="password" id="password" placeholder="Digite uma senha"></p>
                            <p>Repita a senha: <input type="password" id="password" placeholder="Digite uma senha"></p>
                            <br>
                            <p><button>Ok</button></p>
                        </fieldset>
                    </div>
                </div>
            </div>
            <script type="text/javascript" src="assets/js/jquery.min.js"></script>
            <script type="text/javascript" src="assets/js/bootstrap.js"></script>
            <script type="text/javascript" src="assets/js/material.js"></script>
            <script type="text/javascript" src="assets/js/script.js"></script>
            <script type="text/javascript" src="assets/js/bootstrap-filestyle.min.js"></script>
</body>