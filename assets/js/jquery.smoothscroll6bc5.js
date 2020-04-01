//smooth wheel scroll
(function($){

	if(navigator.userAgent.toLowerCase().indexOf('msie 8') != -1
	 || navigator.userAgent.toLowerCase().indexOf('msie 7') != -1
	 || navigator.userAgent.toLowerCase().indexOf('msie 6') != -1
	 || navigator.userAgent.toLowerCase().indexOf('firefox') != -1
	 || navigator.platform.toUpperCase().indexOf('MAC') >= 0
	 || navigator.userAgent.match(/Android/i)
	 || navigator.userAgent.match(/webOS/i)
	 || navigator.userAgent.match(/iPhone/i)
	 || navigator.userAgent.match(/iPad/i)
	 || navigator.userAgent.match(/iPod/i)
	 || navigator.userAgent.match(/BlackBerry/i)
	 || navigator.userAgent.match(/Windows Phone/i)) {
		return;
	}

	// Make the api accessible globally
	window.JTmouseWheel = {
		addEvent : function(){
			if(window.addEventListener) window.addEventListener("DOMMouseScroll", JTmouseWheel.wheel, false);
			window.onmousewheel = document.onmousewheel = JTmouseWheel.wheel;
		},
		kill : function(){
			if(window.addEventListener) window.removeEventListener("DOMMouseScroll", JTmouseWheel.wheel, false);
			window.onmousewheel = document.onmousewheel = null;
		},
		wheel : function(event){

			var delta = 0;
			if(!event) event = window.event;
			if(event.wheelDelta){

				delta = event.wheelDelta / 120;
				if(window.opera) delta = delta * -1;

			}else if(event.detail){
				delta = event.detail / 3 * -1;
			}

			if(delta) JTmouseWheel.handle(delta);
		},
		handle : function(delta){

			event.preventDefault();
			// event.stopPropagation();

			var windowScrollTop = jQuery(window).scrollTop();

			var smoothWheel = {
				size : 350, // 350
				speed : 600, // 600
				easing : "easeOutQuart",
				target : jQuery("html"), // remove 'body' to imporve performance
				move : function(){
					smoothWheel.target.stop().animate({
					   scrollTop :  windowScrollTop + smoothWheel.size
					}, smoothWheel.speed, smoothWheel.easing);
				}
			}

			if(delta == -1) {
				smoothWheel.size = smoothWheel.size < 0 ? smoothWheel.size * -1 : smoothWheel.size;
				smoothWheel.move();
			}
			if(delta == 1){
				smoothWheel.size = smoothWheel.size < 0 ? smoothWheel.size : smoothWheel.size * -1;
				smoothWheel.move();
			}
		}
	} // END JTmouseWheel

})(jQuery);
