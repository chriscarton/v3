//Détermine le nombre de slides pour le container
var containerWidth = $('.slider-container').width();
var slideWidth = containerWidth/3;
var slideWidth = Math.round(slideWidth);
$('.slide').css('width',slideWidth);

var sliderContainerHeight = $('.slider-container').height();
var windowHeight = $(window).height();

var marginTop = windowHeight-sliderContainerHeight;
var marginTop = marginTop/2;
var marginTop = Math.round(marginTop);
$('.site').css('margin-top',marginTop);


$('.slideTo').click(function(){
	var slideNumber = $(this).find('.slideNumber').text();
	var slideNumber = parseInt(slideNumber);

	var found = $('span.slideId:contains("'+slideNumber+'")');
	var parent = $(found).parent();
	var offset = parent.offset();
	var decalage = offset.left;

	var offset_slider = $('.slider').offset();
	var offset_slider_left = offset_slider.left;

	var decalage = decalage-offset_slider_left;

	$('.slider').animate({'margin-left':-decalage+'px'});

});

$('.slidePrev').click(function(){

	var found = $('span.slideId:first');
	var parent = $(found).parent();
	var slide_width = parent.width();
	console.log(slide_width);
	slide_width = slide_width + 10;
	
	$('.slider').animate({'margin-left':'-='+slide_width+'px'});
	// $('.slider').animate({'left':'-='+slideWidth+'px'},500,easing);
	
});

$('.slideNext').click(function(){
	
	var found = $('span.slideId:first');
	var parent = $(found).parent();
	var slide_width = parent.width();
	console.log(slide_width);
	slide_width = slide_width + 10;
	
	$('.slider').animate({'margin-left':'+='+slide_width+'px'});

	// $('.slider').animate({'margin-left':-decalage+'px'});

});

//MCustomScrollBar
/*
(function($){
   $(window).load(function(){
      $(".slideBody").mCustomScrollbar({theme:"dark"});
   });
})(jQuery);
*/

// Centers on screen
jQuery.fn.center = function (div) {
    this.css("position", "absolute");

    var position = div.position();
    this.css("top", Math.max(0, ((div.height() - this.outerHeight()) / 2) + position.top) + "px");
    
    this.css("left", Math.max(0, ((div.width() - this.outerWidth()) / 2) + position.left) + "px");
    return this;
};

$('.new-product-content').hide();
$('.new-product').center($('.slide')).show();
//use
$('.new-product').hover(function(){
	$(this).find('.new-product-content').slideDown();
},function(){
	$(this).find('.new-product-content').slideUp();
});

$('.slide').hide();

$(".slide").each(function(index) {
    $(this).delay(500*index).fadeIn(800);
});


//Déclenche le lien au click sur l'image (qui est en fait une div)
$('.new-product-img').click(function(){
	var parent = $(this).parent();
	var link = $(parent).find('.new-product-button');

	var href = link.attr('href');
	window.location.href = href;
});


$(function(){
	var windowHeight = $(window).height();
	// alert(windowHeight);
	
	var centerHeight = $('.center').height();


	// alert(centerHeight);
	var centerHeight = centerHeight/2;
	var centerHeight = Math.round(centerHeight);
	// alert(centerHeight);

	$('.center').css('margin-top',centerHeight+'px');
});