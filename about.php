<!DOCTYPE html>
<html>
	<head>
		<title>N Cube School of Knowledge - About Us</title>
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
				<a href="index.php"><h1 class="title" href="index.php">NCube School of Knowledge</h1></a>
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
			<div class="content">				
				<h2 class="heading">About Us</h2>				
				<div class="main_content">
					<h3>Our Mission</h3>
					<p>
						Our mission is to provide Knowledge and collaborate people around the world for free.
					</p>
					<h3>About Ncube</h3>
					<p>
						NCube is a non-profit organization founded to provide knowledge not information and collaborate people around world. The name "NCube" is the short form of Noegenesis derived from Greek meaning "The acquistion of new knowledge from experience, observation and from inferring relationships between known things."
					</p>
					<p>
						Ncube is categorized into Education, Community, Softwares.
					</p>
					<ul>
						<h4>Education</h4>
					</ul>
					<ul>
						<p>
							We provide resource for learning and collaboration. We developed a educational social network to help students, teachers and researchers to collaborate and share knowledge from anywhere. Anyone can host a research project where people can join and share their work with each other.
						</p>
						<p>
							We are trying hard to replace standardized test with NCube points, it is scored by answering real question from people who are learning or who need help for their projects.
						</p>
					</ul>
					<ul>
						<h4>Community</h4>
					</ul>
					<ul>
						We are building a Community to Build, Maintain and Secure NCube. Anyone can join our community.
					</ul>
					<ul>
						<h4>Softwares</h4>
					</ul>
					<ul>
						Currently we haven't released any software, We are planning to develop softwares for Schools, Students, Teachers. All Ncube's softwares are Open source and free forever.
					</ul>					
					<h3>Goals</h3>
					<ul>1. Fliping Class Room</ul>
					<ul>2. Giving Unstanderized Test</ul>
					<ul>3. Collaborating students all around the world for learning, education etc.</ul>
					<ul>4. Providing High Quality Education to everyone and enhance people.</ul>					
					<h3>Copyrights</h3>
					<p>NCube is 100% opensource and based on creative commons license anyone can edit, share and redistrubute for free.</p>
					<p>We are a not‑for‑profit because we believe in a free and open education for anyone, anywhere.</p>
					<h3>Getting Involved</h3>
					<p>If you are interested in NCube check <a href="https://github.com/ncube/website" class="underline">"github.com/ncube/website"</a> or contact info@ncubeschool.org</p>
					<h3>Related Articles</h3>
					<ul><a href="#">Features</a></ul>					
					<ul><a href="#">Why we should not keep exams to students</a></ul>					
				</div>
			</div>
			<footer id="footer">
				<strong>
					<a class="footer_items"><span class="cc">c </span>ncubeschool.org &nbsp &nbsp</a>
					<a href="about.php" class="footer_items">About Us &nbsp &nbsp</a>
					<a href="#" class="footer_items">Open Source &nbsp &nbsp</a>
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
			}
		};
		function event_handler(event) {
			var id = event.target.id;
			var class_name = event.target.className;			
			if (class_name == 'search') {
				e_search = document.getElementsByClassName('search')[0];
				e_search.style.width = '600px';
				e_header = document.getElementsByClassName('header')[0];
				e_header.style.position = 'fixed';
				e_content = document.getElementsByClassName('content')[0];
				e_content.style.marginTop = "85px";
				showme('block');
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
				e_content = document.getElementsByClassName('content')[0];
				e_content.style.marginTop = "0";
				hideme('block');				
			}		
	</script>	
	<script src="js/cube.js"></script>
</html>