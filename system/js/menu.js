$(function(){

	$('#Menu').hide();

	var width = $('#Menu').width();
	$('#Menu').css({right:-width});

	
	
	$('.close').click(function(){
		var width = $(this).parent().width();
		var parent = $(this).parent();

		$(parent).animate({right:-width});
	});

	$('.open').click(function(){
		$('#Menu').show();
		$('#Menu').animate({right:0});
		var element = $('#Menu_content');
		var element_parent = $('#Menu');
			centrer(element,element_parent);

	});
	
});