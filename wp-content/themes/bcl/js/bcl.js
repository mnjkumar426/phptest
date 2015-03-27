jQuery(document).ready(function($) {
	
	$(document).scroll(function(){
		//$('.header').addClass('header-scroll');
		var offset = $('.height-cal').offset();
		
		var w = $(window);
       heightTop=offset.top-w.scrollTop();
		
		//$('.postion').text("(x,y): ("+(offset.left-w.scrollLeft())+","+(offset.top-w.scrollTop())+")");
		if(heightTop<=70){
			
			
			$('.header-cat').addClass("header-fixed ");
			
			$('.navbar-brand').show();
			
		}else{
			
			
			$('.header-cat').removeClass("header-fixed header-scroll");
			
		}
		
	 
	});
//alert('ok');
	var currentUrl = window.location.href;

//alert(currentUrl);
	//Get the span you want with a combination class and attribute and child jQuery selector
	var currentMenuItem = $("a[href='" + currentUrl + "']");
//alert(currentMenuItem+'and'+currentUrl);
	//Then add your class
	currentMenuItem.addClass('activeclass');

});

