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
		
	showme('right');
	hideme('right_hover');
	
	showme('left');
	hideme('left_hover');
	
	text_cube('show');
}
function cube_event_handler(id) {
	switch (id) {
		case 'top':
			reset_cube();
			hideme('top');
			showme('top_hover');
			text_cube('hide');
			break;
		case 'right':
			reset_cube();
			hideme('right');
			showme('right_hover');
			text_cube('hide');
			break;
		case 'left':
			reset_cube();
			hideme('left');
			showme('left_hover');
			text_cube('hide');
			break;
		default:
			reset_cube();
			break;
	}
}