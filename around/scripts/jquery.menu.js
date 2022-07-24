/*

MIT License
Copyright (C) 2013 Nikesh Hayaran

Permission is hereby granted, free of charge, to any person obtaining a copy of this software and associated documentation files (the "Software"), to deal in the Software without restriction, including without limitation the rights to use, copy, modify, merge, publish, distribute, sublicense, and/or sell copies of the Software, and to permit persons to whom the Software is furnished to do so, subject to the following conditions:

The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software.

THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY, FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM, OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE SOFTWARE.

*/


(function( $ ) {

  $.fn.PieMenu = function(options) {
	var angle,
		delay_time,
		ele_angle=[],
		x_pos=[],
		y_pos=[];
	
    var settings = $.extend( {
      'starting_angel'   : '40',
      'angel_difference' : '90',
	  'radius':'80',
	  'menu_element' : this.children('.menu_option').children(),
	  'menu_button' : this.children('.menu_button'),
    }, options);
	
	
	angle = parseInt(settings.angel_difference)/(settings.menu_element.length-1);
	delay_time = 1/(settings.menu_element.length-1);

	function setPosition(val){
		$(settings.menu_element).each(function(i,ele){
			$(ele).css({
			'left' : (val==0)?0:y_pos[i],
			'top' : (val==0)?0:-x_pos[i],
			});
		});
	}
	
	$(settings.menu_button).unbind('click', clickHandler);	//remove event if exist
	
	var clickHandler = function() {
		if($(this).parent().hasClass('active')){
			setPosition(0);
			$(this).parent().removeClass('active');
			$(this).parent().addClass('inactive');

		}else{
			setPosition(1);
			$(this).parent().addClass('active');
			$(this).parent().removeClass('inactive');
		}	
		$(this).toggleClass("btn-rotate");
	};

	$(settings.menu_button).bind('click', clickHandler);

	return settings.menu_element.each(function(i,ele){
		ele_angle[i] = (parseInt(settings.starting_angel) + angle*(i))*Math.PI/180;
		 x_pos[i] = (settings.radius * Math.sin(ele_angle[i]));
         y_pos[i] = (settings.radius * Math.cos(ele_angle[i]));
		 
		 $(ele).css({
			'-webkit-transform': 'rotate('+(90-ele_angle[i]*180/Math.PI)+'deg)',
			   '-moz-transform': 'rotate('+(90-ele_angle[i]*180/Math.PI)+'deg)',
			    '-ms-transform': 'rotate('+(90-ele_angle[i]*180/Math.PI)+'deg)',
			     '-o-transform': 'rotate('+(90-ele_angle[i]*180/Math.PI)+'deg)',
			    	'transform': 'rotate('+(90-ele_angle[i]*180/Math.PI)+'deg)',
		});
      })
	  
  };
})( jQuery );