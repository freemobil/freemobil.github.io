//  definition of mobile browser------------------

	var isMobile = { 
       Android: function() {
            return navigator.userAgent.match(/Android/i);
        },
        BlackBerry: function() {
            return navigator.userAgent.match(/BlackBerry/i);
        },
        iOS: function() {
            return navigator.userAgent.match(/iPhone|iPad|iPod/i);
        },
        Opera: function() {
            return navigator.userAgent.match(/Opera Mini/i);
        },
        Windows: function() {
            return navigator.userAgent.match(/IEMobile/i);
        },
        any: function() {
            return (isMobile.Android() || isMobile.BlackBerry() || isMobile.iOS() || isMobile.Opera() || isMobile.Windows());
        }
		
    };
	
// if not mobile ------------------  
	
  	trueMobile = isMobile.any();

/* only play video on desktop devices */
			trueMobile = isMobile.any();
		if( trueMobile == null ) {
		
		//----------------- ADD YOUR SETTINGS HERE -----------------//
			
		// Set link of your video, for example "http://youtu.be/OW8bkC9kFV8" is "OW8bkC9kFV8"
      	$.okvideo({ source: 'OW8bkC9kFV8', 
                    volume: 50, //null // 1..100
                    loop: true,
                    hd:true, 
                    adproof: true,
                    annotations: false,
                    onFinished: function() { console.log('finished') },
                    unstarted: function() { console.log('unstarted') },
                    onReady: function() { console.log('onready') },
                    onPlay: function() { console.log('onplay') },
                    onPause: function() { console.log('pause') },
                    buffering: function() { console.log('buffering') },
                    cued: function() { console.log('cued') },
                 });
			}			
		if (trueMobile){
			$('.video-bg').addClass('mob-video');

			$('.player').remove();
		}// JavaScript Document