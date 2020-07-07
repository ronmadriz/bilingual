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





function doFormatPhone(A){
	var B=document.getElementById(A);
	B.onblur=function(){
		formatPhone(this)
	}
}
function formatPhone(A){
	A.value=formatPhoneStr(A.value)
}
function formatPhoneStr(A){
	var C=A.replace(/[^0-9xX]/g,"");
	C=C.replace(/[xX]/g,"x");
	var B="";
	if(C.indexOf("x")>-1){
		B=" "+C.substr(C.indexOf("x"));
		C=C.substr(0,C.indexOf("x"))
	}
	switch(C.length){
		case (10):
		return C.replace(/(...)(...)(....)/g,"($1) $2-$3")+B;
		case (11):
		if(C.substr(0,1)=="1"){
			return C.substr(1).replace(/(...)(...)(....)/g,"($1) $2-$3")+B
		}
		break;default:
	}
	return A
}
window.onload=function(){
	doFormatPhone("phone")
};
