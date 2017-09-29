<!DOCTYPE html>
<?php require("_includes/directory.php"); ?>
<html>
<head>
	<? $globalFunction->includeContent(0,'topInc'); ?>
</head>
<body class="index__background">
	<div class="container container--home">
		<div class="cycle-slideshow verse" 
			data-cycle-fx="fade" 
			data-cycle-timeout="2000"
			data-cycle-slides=".verse__content"
			>
			<div class="verse__content">
				<p>Celui qui sème et celui qui moissonne se réjouissent ensemble.<br>
				<span>Jean 4:36</span></p>
			</div>
			<div class="verse__content">
				<p>The one who sows and the one who reaps can rejoice together.<br>
				<span>John 4:36</span></p>
			</div>
			<div class="verse__content">
				<p>Para que el que siembra y el que siega se gocen juntos.<br>
				<span>Juan 4:36</span></p>
			</div>
		</div>
		<div class="verse">
			
		</div>
	</div>
	<div class="fullContainer fullContainer--chooseLang">
		<div class="chooseLang">
			<div class="container">
				<div class="row">
					<img src="_images/global/logo.png"/>
					<ul>
						<li class="chooseLang__buttons"><a href="fr/home.php">Français</a></li>
						<li class="chooseLang__buttons"><a href="en/home.php">English</a></li>
						<li class="chooseLang__buttons"><a href="es/home.php">Español</a></li>
					</ul>
				</div>
			</div>
		</div>
	</div>
	<? $globalFunction->includeContent(0,'botInc'); ?>
</body>
</html>