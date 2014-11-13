<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">
    <link rel="shortcut icon" type="image/ico" href="http://lod-misis.ru/st/img/favicon.ico?">
    <title>Форум Лиги Разработчиков</title>

    <!-- Bootstrap core CSS -->
    <link href="../css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="navbar-fixed-top.css" rel="stylesheet">
    <link href="../css/dashboard.css" rel="stylesheet">


    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>

    <!-- Fixed navbar -->
   <nav class="navbar navbar-default navbar-fixed-top" role="navigation">
    <div class="container-fluid">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                <span class="sr-only">Переключить навигацию</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="/" data-toggle="tooltip" data-placement="right" title="" data-original-title="Лига Разработчиков"><img src="http://lod-misis.ru/st/img/lodlogo.png" alt="LoD" height="32" style="margin-top:-5px;"></a>
        </div>

        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav">
                <li><a href="/">Главная</a></li>
                <!--<li><a href="/portfolio">Портфолио</a></li>-->
                <li><a href="/orders">Стол заказов</a></li>
                <li><a href="/about">О нас</a></li>
                <li><a href="/feedback">Обратная связь</a></li>
                <li><a href="/forum">Форум</a></li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">Войти <span class="caret"></span></a>
                    <ul class="dropdown-menu dropdown-menu-login" role="menu">
                        <form class="navbar-form has-error" role="login" onsubmit="User.signInStart(); return !1;">
                            <li role="presentation" class="dropdown-header">Логин</li>
                            <li>
                                <div class="input-group">
                                    <span class="input-group-addon"><span class="glyphicon glyphicon-user"></span></span>
                                    <input type="text" id="head_form_login" class="form-control" placeholder="Логин">
                                </div>
                            </li>
                            <li role="presentation" class="dropdown-header">Пароль</li>
                            <li>
                                <div class="input-group">
                                    <span class="input-group-addon"><span class="glyphicon glyphicon-lock"></span></span>
                                    <input type="password" id="head_form_password" class="form-control" placeholder="Пароль">
                                </div>
                                <div class="head-form-error" style="">
                                    <small class="help-block">Неправильная пара логин/пароль</small>
                                </div>
                            </li>
                            <li class="divider"></li>
                            <li><button type="submit" onclick="User.signInStart(); return !1;" class="btn btn-default">Войти</button> <a style="margin-left: 8px;" href="/user/resetPassword">Забыли пароль?</a></li>
                            <li></li>
                        </form></ul>
                </li>
                <li><a href="/user/register">Регистрация разработчика</a></li>
            </ul>
        </div>
    </div>


	<?php include 'application/views/'.$content_view; ?>



    <div class="footer" style="border-top: 1px solid #ecf0f1;   ">
    League of Developers — 2014.
    <div class="pull-right" style="display: inline-block;">
        <ul class="nav nav-pills">
            <li><a href="/about">О нас</a></li>
            <li><a href="/feedback">Обратная связь</a></li>
            <li><a target="_blank" href="/user/register">Подать заявку в Лигу</a></li>
            <li><a target="_blank" href="http://vk.com/leagueofdevelopers">Группа ВКонтакте</a></li>
        </ul>
    </div>
</div>
    </div> <!-- /container -->


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
  </body>
</html>
