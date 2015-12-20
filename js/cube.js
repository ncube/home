function text_cube(action) {
	if (action == 'hide') {
		c_hideme('arrow_blue');
		hideme('edu');
		c_hideme('arrow_green');
		hideme('comm');
		c_hideme('arrow_red');
		hideme('soft');
	}
	
	if (action == 'show') {
		c_showme('arrow_blue');
		showme('edu');
		c_showme('arrow_green');
		showme('comm');
		c_showme('arrow_red');
		showme('soft');
	}
}
function reset_cube() {
	showme('top');
	hideme('top_hover');
	hideme('edu_form');
	hideme('pedu');
	hideme('hedu');	
		
	showme('right');
	hideme('right_hover');
	hideme('com_form');
	hideme('pcom');
	hideme('hcom');
	
	showme('left');
	hideme('left_hover');
	hideme('soft_form');
	hideme('psoft');
	hideme('hsoft');
	
	text_cube('show');
	colorme('footer', '');
}
function cube_event_handler(id) {
	switch (id) {
		case 'top':
			reset_cube();
			hideme('top');
			showme('top_hover');
			text_cube('hide');
			showme('edu_form');
			showme('pedu');
			showme('hedu');
			colorme('footer', '#4286F3');
			break;
		case 'right':
			reset_cube();
			hideme('right');
			showme('right_hover');
			text_cube('hide');
			showme('com_form');
			showme('pcom');
			showme('hcom');
			colorme('footer', '#5aca00');
			break;
		case 'left':
			reset_cube();
			hideme('left');
			showme('left_hover');
			text_cube('hide');
			showme('soft_form');
			showme('psoft');
			showme('hsoft');
			colorme('footer', '#DE5833');
			break;		
		default:
			reset_cube();
			break;
	}
}