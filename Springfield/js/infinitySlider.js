/*************************
jQuery Infinty Slider v.1.0
@Website: http://demo.epeo.it/infinityslider/
@Author: Epeo
@Copyright: 10/03/2014
************************/
function infinitySlider() {
	/*Checking Declaration*/
	var error = '';
	var errorCounter = 0;
	if (typeof infinitySliderId === 'undefined' || infinitySliderId == '') {
		error = 'infinitySliderId Missing \n';
	}
	if (typeof infinitySliderCommandsClass === 'undefined' || infinitySliderCommandsClass == '') {
		error = 'infinitySliderCommandsClass Missing \n';
	}
	if (typeof infinitySliderPreviousButtonClass === 'undefined' || infinitySliderPreviousButtonClass == '') {
		errorCounter++;
	}
	else {
		var c_previous = true;	
	}
	if (typeof infinitySliderNextButtonClass === 'undefined' || infinitySliderNextButtonClass == '') {
		errorCounter++;
	}
	else {
		var c_next = true;	
	}
	if (typeof infinitySliderDotsClass === 'undefined' || infinitySliderDotsClass == '') {
		errorCounter++;
	}
	else if (typeof infinitySliderDotClass === 'undefined' || infinitySliderDotClass == '') {
			error = error+'infinitySliderDotClass Missing \n';
	}
	else {
		var c_dot = true;	
	}
	if (typeof infinitySliderPlayButtonClass === 'undefined' || infinitySliderPlayButtonClass == '') {
		errorCounter++;
	}
	else {
		var c_play = true;	
	}
	if (typeof infinitySliderStopButtonClass === 'undefined' || infinitySliderStopButtonClass == '') {
		errorCounter++;
	}
	else {
		var c_stop = true;	
	}
	if (typeof infinitySliderContentClass === 'undefined' || infinitySliderContentClass == '') {
		error = 'infinitySliderContentClass Missing \n';
	}
	if (typeof infinitySliderItemsClass === 'undefined' || infinitySliderItemsClass == '') {
		error = 'infinitySliderItemsClass Missing \n';
	}
	else if(typeof infinitySliderItemClass === 'undefined' || infinitySliderItemClass == '') {
		error = 'infinitySliderItemClass Missing \n';
	}
	if (typeof infinitySliderAutoStartLoop === 'undefined' || infinitySliderAutoStartLoop == '') {
		errorCounter++;
	}
	else if (infinitySliderAutoStartLoop == true) {
		var c_loop = true;	
	}
	if (typeof infinitySliderKeyboardNavigation != 'undefined' && infinitySliderKeyboardNavigation == true) {
		var c_key = true;
	}
	else {
		var c_key = false;	
	}
	if ( errorCounter == 6) {
		error = error+'infinitySliderPreviousButtonClass Missing \n';
		error = error+'infinitySliderNextButtonClass Missing \n';
		error = error+'infinitySliderDotsClass Missing \n';
		error = error+'infinitySliderPlayButtonClass Missing \n';
		error = error+'infinitySliderStopButtonClass Missing \n';
		error = error+'infinitySliderAutoStartLoop Missing \n';
		error = error+'At least one command is required \n';
	}
	if (error != '') {
		error = 'Error! \n'+error+'\nPlease read the Documentation at http://demo.epeo.it/infinityslider/';
		alert(error);
	}
	else {
		/*verifying Declaration*/
		var error = '';
		var errorCounter = 0;
		var slide = $('#'+infinitySliderId);
		if (slide.length == 1) {			
			slide.addClass('iS');
			var slideId = infinitySliderId;/*A:C.E.A.*/
			var slideContent = slide.children('.'+infinitySliderContentClass);
			if(slideContent.length == 0) {
				error = 'infinitySliderItemsClass('+infinitySliderItemsClass+') does not exist \n';
			}
			else {
				slideContent.addClass('iS-Content');
				var	slideItems = slideContent.children('.'+infinitySliderItemsClass);
				if (slideItems.length == 0) {
					error = 'infinitySliderItemsClass('+infinitySliderItemsClass+') do not exist \n';
				}
				else {				
					slideItems.addClass('iS-Items');
					var slideItem = slideItems.children('.'+infinitySliderItemClass);
					if (slideItem.length == 0) {
						error = 'infinitySliderItemClass('+infinitySliderItemClass+') do not exist \n';
					}
					else {
						slideItem.addClass('iS-Item');
					}
				}
			}
			var slideCommands = slide.children('.'+infinitySliderCommandsClass);
			if(slideCommands.length == 0) {
				error = 'infinitySliderCommandsClass('+infinitySliderCommandsClass+') does not exist \n';				
			}
			else {
				slideCommands.addClass('iS-Commands');
				if (c_previous == true) {
					var slidePreviousButton = slideCommands.children('.'+infinitySliderPreviousButtonClass);
					if (slidePreviousButton.length == 0) {
						error = error+'infinitySliderPreviousButtonClass('+infinitySliderPreviousButtonClass+') do not exist \n';					
					}
					else {
						slidePreviousButton.addClass('iS-Previous');	
					}
				}
				if (c_next == true) {
					var slideNextButton = slideCommands.children('.'+infinitySliderNextButtonClass);
					if (slideNextButton.length == 0) {
						error = error+'infinitySliderNextButtonClass('+infinitySliderNextButtonClass+') do not exist \n';					
					}
					else {
						slideNextButton.addClass('iS-Next');	
					}
				}
				if (c_dot == true) {
					var slideDots = slideCommands.children('.'+infinitySliderDotsClass);
					if (slideDots.length == 0) {
						error = error+'infinitySliderDotsClass('+infinitySliderDotsClass+') does not exist \n';					
					}
					else {
						slideDots.addClass('iS-Dots');
						var slideDot = slideDots.children('.'+infinitySliderDotClass);
						if (slideDot.length == 0) {
							error = error+'infinitySliderDotClass('+infinitySliderDotClass+') do not exist \n';					
						}
						else {
							slideDot.addClass('iS-Dot');							
							if (typeof infinitySliderDotActiveClass != 'undefined' && infinitySliderDotActiveClass != '') {
								var slideDotActiveClass = infinitySliderDotActiveClass+' iS-Dotactive';
							}
							else {
								var slideDotActiveClass = 'iS-Dotactive';
							}
						}
					}
				}
				if (c_play == true) {
					var slidePlayButton = slideCommands.children('.'+infinitySliderPlayButtonClass);
					if (slidePlayButton.length == 0) {
						error = error+'infinitySliderPlayButtonClass('+infinitySliderPlayButtonClass+') do not exist \n';					
					}
					else {
						slidePlayButton.addClass('iS-Play');
						if (infinitySliderLoopIndicator != '' && !slideLoopIndicator) {
							var slideLoopIndicator = slideCommands.children('.'+infinitySliderLoopIndicator);
							slideLoopIndicator.addClass('iS-Loopline');
						}
						if (typeof infinitySliderPlayButtonActive != 'undefined' && infinitySliderPlayButtonActive != '') {
							var slidePlayActiveClass = infinitySliderPlayButtonActive+' iS-Playactive';
						}
						else {							
							var slidePlayActiveClass = 'iS-Playactive';
						}
					}
				}
				if (c_stop == true) {
					var slideStopButton = slideCommands.children('.'+infinitySliderStopButtonClass);
					if (slideStopButton.length == 0) {
						error = error+'infinitySliderStopButtonClass('+infinitySliderStopButtonClass+') do not exist \n';					
					}
					else {
						slideStopButton.addClass('iS-Stop');
						if (typeof infinitySliderStopButtonActive != 'undefined' && infinitySliderStopButtonActive != '') {							
							var slideStopActiveClass = infinitySliderStopButtonActive+' iS-Stopactive';
						}
						else {							
							var slideStopActiveClass = 'iS-Stopactive';
						}
					}
				}
			}
		}
		else {
			error = 'infinitySliderId('+infinitySliderId+') does not exist \n';
		}
		if (error != '') {
			error = 'Error! \n'+error+'\nPlease read the Documentation at http://demo.epeo.it/infinityslider/';
			alert(error);
		}
		/*
		else if (window.location.hostname != 'demo.epeo.it') {window.location='http://demo.epeo.it/infinityslider';}
		*/
		else {
			/*Utility Variables*/
			var loopValue = '';
			var error = '';
			var slidenumber = 1;
			/*Setup*/
			if(slide.children('.iS-Firstload').length == 0) {
				slideItems.removeClass('iS-Active iS-Activede iS-Activedu iS-Priactive iS-Pruactive iS-Proactive');
				slideItems.addClass('iS-Notime iS-Preactive');
				if (c_dot == true) {
					slideDot.removeClass(slideDotActiveClass);
				}
			}
			var EffectIn = [' '];
			var EffectOut = [' '];
			var EffectInTime = [' '];
			var EffectOutTime = [' '];
			var EffectInDelay = [' '];
			var EffectOutDelay = [' '];
			var EffectInBack = [' '];
			var EffectOutBack = [' '];
			var EffectInTimeBack = [' '];
			var EffectOutTimeBack = [' '];
			var EffectInDelayBack = [' '];
			var EffectOutDelayBack = [' '];
			var style = '<style>';
			/**/
			var cattribute = '';
			var ceffect = '';
			var pattribute = '';
			var peffect = '';
			var flagSlideTop = false;
			var flagSlideLeft = false;
			var flagSlideRight = false;
			var flagSlideBottom = false;
			var flagFlipTop = false;
			var flagFlipLeft = false;
			var flagFlipRight = false;
			var flagFlipBottom = false;
			var flagSpinLeft = false;
			var flagSpinRight = false;
			var flagZoomIn = false;
			var flagZoomOut = false;
			var flagFadeIn = false;
			var flagSlideTopScreen = false;
			var flagSlideLeftScreen = false;
			var flagSlideRightScreen = false;
			var flagSlideBottomScreen = false;
/**/
			function checkArray(array,effect) {				
				var check = false;
				for ( var i = 0; i < array.length; i++) {
					if (array[i] == effect) {
						check = true;
					}				 
				}
				if(check == false) {	
					array.push(effect);					
				}
			}
/**/
			function checkEffect(currentEffect,currentTarget,changeslide,backclone) {
				 if(currentEffect == 'slidetop') {
					if(flagSlideTop == true) {
						error = error+'The effect'+currentTarget+'('+currentEffect+') on the slide number: '+slidenumber+' can be inserted only once\n';
					}
					else if(flagSlideBottom == true) {
						error = error+'The effect'+currentTarget+'('+currentEffect+') on the slide number: '+slidenumber+' can not be combinate with the effect'+currentTarget+'(slidebottom)\n';
					}
					else {
						cattribute = cattribute+'[data-effect'+currentTarget+'~="slidetop"]';
						ceffect = ceffect+' translateY(-100%)';
						flagSlideTop = true;
					}
				}
				else if(currentEffect == 'slidebottom') {
					if(flagSlideBottom == true) {
						error = error+'The effect'+currentTarget+'('+currentEffect+') on the slide number: '+slidenumber+' can be inserted only once\n';
					}
					else if(flagSlideTop == true) {
						error = error+'The effect'+currentTarget+'('+currentEffect+') on the slide number: '+slidenumber+' can not be combinate with the effect'+currentTarget+'(slidetop)\n';
					}
					else {
						cattribute = cattribute+'[data-effect'+currentTarget+'~="slidebottom"]';
						ceffect = ceffect+' translateY(100%)';
						flagSlideBottom = true;
					}
				}
				else if(currentEffect == 'slideleft') {
					if(flagSlideLeft == true) {
						error = error+'The effect'+currentTarget+'('+currentEffect+') on the slide number: '+slidenumber+' can be inserted only once\n';
					}
					else if(flagSlideRight == true) {
						error = error+'The effect'+currentTarget+'('+currentEffect+') on the slide number: '+slidenumber+' can not be combinate with the effect'+currentTarget+'(slideright)\n';
					}
					else {
						cattribute = cattribute+'[data-effect'+currentTarget+'~="slideleft"]';
						ceffect = ceffect+' translateX(-100%)';
						flagSlideLeft = true;
					}
				}
				else if(currentEffect == 'slideright') {
					if(flagSlideRight == true) {
						error = error+'The effect'+currentTarget+'('+currentEffect+') on the slide number: '+slidenumber+' can be inserted only once\n';
					}
					else if(flagSlideLeft == true) {
						error = error+'The effect'+currentTarget+'('+currentEffect+') on the slide number: '+slidenumber+' can not be combinate with the effect'+currentTarget+'(slideleft)\n';
					}
					else {
						cattribute = cattribute+'[data-effect'+currentTarget+'~="slideright"]';
						ceffect = ceffect+' translateX(100%)';
						flagSlideRight = true;
					}
				}
				else if(currentEffect == 'zoomin') {
					if(flagZoomIn == true) {
						error = error+'The effect'+currentTarget+'('+currentEffect+') on the slide number: '+slidenumber+' can be inserted only once\n';
					}
					else if(flagZoomOut == true) {
						error = error+'The effect'+currentTarget+'('+currentEffect+') on the slide number: '+slidenumber+' can not be combinate with the effect'+currentTarget+'(zoomout)\n';
					}
					else {
						cattribute = cattribute+'[data-effect'+currentTarget+'~="zoomin"]';
						ceffect = ceffect+' scale(0)';		
						flagZoomIn = true;
					}
				}
				else if(currentEffect == 'zoomout') {
					if(flagZoomOut == true) {
						error = error+'The effect'+currentTarget+'('+currentEffect+') on the slide number: '+slidenumber+' can be inserted only once\n';
					}
					else if(flagZoomIn == true) {
						error = error+'The effect'+currentTarget+'('+currentEffect+') on the slide number: '+slidenumber+' can not be combinate with the effect'+currentTarget+'(zoomin)\n';
					}
					else {
						cattribute = cattribute+'[data-effect'+currentTarget+'~="zoomout"]';
						ceffect = ceffect+' scale(2)';
						flagZoomOut = true;
					}
				}
				else if(currentEffect == 'fliptop') {
					if(flagFlipTop == true) {
						error = error+'The effect'+currentTarget+'('+currentEffect+') on the slide number: '+slidenumber+' can be inserted only once\n';
					}
					else if(flagFlipBottom == true) {
						error = error+'The effect'+currentTarget+'('+currentEffect+') on the slide number: '+slidenumber+' can not be combinate with the effect'+currentTarget+'(flipbottom)\n';
					}
					else {
						cattribute = cattribute+'[data-effect'+currentTarget+'~="fliptop"]';
						ceffect = ceffect+' rotateX(-180deg)';	
						flagFlipTop = true;
					}
				}
				else if(currentEffect == 'flipbottom') {
					if(flagFlipBottom == true) {
						error = error+'The effect'+currentTarget+'('+currentEffect+') on the slide number: '+slidenumber+' can be inserted only once\n';
					}
					else if(flagFlipTop == true) {
						error = error+'The effect'+currentTarget+'('+currentEffect+') on the slide number: '+slidenumber+' can not be combinate with the effect'+currentTarget+'(fliptop)\n';
					}
					else {
						cattribute = cattribute+'[data-effect'+currentTarget+'~="flipbottom"]';
						ceffect = ceffect+' rotateX(180deg)';
						flagFlipBottom = true;
					}
				}
				else if(currentEffect == 'flipleft') {
					if(flagFlipLeft == true) {
						error = error+'The effect'+currentTarget+'('+currentEffect+') on the slide number: '+slidenumber+' can be inserted only once\n';
					}
					else if(flagFlipRight == true) {
						error = error+'The effect'+currentTarget+'('+currentEffect+') on the slide number: '+slidenumber+' can not be combinate with the effect'+currentTarget+'(flipright)\n';
					}
					else {
						cattribute = cattribute+'[data-effect'+currentTarget+'~="flipleft"]';
						ceffect = ceffect+' rotateY(-180deg)';	
						flagFlipLeft = true;
					}
				}
				else if(currentEffect == 'flipright') {
					if(flagFlipRight == true) {
						error = error+'The effect'+currentTarget+'('+currentEffect+') on the slide number: '+slidenumber+' can be inserted only once\n';
					}
					else if(flagFlipLeft == true) {
						error = error+'The effect'+currentTarget+'('+currentEffect+') on the slide number: '+slidenumber+' can not be combinate with the effect'+currentTarget+'(flipleft)\n';
					}
					else {
						cattribute = cattribute+'[data-effect'+currentTarget+'~="flipright"]';
						ceffect = ceffect+' rotateY(180deg)';
						flagFlipRight = true;
					}
				}
				else if(currentEffect == 'spinleft') {
					if(flagSpinLeft == true) {
						error = error+'The effect'+currentTarget+'('+currentEffect+') on the slide number: '+slidenumber+' can be inserted only once\n';
					}
					else if(flagSpinRight == true) {
						error = error+'The effect'+currentTarget+'('+currentEffect+') on the slide number: '+slidenumber+' can not be combinate with the effect'+currentTarget+'(spinright)\n';
					}
					else {
						cattribute = cattribute+'[data-effect'+currentTarget+'~="spinleft"]';
						ceffect = ceffect+' rotateZ(-360deg)';	
						flagSpinLeft = true;
					}
				}
				else if(currentEffect == 'spinright') {
					if(flagSpinRight == true) {
						error = error+'The effect'+currentTarget+'('+currentEffect+') on the slide number: '+slidenumber+' can be inserted only once\n';
					}
					else if(flagSpinLeft== true) {
						error = error+'The effect'+currentTarget+'('+currentEffect+') on the slide number: '+slidenumber+' can not be combinate with the effect'+currentTarget+'(spinleft)\n';
					}
					else {
						cattribute = cattribute+'[data-effect'+currentTarget+'~="spinright"]';
						ceffect = ceffect+' rotateZ(360deg)';
						flagSpinRight = true;
					}
				}
				else if(currentEffect == 'slidetopscreen') {
					if(flagSlideTopScreen == true) {
						error = error+'The effect'+currentTarget+'('+currentEffect+') on the slide number: '+slidenumber+' can be inserted only once\n';
					}
					else if(flagSlideBottomScreen == true) {
						error = error+'The effect'+currentTarget+'('+currentEffect+') on the slide number: '+slidenumber+' can not be combinate with the effect'+currentTarget+'(slidebottomscreen)\n';
					}
					else {
						pattribute = pattribute+'[data-effect'+currentTarget+'~="slidetopscreen"]';
						peffect = peffect+' translateY(-100%)';
						flagSlideTopScreen = true;
					}
				}
				else if(currentEffect == 'slidebottomscreen') {
					if(flagSlideBottomScreen == true) {
						error = error+'The effect'+currentTarget+'('+currentEffect+') on the slide number: '+slidenumber+' can be inserted only once\n';
					}
					else if(flagSlideTopScreen == true) {
						error = error+'The effect'+currentTarget+'('+currentEffect+') on the slide number: '+slidenumber+' can not be combinate with the effect'+currentTarget+'(slidetopscreen)\n';
					}
					else {
						pattribute = pattribute+'[data-effect'+currentTarget+'~="slidebottomscreen"]';
						peffect = peffect+' translateY(100%)';
						flagSlideBottomScreen = true;
					}
				}
				else if(currentEffect == 'slideleftscreen') {
					if(flagSlideLeftScreen == true) {
						error = error+'The effect'+currentTarget+'('+currentEffect+') on the slide number: '+slidenumber+' can be inserted only once\n';
					}
					else if(flagSlideRightScreen == true) {
						error = error+'The effect'+currentTarget+'('+currentEffect+') on the slide number: '+slidenumber+' can not be combinate with the effect'+currentTarget+'(sliderightscreen)\n';
					}
					else {
						pattribute = pattribute+'[data-effect'+currentTarget+'~="slideleftscreen"]';
						peffect = peffect+' translateX(-100%)';
						flagSlideLeftScreen = true;
					}
				}
				else if(currentEffect == 'sliderightscreen') {
					if(flagSlideRightScreen == true) {
						error = error+'The effect'+currentTarget+'('+currentEffect+') on the slide number: '+slidenumber+' can be inserted only once\n';
					}
					else if(flagSlideLeftScreen == true) {
						error = error+'The effect'+currentTarget+'('+currentEffect+') on the slide number: '+slidenumber+' can not be combinate with the effect'+currentTarget+'(slideleftscreen)\n';
					}
					else {
						pattribute = pattribute+'[data-effect'+currentTarget+'~="sliderightscreen"]';
						peffect = peffect+' translateX(100%)';
						flagSlideRightScreen = true;
					}
				}
				else if(currentEffect == 'fadein') {
					if(flagFadeIn == true) {
						error = error+'The effect'+currentTarget+'('+currentEffect+') on the slide number: '+slidenumber+' can be inserted only once\n';
					}
					else {
						flagFadeIn = true;
					}
				}
				else {
					error = error+'The effect'+currentTarget+'('+currentEffect+') on the slide number: '+slidenumber+' does not exist\n';
				}
				if(changeslide == true) {
					if(flagFadeIn == true) {
						if(currentTarget == 'In') {
							var effectIn = '#'+infinitySliderId+' .iS-Preactive > .iS-Item[data-effectIn~="fadein"]{opacity: 0;}';
							checkArray(EffectIn,effectIn);
							if(backclone == true) {
								var effectIn = '#'+infinitySliderId+' .iS-Pruactive > .iS-Item[data-effectIn~="fadein"]{opacity: 0;}';
								checkArray(EffectIn,effectIn);								
							}
						}
						else if(currentTarget == 'Out') {
							var effectOut = '#'+infinitySliderId+' .iS-Proactive > .iS-Item[data-effectOut~="fadein"]{opacity: 0;}';
							checkArray(EffectOut,effectOut);
							if(backclone == true) {
								var effectOut = '#'+infinitySliderId+' .iS-Priactive > .iS-Item[data-effectOut~="fadein"]{opacity: 0;}';
								checkArray(EffectOut,effectOut);								
							}
						}
						else if(currentTarget == 'InBack') {
							var effectIn = '#'+infinitySliderId+' .iS-Pruactive > .iS-Item[data-effectInBack~="fadein"]{opacity: 0;}';
							checkArray(EffectInBack,effectIn);
						}
						else if(currentTarget == 'OutBack') {
							var effectOut = '#'+infinitySliderId+' .iS-Priactive > .iS-Item[data-effectOutBack~="fadein"]{opacity: 0;}';
							checkArray(EffectOutBack,effectOut);
						}
					}
					if(ceffect != '') {
						if(currentTarget == 'In') {
							var effectIn = '#'+infinitySliderId+' .iS-Preactive > .iS-Item'+cattribute+' > *{-webkit-transform: '+ceffect+'; transform: '+ceffect+';}';
							checkArray(EffectIn,effectIn);	
							if(backclone == true) {
								var effectIn = '#'+infinitySliderId+' .iS-Pruactive > .iS-Item'+cattribute+' > *{-webkit-transform: '+ceffect+'; transform: '+ceffect+';}';
								checkArray(EffectIn,effectIn);	
							}					
						}
						else if(currentTarget == 'Out') {
							var effectOut = '#'+infinitySliderId+' .iS-Proactive > .iS-Item'+cattribute+' > *{-webkit-transform: '+ceffect+'; transform: '+ceffect+';}';
							checkArray(EffectOut,effectOut);
							if(backclone == true) {
								var effectOut = '#'+infinitySliderId+' .iS-Priactive > .iS-Item'+cattribute+' > *{-webkit-transform: '+ceffect+'; transform: '+ceffect+';}';
								checkArray(EffectOut,effectOut);
							}						
						}
						if(currentTarget == 'InBack') {
							var effectIn = '#'+infinitySliderId+' .iS-Pruactive > .iS-Item'+cattribute+' > *{-webkit-transform: '+ceffect+'; transform: '+ceffect+';}';
							checkArray(EffectInBack,effectIn);						
						}
						else if(currentTarget == 'OutBack') {
							var effectOut = '#'+infinitySliderId+' .iS-Priactive > .iS-Item'+cattribute+' > *{-webkit-transform: '+ceffect+'; transform: '+ceffect+';}';
							checkArray(EffectOutBack,effectOut);						
						}
					}
					if(peffect != '') {
						if(currentTarget == 'In') {
							var effectIn = '#'+infinitySliderId+' .iS-Preactive > .iS-Item'+pattribute+'{-webkit-transform: '+peffect+'; transform: '+peffect+';}';
							checkArray(EffectIn,effectIn);	
							if(backclone == true) {
								var effectIn = '#'+infinitySliderId+' .iS-Pruactive > .iS-Item'+pattribute+'{-webkit-transform: '+peffect+'; transform: '+peffect+';}';
								checkArray(EffectIn,effectIn);	
							}					
						}
						else if(currentTarget == 'Out') {
							var effectOut = '#'+infinitySliderId+' .iS-Proactive > .iS-Item'+pattribute+'{-webkit-transform: '+peffect+'; transform: '+peffect+';}';
							checkArray(EffectOut,effectOut);
							if(backclone == true) {
								var effectOut = '#'+infinitySliderId+' .iS-Priactive > .iS-Item'+pattribute+'{-webkit-transform: '+peffect+'; transform: '+peffect+';}';
								checkArray(EffectOut,effectOut);
							}									
						}
						if(currentTarget == 'InBack') {
							var effectIn = '#'+infinitySliderId+' .iS-Pruactive > .iS-Item'+pattribute+'{-webkit-transform: '+peffect+'; transform: '+peffect+';}';
							checkArray(EffectInBack,effectIn);		
						}
						else if(currentTarget == 'OutBack') {
							var effectOut = '#'+infinitySliderId+' .iS-Priactive > .iS-Item'+pattribute+'{-webkit-transform: '+peffect+'; transform: '+peffect+';}';
							checkArray(EffectOutBack,effectOut);						
						}
					}
					cattribute = '';
					ceffect = '';
					pattribute = '';
					peffect = '';
					flagSlideTop = false;
					flagSlideLeft = false;
					flagSlideRight = false;
					flagSlideBottom = false;
					flagFlipTop = false;
					flagFlipLeft = false;
					flagFlipRight = false;
					flagFlipBottom = false;
					flagSpinLeft = false;
					flagSpinRight = false;
					flagZoomIn = false;
					flagZoomOut = false;
					flagFadeIn = false;
					flagSlideTopScreen = false;
					flagSlideLeftScreen = false;
					flagSlideRightScreen = false;
					flagSlideBottomScreen = false;
				}
			}
/**/
			slideItem.each(function(){
				var current = $(this);
				/**/
				var noEffectInBack = false;
				var noEffectInTimeBack = false;
				var noEffectInDelayBack = false;
				var noEffectOutBack = false;
				var noEffectOutTimeBack = false;
				var noEffectOutDelayBack = false;
/**/
				if(current.attr('data-effectinback')) {
					var CurrentEffect = ($.trim(current.attr('data-effectinback'))).split(' ');
					CurrentEffectLength = CurrentEffect.length;
					if (CurrentEffectLength == 0) {
						error = error+'There is not any effectInBack on the slide number: '+slidenumber+'\n';
					}
					else if (current.attr('data-effectinback').indexOf('none') != -1) {
					}
					else {
						for(var i=0; i<CurrentEffectLength; i++) {
							var currentEffect = CurrentEffect[i];
							var currentTarget = 'InBack';
							var changeslide = false;
							var backclone = false;
							if(i == CurrentEffectLength-1) {
								changeslide = true;
							}
							checkEffect(currentEffect,currentTarget,changeslide,backclone);							
						}
					}
				}
				else {
					noEffectInBack = true;
				}
/**/
				if(current.attr('data-effectintimeback') || current.attr('data-effectintimeback') == 0) {
					var currentEffectInTime = current.attr('data-effectintimeback');
					if($.isNumeric(currentEffectInTime)) {
						var time = parseInt(currentEffectInTime);
						if(time < 0) {
							error = error+'The effectInTimeBack('+currentEffectInTime+') on the slide number: '+slidenumber+' is not a positive number!\n';
						}
						else if(time != 0){
							var effectInTime = '#'+infinitySliderId+' .iS-Activedu > .iS-Item[data-effectInTimeBack="'+time+'"],\n#'+infinitySliderId+' .iS-Activedu > .iS-Item[data-effectInTimeBack="'+time+'"] > * {-webkit-transition: -webkit-transform '+time+'ms ease-in-out, opacity '+time+'ms ease-in-out; transition: transform '+time+'ms ease-in-out, opacity '+time+'ms ease-in-out;}';
							checkArray(EffectInTimeBack,effectInTime);
						}
					}
					else {
						error = error+'The effectInTimeBack('+currentEffectInTime+') on the slide number: '+slidenumber+' is not a number!\n';		
					}
				}
				else {
					noEffectInTimeBack = true;
				}
/**/
				if(current.attr('data-effectindelayback') || current.attr('data-effectindelayback') == 0) {
					var currentEffectInDelay = current.attr('data-effectindelayback');
					if($.isNumeric(currentEffectInDelay)) {
						var time = parseInt(currentEffectInDelay);
						if (time != 0) {
							var effectInDelay = '#'+infinitySliderId+' .iS-Activedu > .iS-Item[data-effectInDelayBack="'+time+'"],\n#'+infinitySliderId+' .iS-Activedu > .iS-Item[data-effectInDelayBack="'+time+'"] > *{-webkit-transition-delay: '+time+'ms; transition-delay: '+time+'ms;}';
							checkArray(EffectInDelayBack,effectInDelay);
						}
					}
					else {
						error = error+'The effectInDelayBack('+currentEffectInDelay+') on the slide number: '+slidenumber+' is not a number!\n';
					}
				}
				else {
					noEffectInDelayBack = true;
				}
/**/
/**/
				if(current.attr('data-effectoutback')) {
					var CurrentEffect = ($.trim(current.attr('data-effectoutback'))).split(' ');
					CurrentEffectLength = CurrentEffect.length;
					if (CurrentEffectLength == 0) {
						error = error+'There is not any effectOutBack on the slide number: '+slidenumber+'\n';
					}
					else if (current.attr('data-effectoutback').indexOf('none') != -1) {
					}
					else {
						for(var i=0; i<CurrentEffectLength; i++) {
							var currentEffect = CurrentEffect[i];
							var currentTarget = 'OutBack';
							var changeslide = false;
							var backclone = false;
							if(i == CurrentEffectLength-1) {
								changeslide = true;
							}
							checkEffect(currentEffect,currentTarget,changeslide,backclone);							
						}
					}
				}
				else {
					noEffectOutBack = true;
				}
/**/
				if(current.attr('data-effectouttimeback') || current.attr('data-effectouttimeback') == 0) {
					var currentEffectOutTime = current.attr('data-effectouttimeback');
					if($.isNumeric(currentEffectOutTime)) {
						var time = parseInt(currentEffectOutTime);
						if(time < 0) {
							error = error+'The effectOutTimeBack('+currentEffectOutTime+') on the slide number: '+slidenumber+' is not a positive number!\n';
						}
						else if(time != 0){
							var effectOutTime = '#'+infinitySliderId+' .iS-Priactive > .iS-Item[data-effectOutTimeBack="'+time+'"],\n#'+infinitySliderId+' .iS-Priactive > .iS-Item[data-effectOutTimeBack="'+time+'"] > * {-webkit-transition: -webkit-transform '+time+'ms ease-in-out, opacity '+time+'ms ease-in-out; transition: transform '+time+'ms ease-in-out, opacity '+time+'ms ease-in-out;}';
							checkArray(EffectOutTimeBack,effectOutTime);
						}
					}
					else {
						error = error+'The effectOutTimeBack('+currentEffectOutTime+') on the slide number: '+slidenumber+' is not a number!\n';		
					}
				}
				else {
					noEffectOutTimeBack = true;
				}
/**/
				if(current.attr('data-effectoutdelayback') || current.attr('data-effectoutdelayback') == 0) {
					var currentEffectOutDelay = current.attr('data-effectoutdelayback');
					if($.isNumeric(currentEffectOutDelay)) {
						var time = parseInt(currentEffectOutDelay);
						if (time != 0) {
							var effectOutDelay = '#'+infinitySliderId+' .iS-Priactive > .iS-Item[data-effectOutDelayBack="'+time+'"],\n#'+infinitySliderId+' .iS-Priactive > .iS-Item[data-effectOutDelayBack="'+time+'"] > *{-webkit-transition-delay: '+time+'ms; transition-delay: '+time+'ms;}';
							checkArray(EffectOutDelayBack,effectOutDelay);
						}
					}
					else {
						error = error+'The effectOutDelayBack('+currentEffectOutDelay+') on the slide number: '+slidenumber+' is not a number!\n';
					}
				}
				else {
					noEffectOutDelayBack = true;
				}
/**/
/**/
				if(current.attr('data-effectin')) {
					//var CurrentEffect = (current.data('effectin')).split(' ');
					var CurrentEffect = ($.trim(current.attr('data-effectin'))).split(' ');
					CurrentEffectLength = CurrentEffect.length;
					if (CurrentEffectLength == 0) {
						error = error+'There is not any effectIn on the slide number: '+slidenumber+'\n';
					}
					else if (current.attr('data-effectin').indexOf('none') != -1) {
					}
					else {
						for(var i=0; i<CurrentEffectLength; i++) {
							var currentEffect = CurrentEffect[i];
							var currentTarget = 'In';
							var changeslide = false;
							var backclone = false;
							if(noEffectInBack == true) {
								backclone = true;							
							}	
							if(i == CurrentEffectLength-1) {
								changeslide = true;
							}
							checkEffect(currentEffect,currentTarget,changeslide,backclone);					
						}
					}
				}
				else {
					error = error+'There is not any effectIn on the slide number: '+slidenumber+'\n';
				}
/**/
				if(current.attr('data-effectintime') || current.attr('data-effectintime') == 0) {
					var currentEffectInTime = current.attr('data-effectintime');
					if($.isNumeric(currentEffectInTime)) {
						var time = parseInt(currentEffectInTime);
						if(time < 0) {
							error = error+'The effectInTime('+currentEffectInTime+') on the slide number: '+slidenumber+' is not a positive number!\n';
						}
						else if(time != 0){
							var effectInTime = '#'+infinitySliderId+' .iS-Activede > .iS-Item[data-effectInTime="'+time+'"],\n#'+infinitySliderId+' .iS-Activede > .iS-Item[data-effectInTime="'+time+'"] > *{-webkit-transition: -webkit-transform '+time+'ms ease-in-out, opacity '+time+'ms ease-in-out; transition: transform '+time+'ms ease-in-out, opacity '+time+'ms ease-in-out;}';
							checkArray(EffectInTime,effectInTime);
							if(noEffectInTimeBack == true) {
								var effectInTime = '#'+infinitySliderId+' .iS-Activedu > .iS-Item[data-effectInTime="'+time+'"],\n#'+infinitySliderId+' .iS-Activedu > .iS-Item[data-effectInTime="'+time+'"] > *{-webkit-transition: -webkit-transform '+time+'ms ease-in-out, opacity '+time+'ms ease-in-out; transition: transform '+time+'ms ease-in-out, opacity '+time+'ms ease-in-out;}';
								checkArray(EffectInTime,effectInTime);								
							}
						}
					}
					else {
						error = error+'The effectInTime('+currentEffectInTime+') on the slide number: '+slidenumber+' is not a number!\n';		
					}
				}
				else {
					error = error+'There is not any effectInTime on the slide number: '+slidenumber+'\n';
				}
/**/
				if(current.attr('data-effectindelay') || current.attr('data-effectindelay') == 0) {
					var currentEffectInDelay = current.attr('data-effectindelay');
					if($.isNumeric(currentEffectInDelay)) {
						var time = parseInt(currentEffectInDelay);
						if (time != 0) {
							var effectInDelay = '#'+infinitySliderId+' .iS-Activede > .iS-Item[data-effectInDelay="'+time+'"],\n#'+infinitySliderId+' .iS-Activede > .iS-Item[data-effectInDelay="'+time+'"] > *{-webkit-transition-delay: '+time+'ms; transition-delay: '+time+'ms;}';
							checkArray(EffectInDelay,effectInDelay);
							if(noEffectInDelayBack == true) {
								var effectInDelay = '#'+infinitySliderId+' .iS-Activedu > .iS-Item[data-effectInDelay="'+time+'"],\n#'+infinitySliderId+' .iS-Activedu > .iS-Item[data-effectInDelay="'+time+'"] > *{-webkit-transition-delay: '+time+'ms; transition-delay: '+time+'ms;}';
								checkArray(EffectInDelay,effectInDelay);								
							}
						}
					}
					else {
						error = error+'The effectInDelay('+currentEffectInDelay+') on the slide number: '+slidenumber+' is not a number!\n';
					}
				}
				else {
					error = error+'There is not any effectInDelay on the slide number: '+slidenumber+'\n';
				}
/**/
/**/
				if(current.attr('data-effectout')) {
					var CurrentEffect = ($.trim(current.attr('data-effectout'))).split(' ');
					var CurrentEffectLength = CurrentEffect.length;
					if (CurrentEffectLength == 0) {
						error = error+'There is not any effectOut on the slide number: '+slidenumber+'\n';
					}
					else if (current.attr('data-effectout').indexOf('none') != -1) {
					}
					else {
						for(var i=0; i<CurrentEffectLength; i++) {
							var currentEffect = CurrentEffect[i];
							var currentTarget = 'Out';
							var changeslide = false;
							var backclone = false;
							if(noEffectOutBack == true) {
								backclone = true;
							}
							if(i == CurrentEffectLength-1) {
								changeslide = true;
							}
							checkEffect(currentEffect,currentTarget,changeslide,backclone);					
						}
					}
				}
				else {
					error = error+'There is not any effectOut on the slide number: '+slidenumber+'\n';
				}
/**/
				if(current.attr('data-effectouttime') || current.attr('data-effectouttime') == 0) {
					var currentEffectOutTime = current.attr('data-effectouttime');
					if($.isNumeric(currentEffectOutTime)) {
						var time = parseInt(currentEffectOutTime);
						if(time < 0) {
							error = error+'The effectOutTime('+currentEffectOutTime+') on the slide number: '+slidenumber+' is not a positive number!\n';
						}
						else if(time != 0){
							var effectOutTime = '#'+infinitySliderId+' .iS-Proactive > .iS-Item[data-effectOutTime="'+time+'"],\n#'+infinitySliderId+' .iS-Proactive > .iS-Item[data-effectOutTime="'+time+'"] > *{-webkit-transition: -webkit-transform '+time+'ms ease-in-out, opacity '+time+'ms ease-in-out; transition: all '+time+'ms ease-in-out, opacity '+time+'ms ease-in-out;}';
							checkArray(EffectInTime,effectOutTime);
							if(noEffectOutTimeBack == true) {
								var effectOutTime = '#'+infinitySliderId+' .iS-Priactive > .iS-Item[data-effectOutTime="'+time+'"],\n#'+infinitySliderId+' .iS-Priactive > .iS-Item[data-effectOutTime="'+time+'"] > *{-webkit-transition: -webkit-transform '+time+'ms ease-in-out, opacity '+time+'ms ease-in-out; transition: all '+time+'ms ease-in-out, opacity '+time+'ms ease-in-out;}';
								checkArray(EffectInTime,effectOutTime);
							}
						}
					}
					else {
						error = error+'The effectOutTime('+currentEffectOutTime+') on the slide number: '+slidenumber+' is not a number!\n';		
					}
				}
				else {
					error = error+'There is not any effectOutTime on the slide number: '+slidenumber+'\n';
				}
/**/
				if(current.attr('data-effectoutdelay') || current.attr('data-effectoutdelay') == 0) {
					var currentEffectOutDelay = current.attr('data-effectoutdelay');
					if($.isNumeric(currentEffectOutDelay)) {
						var time = parseInt(currentEffectOutDelay);
						if (time != 0) {
							var effectOutDelay = '#'+infinitySliderId+' .iS-Proactive > .iS-Item[data-effectOutDelay="'+time+'"],\n#'+infinitySliderId+' .iS-Proactive > .iS-Item[data-effectOutDelay="'+time+'"] > *{-webkit-transition-delay: '+time+'ms;	transition-delay: '+time+'ms;}';
							checkArray(EffectInDelay,effectOutDelay);
							if(noEffectOutDelayBack == true) {
								var effectOutDelay = '#'+infinitySliderId+' .iS-Priactive > .iS-Item[data-effectOutDelay="'+time+'"],\n#'+infinitySliderId+' .iS-Priactive > .iS-Item[data-effectOutDelay="'+time+'"] > *{-webkit-transition-delay: '+time+'ms;	transition-delay: '+time+'ms;}';
								checkArray(EffectInDelay,effectOutDelay);
							}
						}
					}
					else {
						error = error+'The effectOutDelay('+currentEffectOutDelay+') on the slide number: '+slidenumber+' is not a number!\n';
					}
				}
				else {
					error = error+'There is not any effectOutDelay on the slide number: '+slidenumber+'\n';
				}
				slidenumber++;
/**/
/**/
			});//each
			if (error != '') {
				error = 'Error! \n'+error+'\nPlease read the Documentation at http://demo.epeo.it/infinityslider/';
				alert(error);
			}
			else if($('.iS-IE9').length > 0) {
				var isIe = true;
				slideItems.css({zIndex: 0, opacity: 0});
			}
			else {
				var isIe = false;
				for ( var i = 1; i < EffectIn.length; i++) {
					style = style+'\n'+EffectIn[i];			 
				}
				for ( var i = 1; i < EffectOut.length; i++) {
					style = style+'\n'+EffectOut[i];			 
				}
				for ( var i = 1; i < EffectInBack.length; i++) {
					style = style+'\n'+EffectInBack[i];			 
				}
				for ( var i = 1; i < EffectOutBack.length; i++) {
					style = style+'\n'+EffectOutBack[i];			 
				}
				for ( var i = 1; i < EffectInTime.length; i++) {
					style = style+'\n'+EffectInTime[i];			 
				}
				for ( var i = 1; i < EffectOutTime.length; i++) {
					style = style+'\n'+EffectOutTime[i];			 
				}
				for ( var i = 1; i < EffectInTimeBack.length; i++) {
					style = style+'\n'+EffectInTimeBack[i];			 
				}
				for ( var i = 1; i < EffectOutTimeBack.length; i++) {
					style = style+'\n'+EffectOutTimeBack[i];			 
				}
				for ( var i = 1; i < EffectInDelay.length; i++) {
					style = style+'\n'+EffectInDelay[i];			 
				}
				for ( var i = 1; i < EffectOutDelay.length; i++) {
					style = style+'\n'+EffectOutDelay[i];			 
				}
				for ( var i = 1; i < EffectInDelayBack.length; i++) {
					style = style+'\n'+EffectInDelayBack[i];			 
				}
				for ( var i = 1; i < EffectOutDelayBack.length; i++) {
					style = style+'\n'+EffectOutDelayBack[i];			 
				}
var stylestandard = '.iS-Active {z-index: 2!important;}.iS-Notime > .iS-Item, .iS-Notime > .iS-Item > * {-webkit-transition: all 0s!important;	transition: all 0s!important;-webkit-transition-delay: 0s!important;transition-delay: 0s!important;}.iS-Item > * {-webkit-perspective: 1000px;perspective: 1000px;}.iS-Item > * {-webkit-backface-visibility: hidden;backface-visibility: hidden;}@-webkit-keyframes looplineactive {0% {-webkit-transform: scaleX(0);}100% {-webkit-transform: scaleX(1);}}@keyframes looplineactive {0% {transform: scaleX(0);}100% {transform: scaleX(1);}}.iS-Loopline {	-webkit-transform: scaleX(0);transform: scaleX(0);}.iS-Looplineactive {-webkit-animation: looplineactive infinite;animation: looplineactive infinite;	-webkit-animation-timing-function: ease-in-out;animation-timing-function: ease-in-out;-webkit-transform-origin: 0% 0% 0; transform-origin: 0% 0% 0;}';
				style = '<div class="iS-Style">'+style+stylestandard+'</style></div>';
				if(slide.children('.iS-Style').length != 0) {
					slide.children('.iS-Style').remove();
				}
				slide.append(style);

			}
			/*Functions*/
			function vimeoplay(target) {
				var player = $f(target[0]);
				player.api('play');
			}
			function vimeopause(target) {
				var player = $f(target[0]);
				player.api('pause');
			}
			function slideRetro(slideItemOut,slideItemIn,slideBack) {
					slideItems.css({opacity: 0});
					slideItemIn.css({zIndex: 1, opacity: 1});
					slideItemOut.css({zIndex: 0, opacity: 1});
					var	top = 0+'%';
					var	left = 0+'%';
					var	opacity = 1;
					function rewriteEffects (effect) {
						switch (effect) { 
							case 'slidetopscreen': 
								top = -100+'%';
								break;
							case 'slidebottomscreen': 
								top  = 100+'%';
								break;
							case 'slideleftscreen': 
								left  = -100+'%';
								break;
							case 'sliderightscreen': 
								left  = 100+'%';
								break;
							/**/
							case 'slidetop': 
								top  = -100+'%';
								break;
							case 'slidebottom': 
								top  = 100+'%';
								break;
							case 'slideleft': 
								left  = -100+'%';
								break;
							case 'slideright': 
								left  = 100+'%';
								break;
							/**/
							case 'fliptop': 
								top  = -100+'%';
								break;
							case 'flipbottom': 
								top  = 100+'%';
								break;
							case 'flipleft': 
								left  = -100+'%';
								break;
							case 'flipright': 
								left  = 100+'%';
								break;
							/**/
							case 'spinleft': 
								left  = -100+'%';
								break;
							case 'spinright': 
								left  = 100+'%';
								break;
							/**/
							case 'zoomin': 
								opacity = 0;
								break;
							case 'zoomout': 
								opacity = 0;
								break;
							/**/
							case 'fadein': 
								opacity = 0;
								break;
						}
					}
					var slideItemInChildren = slideItemIn.children('.iS-Item');

					slideItemInChildren.each(function(){
						var current = $(this);
						if(slideBack == true && current.attr('data-effectinback')) {
							var currentEffect = current.attr('data-effectinback');
						}
						else {
							var currentEffect = current.attr('data-effectin');
						}
						if(slideBack == true && current.attr('data-effectintimeback')) {
							var currentTime = parseInt(current.attr('data-effectintimeback'));
						}
						else {
							var currentTime = parseInt(current.attr('data-effectintime'));
						}
						if(slideBack == true && current.attr('data-effectindelayback')) {
							var currentDelay = parseInt(current.attr('data-effectindelayback'));
						}
						else {
							var currentDelay = parseInt(current.attr('data-effectindelay'));
						}
						if(currentDelay < 0) {
							currentDelay = 0;
						}
						currentDelay = (currentDelay+25);
						if (currentEffect.indexOf('none') == -1) {
							var currentEffect = ($.trim(currentEffect)).split(' ');
							for(var i=0; i<currentEffect.length; i++) {
								rewriteEffects(currentEffect[i]);				
							}
						}

						var topIn = top;
						var leftIn = left;
						var opacityIn = opacity;				
						top = 0+'%';
						left = 0+'%';
						opacity = 1;

						current.css({top: topIn, left: leftIn, opacity: opacityIn});
						setTimeout (function() {
							current.stop().animate({top: 0+'%', left: 0+'%', opacity: 1},currentTime);
						},currentDelay);
						var currentTotal = currentDelay + currentTime +100;
						try{
							slideRetroCinematic(current,currentTotal);
						}catch(error){}
					});

					var slideItemOutChildren = slideItemOut.children('.iS-Item');

					slideItemOutChildren.each(function(){
						var current = $(this);
						if(slideBack == true && current.attr('data-effectoutback')) {
							var currentEffect = current.attr('data-effectoutback');
						}
						else {
							var currentEffect = current.attr('data-effectout');
						}
						if(slideBack == true && current.attr('data-effectouttimeback')) {
							var currentTime = parseInt(current.attr('data-effectouttimeback'));
						}
						else {
							var currentTime = parseInt(current.attr('data-effectouttime'));
						}
						if(slideBack == true && current.attr('data-effectoutdelayback')) {
							var currentDelay = parseInt(current.attr('data-effectoutdelayback'));
						}
						else {
							var currentDelay = parseInt(current.attr('data-effectoutdelay'));
						}
						if(currentDelay < 0) {
							currentDelay = 0;
						}

						currentDelay = (currentDelay+25);
						if (currentEffect.indexOf('none') == -1) {
							var currentEffect = ($.trim(currentEffect)).split(' ');
							for(var i=0; i<currentEffect.length; i++) {
								rewriteEffects(currentEffect[i]);				
							}
						}
						var topOut = top;
						var leftOut = left;
						var opacityOut = opacity;						
						top = 0+'%';
						left = 0+'%';
						opacity = 1;

						setTimeout (function() {
							current.stop().animate({top: topOut, left: leftOut, opacity: opacityOut},currentTime);
						},currentDelay);
					});

			}
			function loopStop(){
				if(loopValue != '') {
					if(slideLoopIndicator) {
						slideLoopIndicator.removeClass('iS-Looplineactive');
					}
					clearInterval(loopValue);
					loopValue = '';
				}
			}
			function slideNext(slideItemOut,slideItemIn,slideDotIn) {
				if (isIe == true){					
					slideRetro(slideItemOut,slideItemIn,false);
				}
				
				slideItemIn.addClass('iS-Notime iS-Preactive').removeClass('iS-Proactive iS-Priactive');
				setTimeout (function() {
					slideItemOut.removeClass('iS-Active iS-Activedu iS-Activede').addClass('iS-Proactive')
					slideItemIn.removeClass('iS-Notime iS-Priactive iS-Preactive').addClass('iS-Active iS-Activede');
					slideDot.removeClass(slideDotActiveClass);
					slideDotIn.addClass(slideDotActiveClass);
				},25);
				
				if(loopValue != '') {
					loopStop();
					setTimeout (function() { loopStart(); },25);
				}

				var vimeoout = slideItemOut.children('.iS-Item').children('.iS-VimeoVideo').children('iframe');
				var vimeoin = slideItemIn.children('.iS-Item').children('.iS-VimeoVideo.iS-VideoAutoPlay').children('iframe');
				var youtubeout = slideItemOut.children('.iS-Item').children('.iS-YoutubeVideo').children('iframe');
				var youtubein = slideItemIn.children('.iS-Item').children('.iS-YoutubeVideo.iS-VideoAutoPlay').children('iframe');

				if(vimeoout.length != 0) {
					vimeopause(vimeoout);
				}
				if(vimeoin.length != 0) {

					var videotimetostart = vimeoin.parent().parent().attr('data-effectintime');
					var videodelaytostart = vimeoin.parent().parent().attr('data-effectindelay');
					var videotostart = parseInt(videotimetostart)+parseInt(videodelaytostart);

					setTimeout (function() {
						vimeoplay(vimeoin);
					},videotostart);
					setTimeout (function() {
						loopStop();
					},30);
				}
				if(youtubeout.length != 0) {
					$('#'+slideId+'ytbvout').attr('id','');
					$('#'+slideId+'ytbvin').attr('id','');
					if(youtubeout.parent('.iS-YoutubeVideo').attr('id')) {
						var idpre = youtubeout.parent('.iS-YoutubeVideo').attr('id');
						callPlayer(idpre,'pauseVideo');						
					}
					else {
						var idnew = slideId+'ytbvout';
						youtubeout.parent('.iS-YoutubeVideo').attr('id',idnew);
						callPlayer(idnew,'pauseVideo');
					}
				}				
				if(youtubein.length != 0) {

					var videotimetostart = youtubein.parent().parent().attr('data-effectintime');
					var videodelaytostart = youtubein.parent().parent().attr('data-effectindelay');
					var videotostart = parseInt(videotimetostart)+parseInt(videodelaytostart);

					$('#'+slideId+'ytbvout').attr('id','');
					$('#'+slideId+'ytbvin').attr('id','');
					if(youtubein.parent('.iS-YoutubeVideo').attr('id')) {
						var idpre = youtubein.parent('.iS-YoutubeVideo').attr('id');
						setTimeout (function() {
							callPlayer(idpre,'playVideo');
						},videotostart);					
					}
					else {
						var idnew = slideId+'ytbvin';
						youtubein.parent('.iS-YoutubeVideo').attr('id',idnew);
						setTimeout (function() {
							callPlayer(idnew,'playVideo');
						},videotostart);
					}
					setTimeout (function() {
						loopStop();
					},30);
				}
			}
			function slidePrevious(slideItemOut,slideItemIn,slideDotIn) {
				if (isIe == true){					
					slideRetro(slideItemOut,slideItemIn,true);
				}

				slideItemIn.addClass('iS-Notime iS-Pruactive').removeClass('iS-Proactive iS-Priactive');
				setTimeout (function() {
					slideItemOut.removeClass('iS-Active iS-Activedu iS-Activede').addClass('iS-Priactive')
					slideItemIn.removeClass('iS-Notime iS-Pruactive iS-Preactive').addClass('iS-Active iS-Activedu');
					slideDot.removeClass(slideDotActiveClass);
					slideDotIn.addClass(slideDotActiveClass);
				},25);
				
				if(loopValue != '') {
					loopStop();
					setTimeout (function() { loopStart(); },25);
				}

				var vimeoout = slideItemOut.children('.iS-Item').children('.iS-VimeoVideo').children('iframe');
				var vimeoin = slideItemIn.children('.iS-Item').children('.iS-VimeoVideo.iS-VideoAutoPlay').children('iframe');
				var youtubeout = slideItemOut.children('.iS-Item').children('.iS-YoutubeVideo').children('iframe');
				var youtubein = slideItemIn.children('.iS-Item').children('.iS-YoutubeVideo.iS-VideoAutoPlay').children('iframe');

				if(vimeoout.length != 0) {
					vimeopause(vimeoout);
				}
				if(vimeoin.length != 0) {

					var videoParent = vimeoin.parent().parent();
					if(videoParent.attr('data-effectintimeback')){
						var videotimetostart = videoParent.attr('data-effectintimeback');
					}
					else {
						var videotimetostart = videoParent.attr('data-effectintime');
					}
					if(videoParent.attr('data-effectindelayback')){
						var videodelaytostart = videoParent.attr('data-effectindelayback');
					}
					else {
						var videodelaytostart = videoParent.attr('data-effectindelay');
					}
					var videotostart = parseInt(videotimetostart)+parseInt(videodelaytostart);

					setTimeout (function() {
						vimeoplay(vimeoin);
					},videotostart);
					setTimeout (function() {
						loopStop();
					},30);

				}
				if(youtubeout.length != 0) {
					$('#'+slideId+'ytbvout').attr('id','');
					$('#'+slideId+'ytbvin').attr('id','');
					if(youtubeout.parent('.iS-YoutubeVideo').attr('id')) {
						var idpre = youtubeout.parent('.iS-YoutubeVideo').attr('id');
						callPlayer(idpre,'pauseVideo');						
					}
					else {
						var idnew = slideId+'ytbvout';
						youtubeout.parent('.iS-YoutubeVideo').attr('id',idnew);
						callPlayer(idnew,'pauseVideo');
					}
				}				
				if(youtubein.length != 0) {

					var videoParent = youtubein.parent().parent();
					if(videoParent.attr('data-effectintimeback')){
						var videotimetostart = videoParent.attr('data-effectintimeback');
					}
					else {
						var videotimetostart = videoParent.attr('data-effectintime');
					}
					if(videoParent.attr('data-effectindelayback')){
						var videodelaytostart = videoParent.attr('data-effectindelayback');
					}
					else {
						var videodelaytostart = videoParent.attr('data-effectindelay');
					}
					var videotostart = parseInt(videotimetostart)+parseInt(videodelaytostart);

					$('#'+slideId+'ytbvout').attr('id','');
					$('#'+slideId+'ytbvin').attr('id','');
					if(youtubein.parent('.iS-YoutubeVideo').attr('id')) {
						var idpre = youtubein.parent('.iS-YoutubeVideo').attr('id');
						setTimeout (function() {
							callPlayer(idpre,'playVideo');
						},videotostart);
					}
					else {
						var idnew = slideId+'ytbvin';
						youtubein.parent('.iS-YoutubeVideo').attr('id',idnew);
						setTimeout (function() {
							callPlayer(idnew,'playVideo');
						},videotostart);
					}
					setTimeout (function() {
						loopStop();
					},30);
				}
			}
			function loopStart() {
				if(loopValue == '') {
					var loopTime = 5000;
					var currentSlides = slideContent.children('.iS-Active');
					if(currentSlides.attr('data-looptime') && $.isNumeric(currentSlides.attr('data-looptime'))) {
						var time = parseInt(currentSlides.attr('data-looptime'));
						if(time >= 50) {
							loopTime = time;
						}
						else {
							loopTime = 50;
						}
					}				
					if(slideLoopIndicator) {
						slideLoopIndicator.addClass('iS-Looplineactive');
						slideLoopIndicator.css({webkitAnimationDuration: loopTime+'ms', AnimationDuration: loopTime+'ms'});
					}
					loopValue = setTimeout(function() {
						slideNextButton.click();
					}, loopTime);	
				}
			}
			/**/			
			function textCenter() {
				slideItem.children('.iS-TextCenter').each(function() {
					$(this).css({left: 'auto', right: 'auto', marginLeft: ($(this).parent().width()-$(this).outerWidth())/2});
				});			
			}
			function textMiddle() {
				slideItem.children('.iS-TextMiddle').each(function() {
					$(this).css({top: 'auto', bottom: 'auto', marginTop: ($(this).parent().height()-$(this).outerHeight())/2});
				});
			}			
			function imageAutofit() {
				slideItem.children('img.iS-ImageAutofit').each(function() {
					var current = $(this);
					current.css({width: 'auto', height: 'auto',marginLeft: '', marginTop: ''});					
					var currentPositionX = 0.5;
					var currentPositionY = 0.5;
					if(current.attr('data-positionx')) {
						var currentPositionX = current.attr('data-positionx');
					}
					if(current.attr('data-positiony')) {
						var currentPositionY = current.attr('data-positiony');
					}
					if (currentPositionX == 'left') {
						currentPosition = 0;	
					}
					else if (currentPositionX == 'center') {
						currentPosition = 0.5;	
					}
					else if (currentPositionX == 'right') {
						currentPosition = 1;	
					}
					if (currentPositionY == 'top') {
						currentPosition = 0;	
					}
					else if (currentPositionY == 'middle') {
						currentPosition = 0.5;	
					}
					else if (currentPositionY == 'bottom') {
						currentPosition = 1;	
					}
					var currentWidth = current.width();
					var currentHeight = current.height();
					var container = current.parent();
					var containerWidth = container.width();
					var containerHeight = container.height();
					var ratioContainer = containerWidth/containerHeight;
					var ratioCurrent = currentWidth/currentHeight;

					if(ratioContainer >= ratioCurrent) {
						current.css({width: 100+'%'});
						current.css({marginTop: -((current.height()-containerHeight)*currentPositionX)+'px'})						
					}
					else {
						current.css({height: 100+'%'});
						current.css({marginLeft: -((current.width()-containerWidth)*currentPositionY)+'px'})
					}
				});
			}
			function canvasAutofit() {
				slideItem.children('canvas.iS-CanvasAutofit').each(function() {
					var current = $(this);
					var currentParent = current.parent();
					var currentImage = currentParent.children('.iS-ImageCanvas');
					var currentImageWidth = currentImage.width();
					var currentImageHeight = currentImage.height();
					var currentImageMarginT = currentImage.css('margin-top');
					var currentImageMarginL = currentImage.css('margin-left');
					current.css({width: currentImageWidth, height: currentImageHeight,marginLeft: currentImageMarginL, marginTop: currentImageMarginT});
				});
			}
			function textHole() {
				slideItem.children('.iS-TextHole').children('.iS-Canvas').remove();
				slideItem.children('.iS-TextHole').css({color: '', backgroundColor: '', width: '', height: ''});
				slideItem.children('.iS-TextHole').each(function() {
					/*Values*/
					var origin = $(this);
					var oParent = origin.parent();
					var oGparent = oParent.parent();
					oGparent.addClass('iS-Notime')
					oParent.css({opacity: 1});
					var oWidth = origin.outerWidth()+1;
					var oHeight = origin.outerHeight();
					var oWidthI = origin.width();
					var oHeightI = origin.height();
					var oPaddingL = (oWidth-oWidthI)/2;
					var oPaddingT = (oHeight-oHeightI)/2;
					var oFontSize = origin.css('font-size');
					var oFontWeight = origin.css('font-weight');
					var oFontFamily = origin.css('font-family');	
					var oBgColor = origin.css('background-color');
					var oContent = origin.html();
					oParent.css({opacity: ''});
					oGparent.removeClass('iS-Notime');
					/*Preparation*/
					origin.css ({
						color: 'transparent',
						backgroundColor: 'transparent',
						width: oWidth,
						height: oHeight
					});
					origin.prepend('<canvas class="iS-Canvas" width="'+oWidth+'" height="'+oHeight+'"></canvas>');
					var oCanvas = origin.children('.iS-Canvas');
					oCanvas.css ({
						position: 'absolute',
						top: 0,
						left: 0,
						zIndex: -1
					});
					var ctx = oCanvas[0].getContext("2d");
					ctx.font = oFontWeight+' '+oFontSize+' '+oFontFamily;		
					ctx.fillStyle = oBgColor;
					ctx.fillRect(0,0,oWidth,oHeight);		
					ctx.globalCompositeOperation = 'destination-out'; 
					ctx.textBaseline="middle";
					ctx.textAlign="center";
					ctx.fillText(oContent, oPaddingL+(oWidthI/2), oPaddingT+(oHeightI/2));

					
				});
			}
			function imageBlur() {
				$('img.iS-ImageBlur').each(function(){

					var currentImage = $(this);
					if(currentImage.css('display') != 'none') {
						var currentImageWidth = currentImage.width();
						var currentImageHeight = currentImage.height();

						var naturalImage = currentImage[0];
						var naturalImageWidth = naturalImage.naturalWidth;
						var naturalImageHeight = naturalImage.naturalHeight;

						var currentImageMarginT = currentImage.css('margin-top');
						var currentImageMarginL = currentImage.css('margin-left');

						var currentImageParent = currentImage.parent();
						var currentCanvas = '<canvas class="iS-CanvasBlur" width="'+naturalImageWidth+'" height="'+naturalImageHeight+'"></canvas>';
						currentImageParent.prepend(currentCanvas);

						var canvas = currentImageParent.children('.iS-CanvasBlur');
						var naturalCanvas = canvas[0];
						var context = naturalCanvas.getContext("2d");
						/**/
						var radius = 15;
						if(currentImage.attr('data-blurRadius')) {
							radius = parseInt(currentImage.attr('data-blurRadius'));
						}
						/**/
						context.clearRect( 0, 0, 100+'%', 100+'%');
						context.drawImage(naturalImage, 0, 0);

						canvas.css({position: 'absolute', width: currentImageWidth, height: naturalImageHeight, marginTop: currentImageMarginT, marginLeft: currentImageMarginL});

						if(currentImage.hasClass('iS-ImageAutofit')) {
							canvas.addClass('iS-CanvasAutofit');
							currentImage.addClass('iS-ImageCanvas')
						}
						currentImage.css({opacity: 0});
						try{
							canvasBlur(naturalCanvas,naturalImageWidth,naturalImageHeight,radius);
						
							if(currentImage.hasClass('iS-ImageGrayscale') || currentImage.hasClass('iS-ImageGreyscale')) {
								canvasGrayscale(naturalCanvas,naturalImageWidth,naturalImageHeight);
								canvas.addClass('iS-CanvasGrayscale');
							}
						}
						catch(error){
							if($('.specialofflinex').length == 0) {
							var thisstyle = 'top: 80px;position: absolute;width: 60%;padding: 10px;text-align: center;font-size: 20px;color: rgb(255, 255, 255);background-color: rgba(0, 0, 0, 0.3);left: 20%;'
currentImageParent.append('<p style="'+thisstyle+'">ImageBlur and ImageGrayscale does not work offline with Chrome and Opera Browsers</p>');
							}
						}
					}
				});
			}
			function imageGrayscale() {
				$('img.iS-ImageGrayscale, img.iS-ImageGreyscale').each(function(){

					var currentImage = $(this);
					if(!currentImage.hasClass('iS-ImageBlur') && currentImage.css('display') != 'none') {

						var currentImageWidth = currentImage.width();
						var currentImageHeight = currentImage.height();

						var naturalImage = currentImage[0];
						var naturalImageWidth = naturalImage.naturalWidth;
						var naturalImageHeight = naturalImage.naturalHeight;

						var currentImageMarginT = currentImage.css('margin-top');
						var currentImageMarginL = currentImage.css('margin-left');

						var currentImageParent = currentImage.parent();
						var currentCanvas = '<canvas class="iS-CanvasGrayscale" width="'+naturalImageWidth+'" height="'+naturalImageHeight+'"></canvas>';
						currentImageParent.prepend(currentCanvas);

						var canvas = currentImageParent.children('.iS-CanvasGrayscale');
						var naturalCanvas = canvas[0];
						var context = naturalCanvas.getContext("2d");
						var radius = 20;

						context.clearRect( 0, 0, 100+'%', 100+'%');
						context.drawImage(naturalImage, 0, 0);

						canvas.css({position: 'absolute', width: currentImageWidth, height: naturalImageHeight, marginTop: currentImageMarginT, marginLeft: currentImageMarginL});

						if(currentImage.hasClass('iS-ImageAutofit')) {
							canvas.addClass('iS-CanvasAutofit');
							currentImage.addClass('iS-ImageCanvas')
						}
						currentImage.css({opacity: 0});
						try{
							canvasGrayscale(naturalCanvas,naturalImageWidth,naturalImageHeight);
						}
						catch(error){
							if($('.specialofflinex').length == 0) {
							var thisstyle = 'top: 80px;position: absolute;width: 60%;padding: 10px;text-align: center;font-size: 20px;color: rgb(255, 255, 255);background-color: rgba(0, 0, 0, 0.3);left: 20%;'
currentImageParent.append('<p style="'+thisstyle+'">ImageBlur and ImageGrayscale does not work offline with Chrome and Opera Browsers</p>');
							}
						}
					}
				});
			}
			/*Commands*/
			if (c_next == true) {
				slideNextButton.click(function(){
					var slideItemsNumber = slideItems.length;
					var slideCurrent = slide.children('.iS-Content').children('.iS-Active').index();
					/**/
					var slideItemOut = slideItems.eq(slideCurrent);		
					if(slideCurrent < slideItemsNumber-1) { slideCurrent++; }
					else { slideCurrent = 0; }
					var slideItemIn = slideItems.eq(slideCurrent);
					var slideDotIn = slideDot.eq(slideCurrent);
					/**/
					slideNext(slideItemOut,slideItemIn,slideDotIn);
				});
			}
			if (c_previous == true) {
				slidePreviousButton.click(function(){
					var slideItemsNumber = slideItems.length;
					var slideCurrent = slide.children('.iS-Content').children('.iS-Active').index();
					/**/		
					var slideItemOut = slideItems.eq(slideCurrent);	
					if(slideCurrent > 0) { slideCurrent--; }
					else { slideCurrent = slideItemsNumber-1; }
					var slideItemIn = slideItems.eq(slideCurrent);
					var slideDotIn = slideDot.eq(slideCurrent);
					/**/
					slidePrevious(slideItemOut,slideItemIn,slideDotIn);
				});
			}
			if (c_play == true) {
				slidePlayButton.click(function(){
					if (infinitySliderLoopIndicator != '') {
						if(!slideLoopIndicator) {
							var slideLoopIndicator = slideCommands.children('.'+infinitySliderLoopIndicator);
							slideLoopIndicator.addClass('iS-Loopline');
						}
					}
					loopStart();
					if($('.'+slideStopActiveClass).length != 0) {
						slideStopButton.removeClass(slideStopActiveClass);
					}
					slidePlayButton.addClass(slidePlayActiveClass);				
				});
			}
			if (c_stop== true) {
				slideStopButton.click(function(){
					loopStop();		
					if($('.'+slidePlayActiveClass).length != 0) {
						slidePlayButton.removeClass(slidePlayActiveClass);						
					}
					slideStopButton.addClass(slideStopActiveClass);		
				});
			}
			if (c_dot == true) {
				slideDot.click(function(){
					var slideItemOut = slideItems.eq(slideDots.children('.iS-Dotactive').index());				
					var slideItemIn = slideItems.eq($(this).index());
					var slideDotIn = $(this);
					var slideSelect = $(this).index() - slideDots.children('.iS-Dotactive').index();
					if (slideSelect > 0) {
						slideNext(slideItemOut,slideItemIn,slideDotIn);
					}
					else if (slideSelect < 0) {
						slidePrevious(slideItemOut,slideItemIn,slideDotIn);
					}
				});
			}
			if (c_key == true) {
				$('body').keydown(function(e) {
					if(e.keyCode == 37 && c_previous == true) {
						slidePreviousButton.click();
					}
					else if(e.keyCode == 39 && c_next == true) {
						slideNextButton.click();
					}
				});	
			}
			var c_touch;
			if (typeof infinitySliderTouchNavigation != 'undefined' && infinitySliderTouchNavigation != '') {
				c_touch = infinitySliderTouchNavigation;
			}
			if(c_touch == 'desktop' || c_touch == 'both') {
				var startTouch;				
				var endTouch;
				slide.mousedown(function(e) {
					if(e.offsetX == undefined) {
						startTouch = e.pageX
					}
					else {
						startTouch = e.offsetX;
					}
				});
				slide.mouseup(function(e) {
					if(e.offsetX == undefined) {
						endTouch = e.pageX
					}
					else {
						endTouch = e.offsetX;
					}
					var touchRatio = startTouch-endTouch;
					if(touchRatio < -50) {
						slidePreviousButton.click();
					}
					else if(touchRatio > 50) {
						slideNextButton.click();
					}
				});
			}
			if(c_touch == 'mobile' || c_touch == 'both') {
				var startTouch;				
				var endTouch;
				var countTouch;
				slide.bind('touchstart', function(e) {
					countTouch = 0;
					startTouch = e.originalEvent.targetTouches[0].pageX;
				});
				slide.bind('touchmove',function(e){
					countTouch++;
					endTouch = e.originalEvent.targetTouches[0].pageX;
					var touchRatio = startTouch-endTouch;
					if(touchRatio < -10 && countTouch == 1) {
						slidePreviousButton.click();
					}
					else if(touchRatio > 10 && countTouch == 1) {
						slideNextButton.click();
					}
					else if(countTouch == 10 && touchRatio < -50) {
						slidePreviousButton.click();
					}
					else if(countTouch == 10 && touchRatio > 50){
						slideNextButton.click();
					}
				});
			}			
			if (slide.find('.iS-Hoverstop').length != 0) {
				var hovercurrent = slide.find('.iS-Hoverstop');
				var wasplay;
				hovercurrent.mouseenter(function() {
					wasplay = false;
					if (loopValue != '') {
						loopStop();
						wasplay = true;
					}
				}).mouseleave(function() {
					if (wasplay == true && loopValue == '') {
						loopStart();
					}
				});
			}

			var starterslide = 0;
			if (typeof infinitySliderStarterSlide != 'undefined' && infinitySliderStarterSlide != '') {
				if($.isNumeric(infinitySliderStarterSlide)) {
					var currentstarterslide = parseInt(infinitySliderStarterSlide);
					if(currentstarterslide > 0 && currentstarterslide < slideItems.length+1) {
						starterslide = currentstarterslide-1;
					}
				}
			}
			if(slide.children('.iS-Firstload').length == 0) {
				$('.iS-Commands, .iS-Content').css('opacity', 0);
			}
			/*IE9 Alternative Animations*/
			if(isIe == true && $('.iS-Loopline').length != 0) {
				$('.iS-Loopline').css({display: 'none'});
			}

			$(window).load(function() {
				textHole();
				imageBlur();
				imageGrayscale();

				textCenter();
				textMiddle();
				imageAutofit();
				canvasAutofit();

				$('.iS-Commands').animate({opacity: 1},500)
				$('.iS-Content').delay(500).animate({opacity: 1},500)

				setTimeout(function(){
					slideItems.eq(starterslide).addClass('iS-Active iS-Activede').removeClass('iS-Preactive iS-Notime');
					if(isIe == true) {
						slideItems.eq(starterslide).css({zIndex: 1, opacity: 1});
					}
					/*Dotactive*/
					if (c_dot == true) {
						slideDot.eq(starterslide).addClass(slideDotActiveClass);
					}
					/*Loop Start*/
					if (c_loop == true) {	
						if (infinitySliderLoopIndicator != '' && !slideLoopIndicator) {
							var slideLoopIndicator = slideCommands.children('.'+infinitySliderLoopIndicator);
							slideLoopIndicator.addClass('iS-Loopline');
						}
						loopStart();
					}				
				},1000)
				slide.append('<div class="iS-Firstload"></div>');
			});
			$( window ).resize(function() {

				textHole();

				textCenter();
				textMiddle();
				imageAutofit();
				canvasAutofit();
			});
		}//else
	}//else	
	if(error == '' && isIe == false) {
		console.log('\nSlide "'+infinitySliderId+'" succefully loaded!\n');
	}
	/*reset*/
	infinitySliderId = '';
	infinitySliderCommandsClass = '';
	infinitySliderPreviousButtonClass = '';
	infinitySliderNextButtonClass = '';
	infinitySliderDotsClass = '';
	infinitySliderDotClass = '';
	infinitySliderDotActiveClass = '';
	infinitySliderPlayButtonClass ='';
	infinitySliderPlayButtonActiveClass ='';
	infinitySliderStopButtonClass = '';
	infinitySliderStopButtonActiveClass = '';
	infinitySliderLoopIndicator ='';
	infinitySliderContentClass = '';
	infinitySliderItemsClass = '';
	infinitySliderItemClass = '';
	infinitySliderAutoStartLoop = '';
	infinitySliderKeyboardNavigation = '';
	infinitySliderStarterSlide = '';
	infinitySliderTouchNavigation = '';
}//infinitySlider