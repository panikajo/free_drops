﻿﻿hs.graphicsDir = '/highslide/graphics/';
	hs.align = 'center';
	hs.transitions = ['expand', 'crossfade'];
	//hs.wrapperClassName = 'dark borderless floating-caption';
	hs.outlineType = 'glossy-dark';
	hs.wrapperClassName = 'dark';

	hs.fadeInOut = true;
	hs.dimmingOpacity = .50;

	hs.showCredits = false;

	// Add the controlbar
	if (hs.addSlideshow) hs.addSlideshow({
		//slideshowGroup: 'group1',
		interval: 3000,
		repeat: false,
		useControls: true,
		fixedControls: 'fit',
		overlayOptions: {
			opacity: .6,
			position: 'bottom center',
			hideOnMouseOut: true
		}
	});