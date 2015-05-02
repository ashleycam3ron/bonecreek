// sticky menu
jQuery(document).ready(function() {
    if(window.matchMedia('(min-width: 768px)').matches) {
        jQuery(".sticky").sticky({topSpacing:0});
    }
});

jQuery(".fancybox, .gallery a").fancybox({
	//padding: 0,
	helpers:  {
        title : {
            type : 'inside'
        }
    }
});

//remove empty p tags
jQuery('p').each(function() {
    var $this = $(this);
    if($this.html().replace(/\s|&nbsp;/g, '').length == 0)
        $this.remove();
});

//bootstrap for mobile
if (window.matchMedia('(min-width: 768px)').matches){
	jQuery(function($) {
		$('.navbar .dropdown').hover(function() {
			$(this).find('.dropdown-menu').first().stop(true, true).delay(250).slideDown();
		},
		function() {
			$(this).find('.dropdown-menu').first().stop(true, true).delay(100).slideUp();
		});

		$('.navbar .dropdown > a').click(function(){
			location.href = this.href;
		});
	});
}