

/* ====================================================================================
Scroll JS
==================================================================================== */

/* ====================================================================================
Scroll Reveal JS
==================================================================================== */

var config = {
    mobile:   true,
    reset:    true,
    easing: 'ease-out',
    wait:     '0.2s',
    vFactor: 1
}

window.sr = new scrollReveal(config);

/* ====================================================================================
Count Up JS
==================================================================================== */

$(document).ready(function(){

    /* Count up */
    var options = {
      useEasing : true, 
      useGrouping : true, 
      separator : ',', 
      decimal : '.' 
    }
    
    $('.gem-milestone').each(function(){
        
        var name = $(this).find('small').html().replace(/ /g, '').toLowerCase();
        
        var e = $(this).find('h4');
        
        e.attr('id', name);
        
        var id = e.attr('id');
        var end = e.html();
        var milestone = new countUp(id, 0, end, 0, 2, options);
        milestone.start();
    });
    
});


/* ====================================================================================
Timeline JS
==================================================================================== */
jQuery(document).ready(function($){
	var $timeline_block = $('.gem-timeline-block');

	//hide timeline blocks which are outside the viewport
	$timeline_block.each(function(){
		if($(this).offset().top > $(window).scrollTop()+$(window).height()*0.75) {
			$(this).find('.gem-timeline-icon, .gem-timeline-content').addClass('is-hidden');
		}
	});

	//on scolling, show/animate timeline blocks when enter the viewport
	$(window).on('scroll', function(){
		$timeline_block.each(function(){
			if( $(this).offset().top <= $(window).scrollTop()+$(window).height()*0.75 && $(this).find('.gem-timeline-icon').hasClass('is-hidden') ) {
				$(this).find('.gem-timeline-icon, .gem-timeline-content').removeClass('is-hidden').addClass('bounce-in');
			}
		});
	});
});


/* ====================================================================================
Cycle Two Details for Timeline Tab JS
==================================================================================== */

/*! scrollVert transition plugin for Cycle2;  version: 20140128 */
(function($) {

$.fn.cycle.transitions.scrollVert = {
    before: function( opts, curr, next, fwd ) {
        opts.API.stackSlides( opts, curr, next, fwd );
        var height = opts.container.css('overflow','hidden').height();
        opts.cssBefore = { top: fwd ? -height : height, left: 0, opacity: 1, display: 'block', visibility: 'visible' };
        opts.animIn = { top: 0 };
        opts.animOut = { top: fwd ? height : -height };
    }
};

})(jQuery);


$(document).ready(function(){

    i = 0;
    
    $('.gem-slide-control').each(function(){
        $(this).attr('onclick', 'goto(' +  i  +');');
        i++;
    });
    
    $('.gem-slide-control:first-child').addClass('gem-active');
    
    
});

function goto(e){
    $('.cycle-slideshow').cycle('goto', e);
}

$('.gem-slide-control').click(function(){
    $('.gem-slide-control').removeClass('gem-active');
    $(this).addClass('gem-active');
    
    $(this).parent('svg').attr('fill', '#188adf');
    
    /* Remove Styles */
    $('svg').children('path:last-child').attr('style', 'fill:#c2c2c2');
    $('svg').children('path:first-child').attr('stroke', '#c2c2c2');
    
    /* Add Styles */
    $(this).children('svg').children('path:last-child').attr('style', 'fill:#188adf');
    $(this).children('svg').children('path:first-child').attr('stroke', '#188adf');
    
});


























