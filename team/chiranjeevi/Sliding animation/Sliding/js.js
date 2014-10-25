function speakerSlider(){
	// IF IS LAPTOP
	var sliderLenght = 6;
	var slideCounter = 0;
	var bAnimate = false;
	var slideHeight = 76;
	
	if($(document.body).hasClass('ie')){
		slideHeight = 108;
	};
	
	//init
	$$('.speaker').each(function(el, index){
		el.setProperty('speaker-position',index);
		el.setStyle('top',slideCounter*slideHeight);
		
		//IF ISN'T MOBILE
		if(mobileDevice == false && !$(document.body).hasClass('ie')){
			el.addEvents({
				mouseover: function(){
					el.addClass('hover');
					$('speakers').addClass('open-speaker');
				},
				mouseout: function(){
					el.removeClass('hover');
					$('speakers').removeClass('open-speaker');
				}
			});
		};
		slideCounter++;
	});
	
	// prev/next event
	$('prev-speaker').addEvent('click', function(speaker){
		slideToSpeaker('prev');
		return false;
	});
	$('next-speaker').addEvent('click', function(speaker){
		slideToSpeaker('next');
		return false;
	});
	
	$('more-speakers').addEvent('click', function(speaker){
		slideToSpeaker('next');
		return false;
	});
	
	//slideToSpeaker
	function slideToSpeaker(elementToSlide){
		if(bAnimate == false){
			bAnimate = true;
			
			var iCurrent = 0;
			var iDirection = 0;
			
			//Get first speaker
			$$('.speaker').each(function(el, index){
				if(el.getProperty('speaker-position') == 0){
					iCurrent = index;
				};
			});
			
			//if prev or next;
			if(elementToSlide == 'next'){
				elementToSlide = iCurrent+sliderLenght
			}else if(elementToSlide == 'prev'){
				elementToSlide = iCurrent-sliderLenght
			}
			
			//Calculate position
			iDirection = iCurrent-elementToSlide;
					
			$$('.speaker').each(function(el, index){
				
				var iNewPosition = el.getProperty('speaker-position').toInt() + iDirection;
				
				if(iNewPosition >= slideCounter){
					
					el.addClass('hidden-speaker');
					el.setStyle('top',((iNewPosition-slideCounter)-sliderLenght)*slideHeight);
					el.setProperty('speaker-position',iNewPosition);
					(function() {
						el.removeClass('hidden-speaker');
					});
					iNewPosition = iNewPosition-slideCounter;
				};
				
				el.setProperty('speaker-position',iNewPosition);
				
				(function() {
					el.removeClass('hidden-speaker');
					
					el.setStyle('top',iNewPosition*slideHeight);
					
					if(iNewPosition < 0){
						iNewPosition = slideCounter+iNewPosition;
						(function() {
							el.addClass('hidden-speaker');
							el.setProperty('speaker-position',iNewPosition);
							el.setStyle('top',iNewPosition*slideHeight);
							(function() {
								el.removeClass('hidden-speaker');
							}).delay(200);
						}).delay(200);
					};
				}).delay(100);
			});
			(function() {
				bAnimate = false;
			}).delay(500);
			
		};
	};
	// IF IS MOBILE
	if(mobileDevice == true){
		window.addEvent('domready',function(){
		// LOAD SWIPE SCRIPTS
			var myScript = Asset.javascript('/files/templates/default/public/js/custom-event.js', {
				id: 'swipe-script',
				onLoad: function(){
					var myScript = Asset.javascript('/files/templates/default/public/js/swipe.js', {
						id: 'swipe-script',
						onLoad: function(){
							slideMobile();
						}
					});
				}
			});
		});
	}
};
