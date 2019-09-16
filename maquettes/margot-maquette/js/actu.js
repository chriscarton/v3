w_height = $(window).height();

d_height = $(document).height();
$('.full-height').css('min-height',d_height);
// $('.full-height').css('min-height',w_height);

var height_divided = Math.round(w_height/3);
$('.case').css('min-height',height_divided+'px');
$('.case-pannel').css('min-height',height_divided+'px');

$('.case').css('max-height',height_divided+'px');
$('.case-pannel').css('max-height',height_divided+'px');

$('.case').hide();
// $('.menu-item').hide();



$(".case").each(function(index) {
    $(this).delay(500*index).fadeIn(2000);




});


