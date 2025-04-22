var $s = jQuery.noConflict(); 
function isPositionFixedSupported () {
	var container = document.body;
	if (document.createElement && container && container.appendChild && container.removeChild) {
  		var el = document.createElement("div");
  		if (!el.getBoundingClientRect) {
      		return null;
  		}
  		el.innerHTML = "x";
  		el.style.cssText = "position:fixed;top:100px;";
  		container.appendChild(el);
  		var originalHeight = container.style.height, originalScrollTop = container.scrollTop;
 		container.style.height = "3000px";
      	container.scrollTop = 500;
      	var elementTop = el.getBoundingClientRect().top;
      	container.style.height = originalHeight;
      	var isSupported = elementTop === 100;
      	container.removeChild(el);
      	container.scrollTop = originalScrollTop;
      	return isSupported;
	}
	return null;
}


var __isFixed = false;
var stickyHeaderTop =-1;
var stickyHeaderPosTop = -1;
var stickyHeaderHeight = 0;
var stickyFooterHeight =0;
var stickyFooterPosTop = -1;
var stickyFooterTop = -1;
var stickySideTop =-1;
var stickyheight = 0;

jQuery(document).ready(function() {
	jQuery('#main-page').bind( 'touchstart', function( event ) {
    })
    .bind( 'touchend', function( event ) {
        });
	if(stickyHeaderTop <0)
	{
		stickyHeaderTop = jQuery('#titlebar').offset().top;
		stickyHeaderPosTop = jQuery('#titlebar').position().top;
		stickyHeaderHeight = jQuery('#titlebar').height();;
		var __isFixed =isPositionFixedSupported();
	}
	jQuery(window).scroll(function(){
			stickyheight = (stickyHeaderPosTop+stickyHeaderHeight)-stickyFooterPosTop;
	        if( jQuery(window).scrollTop() > stickyHeaderTop )
	        {
	        	jQuery('#titlebar').css({position: 'fixed', top: '0px', left: '0px', width : '100%'});
	        }
			else
			{
				jQuery('#titlebar').css({position: 'static', top: '48px', width : '100%'});
				sttop = jQuery('#titlebar').offset().top + stickyHeaderHeight  - jQuery(window).scrollTop() +"px";
				jQuery('#sidebar').css({top:sttop,height:stickyheight+"px"});
	        }

	});
});

jQuery(document).ready(function() {
	if(jQuery(window).width() < 1100 && jQuery(window).width() > 1024)
	{
		jQuery('#navbar').css({width : '400px'});
	}
});
	