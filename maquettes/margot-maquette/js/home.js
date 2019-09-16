$(function(){

	
	w_height = $(window).height();
	$('.section').css('min-height',w_height);

	//Défilement fluide
	$(function() {
	  $('a[href*=#]:not([href=#])').click(function() {
	    if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') 
	      || location.hostname == this.hostname) {

	      var target = $(this.hash);
	      target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
	      if (target.length) {
	        $('html,body').animate({
	          scrollTop: target.offset().top
	        }, 1000);
	        return false;
	      }
	    }
	  });
	});


	var height_divided = Math.round(w_height/3);
	$('.case').css('min-height',height_divided+'px');
	$('.case-pannel').css('min-height',height_divided+'px');

	$('.case').css('max-height',height_divided+'px');
	$('.case-pannel').css('max-height',height_divided+'px');





	$('.main-center').css('display','inline-block');
	$('.main-center').css('transform-origin','center center');
	$('.main-center').css('position','absolute');

	var middle_height = $(window).height();
	var middle_height = parseInt(middle_height);
	var middle_height = Math.round(middle_height/2);

	var middle_width = $(window).width();
	var middle_width = parseInt(middle_width);
	var middle_width = Math.round(middle_width/2);

	var middle_element_w = $('.main-center').width();
	var middle_element_w = parseInt(middle_element_w);
	var middle_element_w = Math.round(middle_element_w/2);

	var middle_element_h = $('.main-center').height();
	var middle_element_h = parseInt(middle_element_h);
	var middle_element_h = Math.round(middle_element_h/2);

	var top_position = middle_height-middle_element_h;
	var left_position = middle_width-middle_element_w;

	$('.main-center').css('top',top_position);
	$('.main-center').css('left',left_position);

	$('.full-height').css('min-height',$(window).height());



	$('.collection-img').css('opacity',0);

	$('.fadeIn').css('opacity',0);
	$('.fadeIn').css('margin-top','50px');

	$('.fadeIn-2').css('opacity',0);
	$('.fadeIn-3').css('opacity',0);
	$('.fadeIn-4').css('opacity',0);

	// $('.fadeIn').animate({marginTop:0});
	$('.fadeIn').delay(2000).animate({marginTop:0,opacity:1},3000,'easeInOutExpo',function(){

		$('.fadeIn-2').delay(50).animate({opacity:1},800,'easeInOutCubic',function(){
			$('.fadeIn-3').delay(300).animate({opacity:1},500,'easeInOutCubic',function(){
				$('.fadeIn-4').delay(200).animate({opacity:1},400,'easeInOutCubic',function(){

					$(".collection-img").delay(2000).each(function(index){
					    $(this).delay(500*index).animate({opacity:1},800,'easeInOutExpo');		
					});

					$(".slideshow .imgLiquid:first").delay(500).fadeIn(3000,startSlideShow());


				});
			});
		});
	});
	

	/*
	$('p').animate({
	    left: '+=90px',
	    top: '+=150px',
	    opacity: 0.25
	  }, 900, 'linear', function() {
	    // function code on animation complete
	});
	*/


	$(".imgLiquid").imgLiquid({


    	fill: false,
    	verticalAlign:'center',    // 'center' //  'top'   //  'bottom' // '50%'  // '10%'
    	horizontalAlign:'center'    // 'center' //  'left'  //  'right'  // '50%'  // '10%'

	});

	$(".slideshow .imgLiquid").hide();
	/*$(".slideshow .imgLiquid:first").delay(6000).fadeIn(3000,startSlideShow());*/
	$("#slideshow > .imgLiquid:gt(0)").hide();
	
	function startSlideShow(){
		setInterval(function() { 
		  $('.slideshow > .imgLiquid:first')
		    .fadeOut(1000)
		    .next()
		    .fadeIn(1000)
		    .delay(1000)
		    .end()
		    .appendTo('.slideshow');
		},  8000);

	}
	

});