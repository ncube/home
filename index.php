<!DOCTYPE html>
<html>
	<head>
		<title>N Cube School of Knowledge</title>
		<link rel="stylesheet" href="css/main.css"/>
		<link rel="stylesheet" href="css/cube.css"/>
		<link rel="stylesheet" href="css/font.css"/>
		<script type="text/javascript">			
			function display() {				
				var body = document.getElementById('body');
				body.style.display = 'block';
				document.getElementById('loader').style.display = 'none';
			}
		</script>
	</head>
	<img src="images/Preloader_3.gif" id="loader" />
	<body onload="display()" onclick="event_handler(event)">
		<div class="cubewrap" id="body">
			<div class="header">
				<a href="index.php"><img src="images/logo.svg" id="logo" alt="Logo"></a>
				<a href="index.php"><h1 class="title">NCube School of Knowledge</h1></a>
				<input type="search" class="search" placeholder="Search here..!" />
			</div>
			<div id="block" style="text-align: center;">
				<div class="results">
					Results are displayed here
				</div>
				<div class="results">
					Results are displayed here
				</div>				
				<div class="results">
					Results are displayed here
				</div>
				<div class="results">
					Results are displayed here
				</div>
				<div class="results">
					Results are displayed here
				</div>
				<img src="images/Preloader_3.gif" style="width: 50px;height:50px;"/>				
			</div>
			<div id="cube">
				<img src="images/arrow/arrow_right_bottom.svg" class="arrow_blue" alt="Blue Arrow"/>
				<h2 id="edu">Education</h2>				
				<img src="images/arrow/arrow_right_top.svg" class="arrow_green" alt="Green Arrow"/>
				<h2 id="comm">Community</h2>
				<img src="images/arrow/arrow_left_bottom.svg" class="arrow_red" alt="Red Arrow"/>
				<h2 id="soft">Softwares</h2>
				<?php include 'images/cube.svg'; ?>
			</div>
			<footer id="footer_home">
				<strong>
					<a class="footer_items"><span class="cc">c </span>ncubeschool.org &nbsp &nbsp</a>
					<a href="about.php" class="footer_items">About Us &nbsp &nbsp</a>
					<a href="#" class="footer_items">Developers &nbsp &nbsp</a>
					<a href="#" class="footer_items">Privacy </a>
				</strong>
			</footer>
		</div>
	</body>
	<!--For Pre-Loader	-->
	<script>document.getElementById('body').style.display = 'none';</script>
	<script src="js/common.js"></script>	
	<script>
		document.onkeydown = function(evt) {
			evt = evt || window.event;
			if (evt.keyCode == 27) {
				resetme();
				reset_cube();
			}
		};
		function event_handler(event) {
			var id = event.target.id;
			var class_name = event.target.className;
			cube_event_handler(id);
			if (class_name == 'search') {
				e_search = document.getElementsByClassName('search')[0];
				e_search.style.width = '600px';
				e_header = document.getElementsByClassName('header')[0];
				e_header.style.position = 'fixed';
				showme('block');
				document.getElementById('cube').style.marginTop = '170px';				
			}
			if (class_name == 'cube_wrap') {
				resetme();
			}
			}
			function resetme() {
				e_search = document.getElementsByClassName('search')[0];
				e_search.style.width = '';
				e_header = document.getElementsByClassName('header')[0];
				e_header.style.position = '';
				document.getElementById('cube').style.marginTop = '';
				hideme('block');				
			}		
	</script>	
	<script src="js/cube.js"></script>
</html>