
	<?php include "parts/head.php"; ?>
	<?php include "parts/header.php"; ?>
	<?php include "parts/filters-mobile.php"; ?>
	<?php include "parts/slide-menu.php"; ?>


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

<?php include "parts/footer.php"; ?>
