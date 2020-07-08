var j = jQuery.noConflict();

j(document).ready(function(){

	if (j(window).width() > 769) {
		j('.navbar .dropdown').hover(function() {
			j(this).find('.dropdown-menu').first().stop(true, true).delay(250).slideDown();

		}, function() {
			j(this).find('.dropdown-menu').first().stop(true, true).delay(100).slideUp();

		});

		j('.navbar .dropdown > a').click(function() {
			location.href = this.href;
		});
	}

	j(('a').each(function() {
        var a = new RegExp('/' + window.location.host + '/');
        if(!a.test(this.href) && this.href.substr(0,4)!='tel:' && this.href.substr(0,7)!='mailto:') {
            j(this).attr('target', '_blank');
        }
    });

	// add lightbox to gallery 
	j(document).on('click', '[data-toggle="lightbox"]', function(event) {
	    event.preventDefault();
	    j(this).ekkoLightbox();
    });	



});