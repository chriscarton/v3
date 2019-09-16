$('.sous-menu').hide();
$('.menu-item').next('.sous-menu').hide();

$('#menu-header').click(function(){
	if($(this).next('.sous-menu').is(':visible')){
		reboot();
	}
	$(this).next('.sous-menu').slideToggle();
	
})

$('.menu-item').click(function(){


	// $(this).parent().prev('.menu-item').css('text-decoration','underline');
	$(this).siblings('.menu-item').slideToggle();
	$(this).toggleClass('active');
});


$('.menu-item').click(function(){
	$(this).next('.sous-menu').find('.menu-item').show();
	$(this).next('.sous-menu').find('.menu-item').next('.sous-menu').hide();
	$(this).next('.sous-menu').slideToggle();
	$(this).addClass('active');
	$('*').not($(this)).removeClass('active');
});



$('#menu > .sous-menu > .menu-item').css('font-size','1.1em');
$('#menu > .sous-menu > .menu-item').next('.sous-menu').css('font-style','italic');


function reboot(){
	$('.menu-item').show();
	$('.menu-item').next('.sous-menu').hide();
}