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
	
	/* only play video on desktop devices */
	
	trueMobile = isMobile.any();
		if( trueMobile == null ) {
        $.okvideo({ source: 'BsekcY04xvQ', 
                    volume: 0.1, 
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
			$('.player').remove();
		}