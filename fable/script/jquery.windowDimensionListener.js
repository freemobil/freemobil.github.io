"use strict";
/******************************************************************************/
/******************************************************************************/

;(function($,doc,win) 
{
	/**************************************************************************/
	
	var windowDimensionListener=function(option)
	{
		/**********************************************************************/
		
		var option=option;
		
		/**********************************************************************/

		this.create=function() 
		{
			var i;
			var timer;
			var initial=false;
			var dimension=[];
	
			var self=this;
	
			var object=
			[
				{
					'object'	:	document.body,
					'type'		:	'body'
				},
				{
					'object'	:	window,
					'type'		:	'window'
				}
			];
		
			for(i in object)
			{
				dimension[i]={};
				dimension[i].old=this.getDimension(object[i].object,object[i].type);
			}
			
			(function run()
			{
				for(i in object)
				{
					dimension[i].new=self.getDimension(object[i].object,object[i].type);				
				
					var c=[dimension[i].new.width!==dimension[i].old.width,dimension[i].new.height!==dimension[i].old.height];
	
					dimension[i].old=dimension[i].new;
	
					if((c[0]===false) && (c[1]===false))
					{				
						if(!initial)
						{
							initial=true;
							option.change(true,true);
							break;
						}
					}
					else
					{
						option.change(c[0],c[1]);
						break;
					}
				}
	
				timer=setTimeout(run,1000);
			})();
		};
		
		/**************************************************************************/
		
		this.getDimension=function(object,type)
		{		
			var dimension={};
			
			switch(type)
			{
				case 'body':
					
					dimension.width=document.body.clientWidth;
					dimension.height=document.body.clientHeight;
					
				break;
				
				default:
					
					dimension.width=$(object).actual('width');
					dimension.height=$(object).actual('height');
			}
			
			dimension.width=parseInt(dimension.width,10);
			dimension.height=parseInt(dimension.height,10);
			
			return(dimension);
		};

		/**********************************************************************/
	};
	
	/**************************************************************************/
	
	$.fn.windowDimensionListener=function(option) 
	{
		var element=new windowDimensionListener(option);
		element.create();
	};
	
	/**************************************************************************/

})(jQuery,document,window);