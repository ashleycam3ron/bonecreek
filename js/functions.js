// sticky menu
jQuery(document).ready(function() {
    if(window.matchMedia('(min-width: 700px)').matches) {
        jQuery(".sticky").sticky({topSpacing:0});
    }
});

jQuery(".fancybox").fancybox({
	padding: 0,
	helpers:  {
        title : {
            type : 'outside'
        }
    }
});

jQuery('p').each(function() {
    var $this = $(this);
    if($this.html().replace(/\s|&nbsp;/g, '').length == 0)
        $this.remove();
});

jQuery(function($) {
$('.navbar .dropdown').hover(function() {
$(this).find('.dropdown-menu').first().stop(true, true).delay(250).slideDown();

}, function() {
$(this).find('.dropdown-menu').first().stop(true, true).delay(100).slideUp();

});

$('.navbar .dropdown > a').click(function(){
location.href = this.href;
});

});

/*
jQuery(document).ready(function(){
	jQuery('ul#menu-main li').hover(
		function(){
			jQuery(this).children('ul.sub-menu').dequeue().stop().show();
		},
		function(){
			jQuery(this).children('ul.sub-menu').dequeue().stop().hide();
		});
});
jQuery(document).ready(function(){
	$('ul.sub-menu li:last-child').css({border: '0'});
});
*/