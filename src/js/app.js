

$(document).ready(function(){
	
});

$('.slider-produto').slick({
});
$('.thumb-slider-produto').slick({
	infinite: false,
	vertical:true,
	verticalSwiping:true,
	slidesToShow: 4,
	slidesToScroll: 4,
	adaptiveHeight: true,
	arrows: false
});
$('.slider-produto').on('afterChange', function(event, slick, currentSlideIndex){
	$('.thumb-slider-produto').slick('slickGoTo',currentSlideIndex);
});

$('.thumb-slider-produto__item').click(function(){
	var index = $('.thumb-slider-produto__item').index(this);
	console.log(index)
	$('.slider-produto').slick('slickGoTo', index);
})

$(window).load(function() {
  // The slider being synced must be initialized first
  $('#carousel').flexslider({
    animation: "slide",
    controlNav: false,
    animationLoop: false,
    slideshow: false,
    itemWidth: 100,
    itemMargin: 0,
    asNavFor: '#slider'
  });
 
  $('#slider').flexslider({
    animation: "slide",
    controlNav: false,
    animationLoop: false,
    slideshow: false,
    sync: "#carousel"
  });
});