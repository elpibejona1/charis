<!DOCTYPE html>
<?php require("_includes/directory.php"); ?>
<html>
<head>
	<? $globalFunction->includeContent(0,'topInc'); ?>
</head>
<body>
	<? $globalFunction->includeContent(0,'404Header'); ?>
	<div class="container">
		<div class="cycle-slideshow"
    		data-cycle-timeout="5000"
    		data-cycle-slides=".row--404"
			>
			<div class="row row--404">
				<h2>Page Non Trouvée</h2>
				<p>La page que vous avez demandée n'existe pas, <br>ou elle n'est plus accessible à cette adresse</p>
				<span>Nous vous invitons à consulter notre <a href="http://www.charisalliance.org">page d'accueil</a> ou á <br><a href="mailto:info@charisalliance.org">nous contacter</a> pour nous signaler ce problème.</span>
			</div>
			<div class="row row--404">
				<h2>Page Not Found</h2>
				<p>The link you clicked may be broken or the <br>page may have been removed</p>
				<span>Visit the <a href="http://www.charisalliance.org">homepage</a> or <a href="mailto:info@charisalliance.org">Contact Us</a> about the problem.</span>
			</div>
			<div class="row row--404">
				<h2>Página No Disponible</h2>
				<p>La página a la que intentó acceder <br>no existe o se ha mudado.</p>
				<span>Le invitamos a navegar a la <a href="http://www.charisalliance.org">página principal</a> o a <br><a href="mailto:info@charisalliance.org">ponerse en contacto</a> con nosotros sobre este problema.</span>
			</div>
		</div>
	</div>
	<? $globalFunction->includeContent(0,'404Footer'); ?>
	<? $globalFunction->includeContent(0,'botInc'); ?>
</body>
</html>