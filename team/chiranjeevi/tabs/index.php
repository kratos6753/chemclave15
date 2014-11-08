<!DOCTYPE html>
<html lang="en" class="no-js">
	<head>
		<meta charset="UTF-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge"> 
		<meta name="viewport" content="width=device-width, initial-scale=1"> 
		<title>Tab Styles Inspiration</title>
		<meta name="description" content="Tab Styles Inspiration: A small collection of styles for tabs" />
		<meta name="keywords" content="tabs, inspiration, web design, css, modern, effects, svg" />
		<meta name="author" content="Chemclave" />
		<!--<link rel="shortcut icon" href="../favicon.ico">-->
		<link rel="stylesheet" type="text/css" href="css/normalize.css" />
		<link rel="stylesheet" type="text/css" href="css/demo.css" />
		<link rel="stylesheet" type="text/css" href="css/tabs.css" />
		<link rel="stylesheet" type="text/css" href="css/component2.css" />
		<link rel="stylesheet" type="text/css" href="css/tabstyles.css" />
		<script src="http://code.jquery.com/jquery.js"></script>
  		<script src="js/modernizr-2.6.2.min.js"></script>
	</head>
	<body>
		<div class="container">
			<section>
				<div class="tabs tabs-style-linebox">
					<nav>
						<ul>
							<li><a href="#section-linebox-5"><span>Introduction</span></a></li>
							<li><a href="#section-linebox-4"><span>Rules</span></a></li>
							<li><a href="#section-linebox-2"><span>Format</span></a></li>
							<li><a href="#section-linebox-3"><span>Contact</span></a></li>
							<li><a href="#section-linebox-5"><span>Register</span></a></li>
						</ul>
					</nav>
					<div class="content-wrap">
						<section id="section-linebox-1"><p>1</p></section>
						<section id="section-linebox-2"><p>2</p></section>
						<section id="section-linebox-3"><p>3</p></section>
						<section id="section-linebox-4"><p>4</p></section>
						<section id="section-linebox-5"><p>5</p></section>
					</div><!-- /content -->
				</div><!-- /tabs -->
			</section>
			<div class="component">
				<!-- Start Nav Structure -->
				<button class="cn-button" id="cn-button-1">Menu</button>
				<div class="cn-wrapper" id="cn-wrapper-1">
					<ul>
						<li><a href="#"><span>About</span></a></li>
						<li><a href="#"><span>Tutorials</span></a></li>
						<li><a href="#"><span>Articles</span></a></li>
						<li><a href="#"><span>Snippets</span></a></li>
						<li><a href="#"><span>Plugins</span></a></li>
						<li><a href="#"><span>Contact</span></a></li>
						<li><a href="#"><span>Follow</span></a></li>
					 </ul>
				</div>

				<button class="cn-button" id="cn-button-2">Menu</button>
				<div class="cn-wrapper" id="cn-wrapper-2">
					<ul>
						<li><a href="#"><span>About</span></a></li>
						<li><a href="#"><span>Tutorials</span></a></li>
						<li><a href="#"><span>Articles</span></a></li>
						<li><a href="#"><span>Snippets</span></a></li>
						<li><a href="#"><span>Plugins</span></a></li>
						<li><a href="#"><span>Contact</span></a></li>
						<li><a href="#"><span>Follow</span></a></li>
					 </ul>
				</div>

				<button class="cn-button" id="cn-button-3">Menu</button>
				<div class="cn-wrapper" id="cn-wrapper-3">
					<ul>
						<li><a href="#"><span>About</span></a></li>
						<li><a href="#"><span>Tutorials</span></a></li>
						<li><a href="#"><span>Articles</span></a></li>
						<li><a href="#"><span>Snippets</span></a></li>
						<li><a href="#"><span>Plugins</span></a></li>
						<li><a href="#"><span>Contact</span></a></li>
						<li><a href="#"><span>Follow</span></a></li>
					 </ul>
				</div>

				<button class="cn-button" id="cn-button-4">Menu</button>
				<div class="cn-wrapper" id="cn-wrapper-4">
					<ul>
						<li><a href="#"><span>About</span></a></li>
						<li><a href="#"><span>Tutorials</span></a></li>
						<li><a href="#"><span>Articles</span></a></li>
						<li><a href="#"><span>Snippets</span></a></li>
						<li><a href="#"><span>Plugins</span></a></li>
						<li><a href="#"><span>Contact</span></a></li>
						<li><a href="#"><span>Follow</span></a></li>
					 </ul>
				</div>
				<!-- End of Nav Structure -->
			</div>
		</div><!-- End of Container -->
		<script src="js/cbpFWTabs.js"></script>
		<script src="js/polyfills.js"></script>
		<script src="js/demo2.js"></script>
		<script>
			(function() {

				[].slice.call( document.querySelectorAll( '.tabs' ) ).forEach( function( el ) {
					new CBPFWTabs( el );
				});

			})();
		</script>
	</body>
</html>