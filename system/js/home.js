$(function(){
	$('.flash').animate({
	    top: '+=100px',
	    opacity: 1
	  // }, 900, 'easeInOutCubic', function() {
	  }, 1500, 'easeInOutBack', function() {
	    // function code on animation complete
	});

    $('.textillate').textillate({ 
	  in: { effect: 'bounceIn' },
	  out: { effect: 'bounceOut' },

	});

	$('.editable').focus(function(){
		$(this).css('background-color','white');
	});

	$('.editable').focusout(function(){
		$(this).css('background-color','transparent');
	});

});

(function() {

    var quotes = $(".quote");
    var quoteIndex = -1;
    
    function showNextQuote() {
        ++quoteIndex;
        quotes.eq(quoteIndex % quotes.length)
            .fadeIn(500)
            .delay(3500)
            .fadeOut(500, showNextQuote);
    }
    
    showNextQuote();
    
})();


$('.iphone').hover(function() {
    $(this).css('z-index',9999);
  }, function(){
    $(this).css('z-index',1);
  }
);

new WOW().init();