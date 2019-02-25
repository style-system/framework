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


<?php foreach ($filters as $filter) : ?>

	<div class="filter hide-on:desktop">
		<h2 class="filter__title"><?php echo $filter['title'] ?></h2>
		
		<ul class="filter__option-list">
			<?php foreach($filter['options'] as $option): ?>
				<li class="filter__option"><?php echo $option['value'] ?></li>
			<?php endforeach; ?>
		</ul>
	</div>

<?php endforeach?>
