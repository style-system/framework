<?php 
	
	$filters = [

		'tipo' => [
			'title'=> 'Tipo',
			'options' => [
				['key' => 'key', 'value' => 'Casual'],
				['key' => 'key', 'value' => 'Social'],
				['key' => 'key', 'value' => 'Outras'],
			]
		],
		'manga' => [
			'title'=> 'Manga',
			'options' => [
				['key' => 'key', 'value' => 'Manga Curta'],
				['key' => 'key', 'value' => 'Manga Longa'],
				['key' => 'key', 'value' => 'Sem Mangas'],
				['key' => 'key', 'value' => 'Outras'],
			]
		],
		'tamanho' => [
			'title'=> 'Tamanho',
			'options' => [
				['key' => 'key', 'value' => 'P'],
				['key' => 'key', 'value' => 'M'],
				['key' => 'key', 'value' => 'G'],
				['key' => 'key', 'value' => 'GG'],
			]
		],
		'tamanhoq' => [
			'title'=> 'Tamanho',
			'options' => [
				['key' => 'key', 'value' => 'P'],
				['key' => 'key', 'value' => 'M'],
				['key' => 'key', 'value' => 'G'],
				['key' => 'key', 'value' => 'GG'],
			]
		],
		'tamanhow' => [
			'title'=> 'Tamanho',
			'options' => [
				['key' => 'key', 'value' => 'P'],
				['key' => 'key', 'value' => 'M'],
				['key' => 'key', 'value' => 'G'],
				['key' => 'key', 'value' => 'GG'],
			]
		],
		'tamanhoe' => [
			'title'=> 'Tamanho',
			'options' => [
				['key' => 'key', 'value' => 'P'],
				['key' => 'key', 'value' => 'M'],
				['key' => 'key', 'value' => 'G'],
				['key' => 'key', 'value' => 'GG'],
			]
		],
		'tamanhor' => [
			'title'=> 'Tamanho',
			'options' => [
				['key' => 'key', 'value' => 'P'],
				['key' => 'key', 'value' => 'M'],
				['key' => 'key', 'value' => 'G'],
				['key' => 'key', 'value' => 'GG'],
			]
		],
		'tamanhot' => [
			'title'=> 'Tamanho',
			'options' => [
				['key' => 'key', 'value' => 'P'],
				['key' => 'key', 'value' => 'M'],
				['key' => 'key', 'value' => 'G'],
				['key' => 'key', 'value' => 'GG'],
			]
		],


	];


 ?>


<div class="mobile-filter">

	<div class="bar fs-large">
		<span class="icon-left-chevron back-icon js-close-mobile-filter" ></span>
		Filtros
	</div>
	<div class="content">

		<div class="filter-tab">
			<?php foreach ($filters as $key => $filter) : ?>
				<div class="filter-tab-item js-show-filter" data-filter="filter-<?php echo $key ?>">
					<?php echo $filter['title'] ?>
				</div>
			<?php endforeach?>
		</div>

		<div class="filter-content">

			<?php foreach ($filters as $key => $filter) : ?>

				<div class="js-mobile-filter" style="display: none" id="filter-<?php echo $key ?>">
					<h2 class="filter-list-title mb-3 "><?php echo $filter['title'] ?></h2>
					<ul class="list-none">
						<?php foreach($filter['options'] as $option): ?>
							<li class="filter-list-iten"><?php echo $option['value'] ?></li>
						<?php endforeach; ?>
					</ul>
				</div>

			<?php endforeach?>

		</div>		


	</div><!-- content -->
</div>