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
					<div class="comingSoon">
						<div class="cycle-slideshow" 
							data-cycle-fx="fadeout" 
							data-cycle-timeout="4500"
							data-cycle-slides=".slide"
							>
							<div class="slide">
								<h3>The new Charis Alliance website is launching soon. In the meantime, feel free to:</h3>
								<h4><a href="celebration/">Access Charis Celebration Sunday Materials</a></h4>
								<h4>Download Charis Documents:</h4>
								<ul>
									<li class="chooseLang__buttons"><a target="_blank" href="documents/charter/The_Charis_Alliance_Charter_(v2015.0)_letter_size.pdf">Charis Alliance Charter</a></li>
									<li class="chooseLang__buttons"><a target="_blank" href="documents/ccci/Our_Commitment_to_Common_Identity_(ENG_v2015.0_Letter).pdf">Commitment to a Common&nbsp;Identity</a></li>
									<li class="chooseLang__buttons"><a target="_blank" href="documents/cccm/CCCM_English.pdf">Commitment to a Common&nbsp;Mission</a></li>
								</ul>
							</div>
							<div class="slide">
								<h3>El nuevo sitio web de la Alianza Charis estará disponible próximamente.</h3>
								<h4>Descargar Documentos de Charis:</h4>
								<ul>
									<li class="chooseLang__buttons"><a target="_blank" href="documents/charter/Alianza_Charis_Estatutos_(v2015.0).pdf">Alianza Charis &ndash; Estatutos</a></li>
									<li class="chooseLang__buttons"><a target="_blank" href="documents/ccci/Nuestro_Compromiso_a_la_Identidad_Común_2015_(ESP_v2015.0).pdf">Compromiso a la identidad&nbsp;común</a></li>
									<li class="chooseLang__buttons"><a target="_blank" href="documents/cccm/CCCM_Español.pdf">Compromiso a una misión&nbsp;común</a></li>
								</ul>
							</div>
							<div class="slide">
								<h3>Le nouveau site Web de l'Alliance Charis est à venir&nbsp;prochainement.</h3>
								<h4>Télécharger les documents de Charis:</h4>
								<ul>
									<li class="chooseLang__buttons"><a target="_blank" href="documents/charter/Charte_de_l’Alliance_Charis_(v2015.0).pdf">Charte de l’Alliance Charis</a></li>
									<li class="chooseLang__buttons"><a target="_blank" href="documents/ccci/Identité_Commune_de_lAlliance_Charis_2015_(FRA_v2015.0).pdf">Identité Commune de l'Alliance&nbsp;Charis</a></li>
									<li class="chooseLang__buttons"><a target="_blank" href="documents/cccm/CCCM_Francais.pdf">Engagement à la Mission&nbsp;Commune</a></li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- <script>
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
	</script> -->
	<? $globalFunction->includeContent(0,'botInc'); ?>
</body>
</html>