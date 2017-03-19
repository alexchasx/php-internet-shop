<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="">
	<meta name="keywords" content="">
	<meta name="author" content="">
	<title>Админпанель</title>
	<link rel="stylesheet" href="/template/css/bootstrap.css">
	<link rel="stylesheet" href="/template/css/bootstrap.min.css">
	<link rel="stylesheet" href="/template/css/font-awesome.css">
	<link rel="stylesheet" href="/template/css/font-awesome.min.css">
	<link rel="stylesheet" href="/template/css/prettyPhoto.css">
	<link rel="stylesheet" href="/template/css/price-range.css">
	<link rel="stylesheet" href="/template/css/animate.css">
	<link rel="stylesheet" href="/template/css/main.css">
	<link rel="stylesheet" href="/template/css/responsive.css">
	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
		<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->
	<link rel="shortcut icon" href="/template/images/ico/" />
	<link rel="apple-touch-icon-precomposed" sizes="144x144" href="/template/images/ico/"/>
	<link rel="apple-touch-icon-precomposed" sizes="114x114" href="/template/images/ico/"/>
	<link rel="apple-touch-icon-precomposed" sizes="72x72" href="/template/images/ico/"/>
	<link rel="apple-touch-icon-precomposed" href="/template/images/ico/"/>
</head>

<body>
  <div class="container-fluid">
    <div class="row">

      <!-- Горизонтальное меню: -->
      <div class="container-fluid">
        <div class="row">

          <nav class="navbar navbar-inverse navbar-static-top">
            <div class="container">
              <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                  <span class="sr-only">Открыть навигацию</span>
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#">Логотип</a>
              </div>
              <div id="navbar" class="collapse navbar-collapse">
                <ul class="nav navbar-nav">
                  <li><a href="#"><i class="glyphicon glyphicon-home"></i>&nbsp;Главная</a></li>
                  <li><a href="/new"><i class="glyphicon glyphicon-pencil"></i>&nbsp;Добавить пост</a></li>

                  <!-- Вертикальное меню: -->
                  <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="glyphicon glyphicon-list-alt"></i> Меню <b class="caret"></b></a>
                    <ul class="dropdown-menu">
                      <li><a href="#">Пункт</a></li>
                      <li><a href="#">Пункт</a></li>
                      <li><a href="#">Пункт</a></li>
                      <li class="divider"></a></li>  
                      <li><a href="#">Пункт</a></li>
                    </ul>
                  </li>
                  <!-- /Вертикальное меню -->

                  <li><a href="#"><i class="glyphicon glyphicon-phone-alt"></i> Контакты</a></li>
                </ul>
              </div><!--/.nav-collapse -->
            </div>
          </nav>

        </div><!-- /.row -->
      </div><!-- /.container -->
      <!-- /Горизонтальное меню: -->

      <div class="container-fluid">
        <div class="row">
          {% block body %}

            <!-- Слайды -->
            <div id="carousel" class="carousel slide">
              {# Индикаторы слайдов #}
              <ol class="carousel-indicators">
                <li class="active" data-target="#carousel" data-slide-to="0"></li>
                <li data-target="#carousel" data-slide-to="1"></li>
                <li data-target="#carousel" data-slide-to="2"></li>
              </ol>
              {# Слайды #}
              <div class="carousel-inner">
                <div class="item active" >
                  <img src="images/1.jpg" alt="здесь должна быть картинка">
                  <div class="carousel-caption">
                    <h3 class="text-primary">Первый слайд</h3>
                    <p class="text-primary">Описание первого слайда</p>
                  </div>
                </div>
                <div class="item">            
                  <img src="images/2.jpg" alt="здесь должна быть картинка">
                  <div class="carousel-caption">
                    <h3>Второй слайд</h3>
                    <p>Описание второго слайда</p>
                  </div>
                </div>
                <div class="item">            
                  <img src="images/3.jpg" alt="здесь должна быть картинка">
                  <div class="carousel-caption">
                    <h3>Третий слайд</h3>
                    <p>Описание третьего слайда</p>
                  </div>
                </div>
              </div>

              {# Стрелки переключения слайдов: #}
              <a href="#carousel" class="left carousel-control" data-slide="prev">
                <span class="glyphicon glyphicon-chevron-left"></span>
              </a>
              <a href="#carousel" class="right carousel-control" data-slide="next">
                <span class="glyphicon glyphicon-chevron-right"></span>
              </a>
            </div>
            <!-- /Слайды -->

          {% endblock %}
        </div><!-- /.row -->
      </div><!-- /.container -->
      
      <div class="container-fluid">
        <div class="row">
              
          <footer class="navbar navbar-inverse navbar-static-top">
            <p>
              <a href="https://github.com/aleksandr-chasovnikov/ChasovBlog">Исходный код данного сайта</a> от <a href="https://github.com/aleksandr-chasovnikov">@aleksandr-chasovnikov</a>.
            </p>
            <p>
              <a href="#">Back to top</a>
            </p>
          </footer>
        </div><!-- /.row -->
      </div><!-- /.container -->
      {% block javascripts %}
        <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.js"></script>
        <!-- Include all compiled plugins (below), or include individual files as needed -->
        <script src="js/bootstrap.js"></script>
      {% endblock %}
    </div><!-- /.row -->
  </div><!-- /.container -->
</body>
</html>
