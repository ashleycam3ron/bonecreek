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