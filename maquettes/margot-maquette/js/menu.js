w_height = $(window).height();

d_height = $(document).height();
$('.full-height').css('min-height',d_height);

var parent_width = $('.fixed-menu').parent().width();
$('.fixed-menu').css('width',parent_width);

/*
$(".menu-item").each(function(index) {
    $(this).delay(500*index).fadeIn(2000);
});
*/

var entete_height = $('.entete').height();

var menu_height = $('.main-menu').height();

var margin_top = w_height-menu_height;
var margin_top = margin_top/2;
var margin_top = Math.round(margin_top);
var margin_top = margin_top-entete_height-20;
// alert(margin_top);

$('.main-menu').css('margin-top',margin_top+'px');


var active_page = $('.active-page').text();
// alert(active_page);

var found = $('.main-menu').find("a[href$='index.php?p="+active_page+"']");
$(found).addClass('bold');
// console.log(found);