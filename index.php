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
			<?php include "parts/header-mobile.php"; ?>
		<!-- / MOBILE -->

		<!-- DESKTOP -->
		<?php include "parts/header-desktop.php"; ?>
		<!-- / DESKTOP -->

	</header>

	<div class="p-2  hide-on:tablet" style="overflow: hidden">
		<div class="local color-dark border-dark   rounded-5 f-right">
			<span class="icon-marker ico"></span>
			<span class="text">Você está em:</span>
			<span class="text">Niterói</span>
		</div>
	</div>

	<section class="container mb-3">
		<div class="row">
			<?php include "parts/listagem-produtos.php"; ?>
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


	<!-- Localhost environment -->
	<script type="text/javascript" src="static/js/all.min.js"></script>

<script>


	function stickHeader() {

		var c;
		var currentScrollTop = 0;
		var navbar = $('header');

		function scrollMenu(){
			var a = $(window).scrollTop();
			var b = navbar.height();

			currentScrollTop = a;

			if (c < currentScrollTop && a > b + b) {
				addTranslateY(b*(-1))
			} else if (c > currentScrollTop && !(a <= b)) {
				addTranslateY(0)
			}
			c = currentScrollTop;
		}

		function addTranslateY(value){
			$('header').css({'transform' : 'translateY('+ value +'px)'});
		}

		function setBodyHeaderPadding(){
			var height = navbar.height();
			$('body').css('padding-top', height + 10);
		}

		$(document).ready(function () {
			$( window ).scroll(scrollMenu);
			$( window ).resize(setBodyHeaderPadding);
		});

		setBodyHeaderPadding();

	}




	</script>


	<!-- Production environment -->
	<!--<script type="text/javascript" src="static/js/all.min.js"></script>-->
</body>
</html>
