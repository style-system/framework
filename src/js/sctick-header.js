

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

	stickHeader()
