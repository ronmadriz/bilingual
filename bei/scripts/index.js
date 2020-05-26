var j = jQuery.noConflict();

j(document).ready(function(){

	// ensure that mailto links are not treated as external links. Make external links open in a separate tab
	j('a').not('[href*="mailto:"]').each(function () {
		var isInternalLink = new RegExp('/' + window.location.host + '/');
		if ( ! isInternalLink.test(this.href) ) {
		  j(this).attr('target', '_blank');
		};
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