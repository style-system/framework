<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0">

	<!-- Localhost environment -->
	<link rel="stylesheet" href="static/css/all.css">
	<link rel="stylesheet" href="static/fonts/icons/style.css">
	<link rel="canonical" href="https://localista.com.br/design/" />
	<!-- Production environment -->
	<!--<link rel="stylesheet" href="static/css/all.min.css">-->

	<!--[if lt IE 9]>
		<script type="text/javascript" src="static/js/html5shiv.min.js"></script>
		<script type="text/javascript" src="static/js/respond.min.js"></script>
	<![endif]-->

	<title>XXX</title>
</head>
<body>




	<header class="header bg-primary">

		<!-- MOBILE -->

		<div class="header__mobile-bar hide-on:tablet">
			<div class="hamburguer f-left">
				<div class="hamburguer__linha"></div>
				<div class="hamburguer__linha"></div>
				<div class="hamburguer__linha"></div>
			</div>
			<div class="header__logo-mobile f-left"></div>		
			<div class="header__categorias truncate  color-snow bg-primary rounded-5">
				Categorias
				<span class="icon-category color-snow " style="font-size: 30px; vertical-align: middle;"></span>
			</div>			
		</div>

		<div class="pl-3 pr-3 pb-3 hide-on:tablet">
			<?php include 'parts/search.php' ?>			
		</div>

		<!-- / MOBILE -->


		<!-- DESKTOP -->
			<div class="header__meta show-on:tablet">
				<div class="container">
					<div class="row color-snow">
						<div class="col-md-12">
							<ul class=" fw-bold">
								<li><a href="#">O que é o XXX</a><li>
								<li><a href="#">Anuncine seus produto</a><li>
								<li><a href="#">Contato</a><li>
							</ul>					
						</div>
					</div>
				</div>			
			</div><!-- header__meta-bar -->

			<div class="header__nav pb-3 show-on:tablet">
				<div class="container">
					<div class="row">
						<div class="col-sm-3">
							<div class="header__logo"></div>
						</div>
						<div class="col-sm-6">
							<?php include 'parts/search.php' ?>	
						</div>
						<div class="col-sm-3">

							<div class="local rounded-5 f-right">
								<span class="icon-marker ico color-secondary"></span>
								<span class="text">Você está em:</span>
								<span class="text">Niterói</span>
							</div>

						</div>
					</div>
				</div>			
			</div><!-- header__meta-bar -->	

			<div class="hide-on:mobile  show-on:tablet shadow-1 bg-snow ">
				<div class="container">
					<div class="row">
						<div class="col-md-12">
							<a href="#" class="color-dark fw-bold p-3 d-inline-block">Categorias</a>
							<ul class="">
								<li></li>
							</ul>				
						</div>
					</div>
				</div>
			</div>

		<!-- / DESKTOP -->


	</header>



<nav>
	
</nav>


	<div class="p-2  hide-on:tablet" style="overflow: hidden">
		<div class="local color-dark border-dark   rounded-5 f-right">
			<span class="icon-marker ico"></span>
			<span class="text">Você está em:</span>
			<span class="text">Niterói</span>
		</div>
	</div>

	<section class="container container-produtos mb-3">
		<h2 class="huge color-dark mb-3">Produtos em Destaque</h2>
		<div class="row">
			<?php for ($i=1; $i < 13; $i++) : ?>
			<div class="col-xs-6 col-sm-3 col-md-3">
				<div class="box mb-3">
					<img class="bb-grey-light img-full center-block" src="static/images/md-<?php echo $i ?>.jpg" alt="">
					<hr class="separator"/>
					<div class="p-3">
						<span class="fw-bold md:fs-xxlarge color-dark">R$ 59.90</span> <span class="fs-small color-ui-success">6% Off</span><br>
						<a class="fs-small color-ui-success" href="#">Camisa de cowboy Uie</a><br>
						<span class="fs-tiny">Loja do josé</span>
					</div>
				</div>
			</div>
			<?php endfor ?>

		</div>
	</section>

	
	<section class="container container-produtos">
		<div class="row">
			<div class="col-md-12">
				<div class="bg-grey-light mb-5">
					<img class="img-responsive center-block" src="static/images/banner-1.jpg" alt="">
				</div>
			</div>
		</div>
	</section>

	<footer class="bg-dark color-grey t-center p-3 ">

		<div class="container">
			
			<div class="row">
				<div class="col-md-12">
					<h2 class="huge mb-3">Cadastre-se</h2>	
					<p class="">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolorem, sequi incidunt, totam, repellat numquam earum dignissimos facere deserunt esse illum temporibus. Consectetur repellendus sunt debitis delectus vero aut aliquam culpa.</p>
				</div>
			</div>

			<div class="row">
				<div class="col-md-12">
					<ul class="list-none">
						<li>Lorem ipsum dolor sit amet</li>
						<li>Lorem ipsum dolor sit amet</li>
						<li>Lorem ipsum dolor sit amet</li>
					</ul>
				</div>
			</div>

		</div>
	</footer>


	<!-- Localhost environment -->
	<script type="text/javascript" src="static/js/all.min.js"></script>

	<script>
		
	$(document).ready(function () {
	  
	  'use strict';
	  
	   var c, currentScrollTop = 0,
	       navbar = $('header');

	   $(window).scroll(function () {
	      var a = $(window).scrollTop();
	      var b = navbar.height();
	     
	      currentScrollTop = a;
	     
	      if (c < currentScrollTop && a > b + b) {
	        navbar.addClass("scrollUp");
	      } else if (c > currentScrollTop && !(a <= b)) {
	        navbar.removeClass("scrollUp");
	      }
	      c = currentScrollTop;
	  });
	  
	});


	</script>


	<!-- Production environment -->
	<!--<script type="text/javascript" src="static/js/all.min.js"></script>-->
</body>
</html>
