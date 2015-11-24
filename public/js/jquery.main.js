$(document).ready(function() {

	// Stickyme
	$('.stickyme').addClass('stickyme-clone').clone().insertAfter('.stickyme').addClass('cloned-element-stickyme').css('position','fixed').css('top','0').css('margin-top','0').css('z-index','999').removeClass('stickyme-clone').hide();
	scrollIntervalID = setInterval(stickyme, 10);
	function stickyme() {
		var orgElementPos = $('.stickyme-clone').offset();
		orgElementTop = orgElementPos.top;
		if ($(window).scrollTop() >= (orgElementTop)) {
			orgElement = $('.stickyme-clone');
			coordsOrgElement = orgElement.offset();
			leftOrgElement = coordsOrgElement.left;
			widthOrgElement = orgElement.css('width');
			$('.cloned-element-stickyme').css('left',leftOrgElement+'px').css('top',0).css('width',widthOrgElement).show();
			$('.stickyme-clone').css('visibility','hidden');
		} else {
			$('.cloned-element-stickyme').hide();
			$('.stickyme-clone').css('visibility','visible');
		}
	}
});