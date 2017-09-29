<!DOCTYPE html>
<?php require("../_includes/directory.php"); ?>
<html>
<head>
	<? $globalFunction->includeContent(1,'topInc'); ?>
</head>
<body>
	<? $globalFunction->includeContent(1,'frenchHeader'); ?>
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
			<h2>L'Alliance Charis ...</h2>
			<p>... vise l’accomplissement du Mandat Missionnaire par le développement de relations fraternelles, et par la coopération régionale et internationale entre les unions d'églises qui partagent l'Engagement de Charis pour une Identité et une Mission communes.</p>
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
			<h2>Qu’est-ce que c’est Charis?</h2>
			<iframe class="about__video" src="https://player.vimeo.com/video/234315598?color=b7962f&title=0&byline=0&portrait=0" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
			<hr>
		</div>
	</div>
	<div class="row">
		<div class="content content--home">
			<h2>Contenu présenté :</h2>
			<div class="content content--third content--featured">
				<a href="celebrer/index.php">
					<img src="../_images/news/thumbnail1.jpg" alt="">
					<span>Dimanche de célébration. Célébrez notre mouvement mondial.</span>
				</a>
			</div>
			<div class="content content--third content--featured">
				<a href="about/about.php">
					<img src="../_images/home/thumbnail3.jpg" alt="">
					<span>Qu'est-ce que Charis? Qui sommes-nous et ce que nous croyons.</span>
				</a>
			</div>
			<div class="content content--third content--featured">
				<a href="documents/documents.php">
					<img src="../_images/home/thumbnail2.jpg" alt="">
					<span>Accédez aux statuts de Charis et à d'autres documents de notre alliance.</span>
				</a>
			</div>
			<hr>
		</div>
	</div>
</div>

	<? $globalFunction->includeContent(1,'frenchFooter'); ?>
	<? $globalFunction->includeContent(1,'botInc'); ?>
</body>
</html>