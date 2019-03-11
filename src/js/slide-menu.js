function slideMenu(){

	var zIndex = 99;

	function open(){
		$('.slide-menu').toggleClass('is-open');
	}

	function openPanel(){
		
		var panelId = $(this).attr('data-open-panel-id');
		console.log('OPEN: '+panelId)
		increaseZIndex(panelId)
		rmToLeft(panelId);
		rmToRight(panelId);
		addToCenter(panelId);
	}


	function closePanel(){
		var panel = $(this).parents('.mobile-screen');
		var panelId = panel.attr('data-menu-id');
		console.log('CLOSE: '+panelId)
		rmToCenter(panelId);
		rmToLeft(panelId);
		addToRight(panelId);
	}

	function increaseZIndex(panelId){
		zIndex++
		console.log('z-index: ', zIndex);
		$('[data-menu-id="'+ panelId +'"]').css('zIndex', zIndex);
	}

	function addToLeft(panelId){
		$('[data-menu-id="'+ panelId +'"]').addClass('tx-left');
	}

	function rmToLeft(panelId){
		$('[data-menu-id="'+ panelId +'"]').removeClass('tx-left');
	}

	function addToRight(panelId){
		$('[data-menu-id="'+ panelId +'"]').addClass('tx-right');
	}

	function rmToRight(panelId){
		$('[data-menu-id="'+ panelId +'"]').removeClass('tx-right');
	}

	function addToCenter(panelId){
		$('[data-menu-id="'+ panelId +'"]').addClass('tx-center');
	}

	function rmToCenter(panelId){
		$('[data-menu-id="'+ panelId +'"]').removeClass('tx-center');
	}


	$('.js-slide-menu-toggle').on('click', open);
	$('.js-slide-menu-close').on('click', closePanel);
	$('.open').on('click', openPanel);
}

slideMenu();