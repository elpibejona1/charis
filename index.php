<!DOCTYPE html>
<?php require("_includes/directory.php"); ?>
<html>
<head>
	<? $globalFunction->includeContent(0,'topInc'); ?>
</head>
<body class="index__background">
	<div class="container container--home">
		<div class="verse">
			<p>The one who sows and the one who reaps can rejoice together.<br>
			<span>John 4:36</span></p>
		</div>
	</div>
	<div class="fullContainer fullContainer--chooseLang">
		<div class="chooseLang">
			<div class="container">
				<div class="row">
					<img src="_images/global/logo.png"/>
					<ul>
						<li class="chooseLang__buttons"><a href="en/home.php">English</a></li>
						<li class="chooseLang__buttons"><a href="es/home.php">Español</a></li>
						<li class="chooseLang__buttons"><a href="fr/home.php">Français</a></li>
					</ul>
				</div>
			</div>
		</div>
	</div>
	<script>
		$(document).ready(function() {

			var sizeBackground = function(){
				if (window.innerHeight > window.innerWidth) {
					$('.index__background').css('background-size', 'auto 100vh');
				} else if (window.innerHeight / window.innerWidth > 0.66 && window.innerHeight / window.innerWidth <= 1) {
					$('.index__background').css('background-size', 'auto 100vh');
				} else {
					$('.index__background').css('background-size', '100vw auto');
				}
			};

			sizeBackground();

			$(window).on('resize', function(){
				sizeBackground();
			});
		});
	</script>
	<? $globalFunction->includeContent(0,'botInc'); ?>
</body>
</html>