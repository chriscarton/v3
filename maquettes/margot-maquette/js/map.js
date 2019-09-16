    $('.sub-address').hide();
    $('.link-sub-address').click(function(){
        $(this).next('.sub-address').slideToggle();
    });


    var locations = [
    	['Paris',48.8589719,2.3482615,9],
    	//Agences Web
    	['Paris Web Studio <br/>2 rue Sisley<br/><a target="blank" href="http://www.pariswebstudio.fr">http://www.pariswebstudio.fr</a>',
    	48.8898451,2.3027723,9],
    	['Octave <br/>38 rue des Blancs Manteaux<br/><a target="blank" href="http://www.octaveoctave.com">http://www.octaveoctave.com</a>',
    	48.8597458,2.3552856,9],
    	['MM Création <br/>32, avenue Wagram<br/><a target="blank" href="http://www.mmcreation.com">http://www.mmcreation.com</a>',
    	48.8768108,2.2975392,9],
    	['Smart Agence <br/>3, rue Geoffroy Marie<br/><a target="blank" href="http://www.smartagence.com">http://www.smartagence.com</a>',
    	48.8734042,2.3432422,9],
    	['Twinbi <br/>5 square Trudaine<br/><a target="blank" href="https://www.twinbi.com">https://www.twinbi.com</a>',
    	48.8796455,2.3406203,9],
    	['Agence Fabrique <br/>192 Rue Cardinet <br/><a target="blank" href="http://agencefabrique.com">http://agencefabrique.com</a>',
    	48.8913184,2.3184628,9],
    	['Sismeo <br/>42 rue Monge <br/><a target="blank" href="http://www.sismeo.com">http://www.sismeo.com</a>',
    	48.8455384,2.3517734,9],
    	['Coheractio <br/>57, rue d\'Amsterdam <br/><a target="blank" href="http://www.coheractio.com/">http://www.coheractio.com/</a>',
    	48.8805775,2.3268337,9],
    	['Novius <br/>16, rue Saint Nicolas <br/><a target="blank" href="http://www.novius.com/">http://www.novius.com/</a>',
    	48.8507908,2.3744429,9],
    	['Newround <br/>120 Rue Raymond Losserand <br/><a target="blank" href="http://www.newround.net/">http://www.newround.net/</a>',
    	48.832085,2.3143548,9],
    	['Agence Clark <br/>14 rue d’Uzès <br/><a target="blank" href="http://www.agence-clark.com/">http://www.agence-clark.com/</a>',
    	48.8708109,2.3434519,9],
    	['Simple Web Agency <br/>65 Rue St Nicolas<br/><a target="blank" href="http://www.simplewebagency.com/">http://www.simplewebagency.com/</a>',
    	48.8515857,2.3748362,9],

    	//Coworking
    	['Soleille (coworking) <br/>13 rue Vivienne<br/>',
    	48.8681937,2.3392911,9],
    	['Le Tank (coworking) <br/>50 rue de Montreuil<br/>',
    	48.8502736,2.3890046,9],
    	['La Cantine (coworking) <br/>12 Galerie Montmartre<br/>',
    	48.8705233,2.3424042,9],
    	['La Mutinerie (coworking) <br/>29 rue de Meaux<br/>',
    	48.8795595,2.3717432,9],
    	
    	//29 rue de Meaux
    	

    	
    	// 'Agence Fabrique <br/><a target="blank" href="http://agencefabrique.com">http://agencefabrique.com</a>',
    	// 48.8913184,2.3184628,9]
		
    ];
 
    var map = new google.maps.Map(document.getElementById('map'), {
      zoom: 5,
      // center: new google.maps.LatLng(47.4,1.6),
      center: new google.maps.LatLng(48.8589,2.3372),
          mapTypeControl: true,
        mapTypeControlOptions: {
      style: google.maps.MapTypeControlStyle.DROPDOWN_MENU
    },
    navigationControl: true,
     navigationControlOptions: {
        style: google.maps.NavigationControlStyle.SMALL,
        position: google.maps.ControlPosition.TOP_RIGHT
    },
        scaleControl: true,
    streetViewControl: false,
      mapTypeId: google.maps.MapTypeId.ROADMAP
    });
 
    var infowindow = new google.maps.InfoWindow();
 
    var marker, i;
 
   for (i = 0; i < locations.length; i++) {  
      marker = new google.maps.Marker({
        position: new google.maps.LatLng(locations[i][1], locations[i][2]),
        map: map
      });
 
      google.maps.event.addListener(marker, 'click', (function(marker, i) {
        return function() {
          infowindow.setContent(locations[i][0]);
          infowindow.open(map, marker);
        }
      })(marker, i));
    }
