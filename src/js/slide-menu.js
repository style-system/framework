function slideMenu(){

	function open(){
		$('.slide-menu').toggleClass('is-open');
	}

	function openPanel(){
		var panelId = $('[data-open-panel-id]').attr('data-open-panel-id');
		rmToLeft(panelId);
		rmToRight(panelId);
		addToCenter(panelId);
	}


	function closePanel(){
		var panel = $(this).parents('.slide-menu__panel');
		var panelId = panel.attr('data-menu-id');

		rmToCenter(panelId);
		rmToLeft(panelId);
		addToRight(panelId);
	}

	function addToLeft(panelId){
		$('[data-menu-id="'+ panelId +'"]').addClass('is-left');
	}
	function rmToLeft(panelId){
		console.log('asdasd')
		$('[data-menu-id="'+ panelId +'"]').removeClass('is-left');
	}

	function addToRight(panelId){
		$('[data-menu-id="'+ panelId +'"]').addClass('is-right');
	}
	function rmToRight(panelId){
		$('[data-menu-id="'+ panelId +'"]').removeClass('is-right');
	}

	function addToCenter(panelId){
		$('[data-menu-id="'+ panelId +'"]').addClass('is-center');
	}
	function rmToCenter(panelId){
		$('[data-menu-id="'+ panelId +'"]').removeClass('is-center');
	}



	// function moveToLeft(panelId){
	// 	$('[data-menu-id="'+ panelId +'"]').removeClass('is-right')
	// 	$('[data-menu-id="'+ panelId +'"]').removeClass('is-center')
		
	// 	return this;
	// }

	// function moveToRight(panelId){
		
	// 	$('[data-menu-id="'+ panelId +'"]').addClass('is-right')
	// 	return this;		
	// }

	// function moveToCenter(panelId){
	// 	$('[data-menu-id="'+ panelId +'"]').removeClass('is-left');
	// 	$('[data-menu-id="'+ panelId +'"]').removeClass('is-right');
	// 	$('[data-menu-id="'+ panelId +'"]').addClass('is-center');
	// 	return this;
	// }




	// function moveToLeft(panelId){
	// 	$('[data-menu-id="'+ panelId +'"]').removeClass('is-right')
	// 	$('[data-menu-id="'+ panelId +'"]').removeClass('is-center')
	// 	$('[data-menu-id="'+ panelId +'"]').addClass('is-left')
	// 	return this;
	// }

	// function moveToRight(panelId){
	// 	$('[data-menu-id="'+ panelId +'"]').removeClass('is-left')
	// 	$('[data-menu-id="'+ panelId +'"]').addClass('is-right')
	// 	return this;		
	// }

	// function moveToCenter(panelId){
	// 	$('[data-menu-id="'+ panelId +'"]').removeClass('is-left');
	// 	$('[data-menu-id="'+ panelId +'"]').removeClass('is-right');
	// 	$('[data-menu-id="'+ panelId +'"]').addClass('is-center');
	// 	return this;
	// }

	$('.js-slide-menu-toggle').on('click', open);
	$('.js-slide-menu-close').on('click', closePanel);
	$('[data-open-panel-id]').on('click', openPanel);
}

slideMenu();