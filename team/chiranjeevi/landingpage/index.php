<?php
	require_once "config.php";
	require_once "process_date.php";
	if ($_POST['email']) {
		include "subscribe.php";
	}
?>
<!DOCTYPE html>
<!-- HTML5 Boilerplate -->
<!--[if lt IE 7]><html class="no-js lt-ie9 lt-ie8 lt-ie7" lang="en"> <![endif]-->
<!--[if (IE 7)&!(IEMobile)]><html class="no-js lt-ie9 lt-ie8" lang="en"><![endif]-->
<!--[if (IE 8)&!(IEMobile)]><html class="no-js lt-ie9" lang="en"><![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en"><!--<![endif]-->
<!--[if lt IE 9]>
<![endif]-->
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Title Page</title>

		<link rel="stylesheet" type="text/css" href="css/reset.css">
		<link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Lato:300,400,700,900">
		<!-- Bootstrap CSS -->
		<link href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css" rel="stylesheet">
		<link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">
		<link rel="stylesheet" type="text/css" href="css/jquery.vegas.min.css">
		<link rel="stylesheet" type="text/css" href="css/style.css">
		<link rel="stylesheet" type="text/css" href="css/main.css">

		<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
		<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
		<!--[if lt IE 9]>
			<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
			<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
		<![endif]-->
	</head>
	<body>
		<!-- Main site area -->
		<div class="container">
			<div class="row">
				<div class="text-center content">
					<span class="h0">Chemclave 15</span>
					<div class="row">
						<div class="subscribe">
							<form action="" method="POST" id="subscribe_form" class="form-inline" role="form">
								<div class="form-group">
									<div class="input-group col-md-12">
										<input type="email" class="form-control input-lg" id="exampleInputEmail2" placeholder="your@email.com" />
										<span class="input-group-btn">
											<button class="btn btn-primary btn-lg">
												Notify
											</button>
										</span>
									</div>
								</div>
							</form>	
						</div>
					</div>
					<!-- Countdown timer -->
					<div id="countdown_dashboard">
						<div class="dash days_dash">
							<span class="dash_title">DAYS</span>
							<span class="digit"><?=$date['days'][0]?></span>
							<span class="digit"><?=$date['days'][1]?></span>
						</div>
						<div class="dash hours_dash">
							<span class="dash_title">HOURS</span>
							<span class="digit"><?=$date['hours'][0]?></span>
							<span class="digit"><?=$date['hours'][1]?></span>
						</div>
						<div class="dash minutes_dash">
							<span class="dash_title">MINUTES</span>
							<span class="digit"><?=$date['mins'][0]?></span>
							<span class="digit"><?=$date['mins'][1]?></span>	
						</div>
						<div class="dash seconds_dash">
							<span class="dash_title">SECONDS</span>
							<span class="digit"><?=$date['secs'][0]?></span>
							<span class="digit"><?=$date['secs'][1]?></span>	
						</div>
					</div>
					<!-- Countdown timer end-->
				</div>
			</div>
			<!--<div id="preloader">
                <div id="preloader_content">
                    <img alt="Loading..." src="img/loader.gif">
                </div>
            </div>-->
		</div>

		<!-- Closing Main site area -->
		<!-- Footer starting contains social icons -->
		<footer>
			<div id="social">
				<ul class="text-center">
					<li><a target="_blank" href="http://facebook.com/chemclave"><i class="fa fa-facebook"></i></a></li>
					<li><a target="_blank" href="http://twitter.com/chemclave"><i class="fa fa-twitter"></i></a></li>
					<li><a target="_blank" href="https://plus.google.com/107084146838658784427"><i class="fa fa-google-plus"></i></a></li>
				</ul>
			</div>
		</footer>

		<!-- closing Footer -->
		<!-- jQuery -->
		<script src="//code.jquery.com/jquery.js"></script>
		<!-- Bootstrap JavaScript -->
		<script src="//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
		<script type="text/javascript" src="js/jquery.lwtCountdown-1.0.js"></script>
		<script type="text/javascript" src="js/jquery.vegas.min.js"></script>
		<script type="text/javascript">
			$(function(){
				$.vegas( 'slideshow', {
					delay: 8000,
					backgrounds: [
						{ src: 'img/background4.jpg', fade: 4000 },
						{ src: 'img/background3.jpg', fade: 4000 },
						{ src: 'img/background2.jpg', fade: 4000 },
						{ src: 'img/background1.jpg', fade: 4000 }
					]
				} )( 'overlay' ,{
					src: 'img/overlays/06.png'
				});
			});
			
			$(document).ready(function(){
				$('#countdown').countDown({
					targetDate:{
						'day':    <?=$config['targetDate']['day']?>,
						'month':  <?=$config['targetDate']['month']?>,
						'year':   <?=$config['targetDate']['year']?>,
						'hour':   <?=$config['targetDate']['hour']?>,
						'min':    <?=$config['targetDate']['minute']?>,
						'sec':    <?=$config['targetDate']['second']?>
					},
				});
				/*Preloader*/
				$(window).bind('load', function() {
        			$('#preloader').fadeOut(1000);
    			});
			});
		</script>
	</body>
</html>