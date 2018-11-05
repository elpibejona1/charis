<!DOCTYPE html>
<?php require("../_includes/directory.php"); ?>
<html>
<head>
	<?php $globalFunction->includeContent(1,'spanishTopInc'); ?>
</head>
<body>
	<?php $globalFunction->includeContent(1,'spanishHeader'); ?>
<div class="homeSlideShow cycle-slideshow"
	data-cycle-fx="scrollHorz"
    data-cycle-speed="700"
	>
	<img src="../_images/home/slide1.jpg" alt="">
	<img src="../_images/home/slide2.jpg" alt="">
	<img src="../_images/home/slide3.jpg" alt="">
	<img src="../_images/home/slide4.jpg" alt="">
	<img src="../_images/home/slide5.jpg" alt="">
	<img src="../_images/home/slide6.jpg" alt="">
	<img src="../_images/home/slide7.jpg" alt="">
	<img src="../_images/home/slide8.jpg" alt="">
</div>
<div class="container container--callout">
	<div class="row">
		<div class="homeSlideShow__callout">
			<h2>La Alianza de Charis ...</h2>
			<p>... intenta obedecer a la Gran Comisión mediante la promoción de la comunión fraternal y la cooperación a nivel regional e internacional entre las asociaciones de iglesias que apoyan el Compromiso de Charis a la Misión Común y al Compromiso de Charis a la Identidad Común.</p>
		</div>
	</div>
</div>
<div class="container">
	<div class="row">
		<div class="content content--home content--video">
			<h2>¿Qué es la Alianza de Charis?</h2>
			<iframe class="about__video" src="https://player.vimeo.com/video/234542538?color=b7962f&title=0&byline=0&portrait=0" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
			<iframe class="about__video" src="https://player.vimeo.com/video/296639077?color=b7962f&title=0&byline=0&portrait=0" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
			<hr class="videoHR">
		</div>
	</div>
	<div class="row">
		<div class="content content--home">
			<h2>Contenido Destacado:</h2>
			<div class="content content--third content--featured">
				<a href="celebracion/index.php">
					<img src="../_images/news/thumbnail1.jpg" alt="">
					<span>Domingo de Celebración. Celebre nuestro movimiento&nbsp;global.</span>
				</a>
			</div>
			<div class="content content--third content--featured">
				<a href="about/about.php">
					<img src="../_images/home/thumbnail3.jpg" alt="">
					<span>¿Qué es Charis? Quiénes somos y qué creemos.</span>
				</a>
			</div>
			<div class="content content--third content--featured">
				<a href="documents/documents.php">
					<img src="../_images/home/thumbnail2.jpg" alt="">
					<span>Acceda a los Estatutos de Charis y a otros documentos de nuestra alianza.</span>
				</a>
			</div>
			<hr>
		</div>
	</div>
</div>
	<?php $globalFunction->includeContent(1,'spanishFooter'); ?>
	<?php $globalFunction->includeContent(1,'botInc'); ?>
</body>
</html>