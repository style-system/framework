
	<?php include "parts/head.php"; ?>
	<?php include "parts/header.php"; ?>
	<?php include "parts/filters-mobile.php"; ?>
	<?php include "parts/slide-menu.php"; ?>

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

	<?php include "parts/footer.php"; ?>