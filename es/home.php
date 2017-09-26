<!DOCTYPE html>
<?php require("../_includes/directory.php"); ?>
<html>
<head>
	<? $globalFunction->includeContent(1,'topInc'); ?>
</head>
<body>
	<? $globalFunction->includeContent(1,'spanishHeader'); ?>
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
			<div class="home__scroll">
				<i class="fa fa-angle-down" aria-hidden="true"></i>
				<i class="fa fa-angle-down" aria-hidden="true"></i>
			</div>
		</div>
	</div>
</div>
<div class="container">
	<div class="row">
		<div class="content content--home content--video">
			<h2>¿Qué es la Alianza de Charis?</h2>
			<iframe class="about__video" src="https://player.vimeo.com/video/234542538?color=b7962f&title=0&byline=0&portrait=0" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
			<hr>
		</div>
	</div>
	<div class="row">
		<div class="content content--home">
			<h2>Contenido Destacado:</h2>
			<div class="content content--third content--featured">
				<a href="celebracion/index.php">
					<img src="../_images/news/thumbnail1.jpg" alt="">
					<span>Domingo de Celebración. Celebre nuestro movimiento global.</span>
				</a>
			</div>
			<div class="content content--third content--featured">
				<a href="about/about.php">
					<img src="../_images/home/thumbnail3.jpg" alt="">
					<span>¿Qué es Charis? Quiénes somos y qué creemos.</span>
				</a>
			</div>
			<div class="content content--third content--featured">
				<a href="ofrendar/index.php">
					<img src="../_images/home/thumbnail2.jpg" alt="">
					<span>Para apoyar a nuestro movimiento global de iglesias, ofrenda aquí.</span>
				</a>
			</div>
			<hr>
		</div>
	</div>
</div>
	<? $globalFunction->includeContent(1,'spanishFooter'); ?>
	<? $globalFunction->includeContent(1,'botInc'); ?>
</body>
</html>