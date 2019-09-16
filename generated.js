$(function(){

	setTimeout(function() {
		$('.generated-text').css('display','inline');
		$('.generated-link').css('display','inline');

		var adresse = 'webmaster';
		var domaine = 'chris-carton.com';
		$('.generated-text').append(adresse+'@'+domaine);

		var html = '<a class="contact_link" href="mailto:'+adresse+'@'+domaine+'">'+adresse+'@'+domaine+'</a>';
		
		$('.generated-link').html(html);


	}, 1500);
});