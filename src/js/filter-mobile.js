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
