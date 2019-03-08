
	<?php include "parts/head.php"; ?>
	<?php include "parts/header.php"; ?>
	<?php include "parts/filters-mobile.php"; ?>
















	<div class="container">
		<div class="row">
			<div class="col col-3">

				<div class="box mb-3">
					<div class="media p-3">
						<div class="media-left">
							<a href="#">
								<img class="media-object" style="width: 50px;border-radius: 50%; border: 4px solid #2795c5" src="static/images/taco.png" alt="...">
							</a>
						</div>
						<div class="media-body">
						<h4 class="media-heading color-dark fw-bold fs-large mb-0" >Taco Store Niterói</h4>
							<p class="fs-small color-ui-success">
								Rua jacarandas, Nº 3, casa 02<br>
								Engenho do Mato, Niterói
							</p>
						</div>
					</div>

					<p class=" ta-center" style="font-size: 20px;">
						<i class="icon-twitter pl-2 pr-2"></i>
						<i class="icon-facebook pl-2 pr-2"></i>
						<i class="icon-instagram pl-2 pr-2"></i>						
					</p>


					<hr class="separator">

					<ul class="list-none p-3 fs-small">
						<li class="mb-3">
							<span class=" color-ui-success">
								<i class="icon-whatsapp va-middle  lh-1"></i> whatsapp
							</span>
							 (21) 98585-5858 
						</li>

						<li class="mb-0">
							<span class=" color-ui-success">
								<i class="icon-phone va-middle  lh-1"></i> Entrega
							</span>
							 (21) 98585-5858 
						</li>
					</ul>

					<hr class="separator">

					<a href="#" class="d-inline-block col-6 f-left ta-center fs-small p-2 fw-bold" style="border-right: 1px solid #ddd"> Mensagem</a>
					<a href="#" class="d-inline-block col-6 f-left ta-center fs-small p-2 fw-bold"> 
						Como Chegar
					</a>

				</div>


				<div class="box ">
					<h3 class="color-dark fw-bold p-3">Categorias</h3>	
					<div class="separator"></div>
					<ul class="p-3 list-none">
						<li>Nome da categoria</li>
						<li>Nome da categoria</li>
						<li>Nome da categoria</li>
						<li>Nome da categoria</li>
						<li>Nome da categoria</li>
						<li>Nome da categoria</li>
					</ul>
	
				</div>


			</div>
			<div class="col col-9">

				<section class="container mb-5">
					<div class="row">
						<div class="col col-12">
							<h2 class="color-dark">Produtos em destaque</h2>
							<div class="separator is-grey pb-3"></div>							
						</div>
					</div>
				</section>	


				<section class="container mb-3">
					<div class="row">

						<?php include "parts/listagem-produtos.php"; ?>
					</div>
				</section>	


			</div>

		</div>
	</div>
	
	
	<?php include "parts/footer.php"; ?>