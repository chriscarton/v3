$(function(){
	
	var window_height = $(window).height();

	window_height = parseInt(window_height);
	window_height = Math.round(window_height);

	$('section.row').css('minHeight',window_height);
	$('.follow_height').css('minHeight',window_height);


	function centrer(element, element_parent){
	  var height = $(element).height();
	  var height_parent = $(element_parent).height();
	  if(height_parent > height){
	    var height_parent_middle = (height_parent/2);
	    var height_middle = (height/2);
	    var center = height_parent_middle - height_middle;
	    $(element).css({'margin-top':center+'px'});
	  }
	}



	//Accueil
	var element = $('#Accueil_content');
	var element_parent = $(element).parent();

	centrer(element,element_parent);

	// //Offres
	// var element = $('#Offres_content');
	// var element_parent = $('#Offres');

	centrer(element,element_parent);

	//Mobile
	var element = $('#Mobile_content');
	var element_parent = $('#Mobile');

	centrer(element,element_parent);

	//Email
	var element = $('#Email_content');
	var element_parent = $('#Email');

	centrer(element,element_parent);

	//Technos
	var element = $('#Technos_content');
	var element_parent = $('#Technos');

	centrer(element,element_parent);

	//Services
	var element = $('#Talents_content');
	var element_parent = $('#Talents');

	centrer(element,element_parent);

	//Contact
	var element = $('#Contact_content');
	var element_parent = $('#Contact');

	centrer(element,element_parent);

	//Citation
	var element = $('#Quote_content');
	var element_parent = $('#Quote');

	centrer(element,element_parent);







});