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

	<?php include "parts/filters-mobile.php"; ?>

	<div class="container">
		<div class="row">
			<div class="col col-12 ta-right mb-3">
				<span class="js-open-mobile-filter color-primary">Filtrar</span>
			</div>
		</div>	
	</div>

	<div class="container_categoria">
		<div class="filter-bar d-none sm:d-block pl-3 pr-3 md:pl-3 md:pr-0">
			<?php include "parts/filters.php"; ?>

		</div><!-- /sidebarleft -->
		<div class="main-list-products">
			<section class="container mb-3">
				<div class="row">
					<?php include "parts/listagem-produtos.php"; ?>
				</div>
			</section>		
		</div><!-- /sidebar-left-content -->		
	</div><!-- /container_categoria -->





	<!-- Localhost environment -->
	<script type="text/javascript" src="static/js/all.min.js"></script>

	<script>

		function filterMobile(){

			$('.js-show-filter').on('click', showFilter);
			$('.js-open-mobile-filter').on('click', openMobileFilter);
			$('.js-close-mobile-filter').on('click', closeMobileFilter);

			function showFilter(){
				hideAllFilters();
				$('.js-show-filter').removeClass('active');
				$(this).addClass('active');
				var id = $(this).attr('data-filter');
				show(id);
			}

			function show(id){
				$('#'+id).show();
			}

			function showFirtFilter(){
				$('.js-show-filter').removeClass('active');
				var el = $('.js-show-filter').eq(0);
				el.addClass('active');
				var id = el.attr('data-filter');
				show(id);
			}

			function hideAllFilters(){
				$('.js-mobile-filter').hide();
			}

			function openMobileFilter(){
				hideAllFilters()
				showFirtFilter()
				$('.mobile-filter').addClass('is-open');
			}

			function closeMobileFilter(){
				$('.mobile-filter').removeClass('is-open');
			}

			// openMobileFilter();
		}


		filterMobile()

	</script>


	<!-- Production environment -->
	<script type="text/javascript" src="static/js/all.min.js"></script>
</body>
</html>
