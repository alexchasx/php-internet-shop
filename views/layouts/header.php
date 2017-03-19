<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="">
	<meta name="keywords" content="">
	<meta name="author" content="">
	<title>Главная</title>
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
	<div class="page-wrapper">

		<header id="header">
			<div class="header_top">
				<div class="container">
					<div class="row">
						<div class="col-sm-6">
							<div class="contactinfo">
								<ul class="nav nav-pills">
									<li><a href=""><i class="fa fa-phone"></i> +38 093 000 11 22</a></li>
									<li><a href=""><i class="fa fa-envelope"></i></a>aleksandr.chasovnikov@gmail.com</li>
								</ul>
							</div>
						</div>
						<div class="col-sm-6">
							<div class="social-icons pull-right">
								<ul class="nav nav-bar-nav">
									<li><a href="#"><i class="fa fa-facebook">На сайт</i></a></li>
									<li><a href="#"><i class="fa fa-google-plus">На сайт</i></a></li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>

			<div class="header-middle">
				<div class="container">
					<div class="row">
						<div class="col-sm-4">
							<div class="logo pull-left">
								<a href="/"><img src="/template/images/home/logo.png" alt="logo"></a>
							</div>
						</div>
						<div class="col-sm-8">
							<div class="shop-menu pull-right">
								<ul class="nav navbar-nav">
									<li>
										<a href="/cart">
											<i class="fa fa-shopping-cart"></i> Корзина (<span id="cart-count"><?php echo Cart::countItems(); ?></span>)
										</a>
									</li>
								<?php if (User::isGuest()): ?>
									<li><a href=""><i class="fa fa-"></i> Вход</a></li>
								<?php else: ?>
									<li><a href=""><i class="fa fa-"></i></a></li>
									<li><a href=""><i class="fa fa-"></i></a></li>
								<?php endif; ?>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div><!--/header-middle-->

			<div class="header-bottom">
				<div class="container">
					<div class="row">
						<div class="col-sm-12">

							<div class="navbar-header">
								<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="">
									<span class="sr-only">Переключить навигацию</span>
									<span class="icon-bar"></span>
									<span class="icon-bar"></span>
									<span class="icon-bar"></span>
								</button>
							</div>
							<div class="mainmenu pull-left">
								<ul class="nav navbar-nav collapse navbar-collapse">
									<li><a href="/">Главная</a></li>
									<li class="dropdown"><a href="#">Магазин<i class="fa fa-angle-down"></i></a>
										<ul role="menu" class="sub-menu">
											<li><a href="/catalog/">Каталог товаров</a></li>
											<li><a href="/cart/">Корзина</a></li>
										</ul>
									</li>
									<li><a href="/blog/">Блог</a></li>
									<li><a href="/about/">О магазине</a></li>
									<li><a href="/contacts/">Контакты</a></li>
								</ul>
							</div>

						</div>
					</div>
				</div>
			</div><!--/header-bottom-->

		</header>

	</div>
</body>