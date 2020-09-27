<!DOCTYPE html>
<?php require("../_includes/directory.php"); ?>
<html>
<head>
	<?php $globalFunction->includeContent(1,'frenchTopInc'); ?>
</head>
<body>
	<?php $globalFunction->includeContent(1,'frenchHeader'); ?>
<div class="homeSlideShow cycle-slideshow"
	data-cycle-fx="scrollHorz"
    data-cycle-speed="700"
	data-slides=".homeSlideShow__slide"
	>
	<div class="homeSlideShow__slide homeSlideShow__slide--1">
		<img src="../_images/home/slide1.jpg" alt="">
	</div>
	<div class="homeSlideShow__slide homeSlideShow__slide--2">
		<img src="../_images/home/slide2.jpg" alt="">
	</div>
	<div class="homeSlideShow__slide homeSlideShow__slide--3">
		<img src="../_images/home/slide3.jpg" alt="">
	</div>
	<div class="homeSlideShow__slide homeSlideShow__slide--4">
		<img src="../_images/home/slide4.jpg" alt="">
	</div>
	<div class="homeSlideShow__slide homeSlideShow__slide--5">
		<img src="../_images/home/slide5.jpg" alt="">
	</div>
	<div class="homeSlideShow__slide homeSlideShow__slide--6">
		<img src="../_images/home/slide6.jpg" alt="">
	</div>
	<div class="homeSlideShow__slide homeSlideShow__slide--7">
		<img src="../_images/home/slide7.jpg" alt="">
	</div>
	<div class="homeSlideShow__slide homeSlideShow__slide--8">
		<img src="../_images/home/slide8.jpg" alt="">
	</div>
</div>
<div class="container container--callout">
	<div class="row">
		<div class="homeSlideShow__callout">
			<h2>L'Alliance Charis ...</h2>
			<p>... vise l’accomplissement du Mandat Missionnaire par le développement de relations fraternelles, et par la coopération régionale et internationale entre les unions d'églises qui partagent l'Engagement de Charis pour une Identité et une Mission communes.</p>
			<button class="home__scroll">
				<i class="fa fa-angle-down" aria-hidden="true"></i>
				<i class="fa fa-angle-down" aria-hidden="true"></i>
			</button>
		</div>
	</div>
</div>
<div class="container container--homeContent">
<div class="row">
		<div class="content content--home content--first">
			<h2>Contenu présenté :</h2>
		</div>
	</div>
	<div class="row row--documents row--first">
		<div class="interior__photo interior__photo--first">
			<img src="../_images/news/thumbnail1.jpg?v2" alt="">
		</div>
		<div class="interior__description interior__description--first">
			<h3>Dimanche de célébration Charis - 25 octobre 2020</h3>
			<p>Même au milieu de l'incertitude et de la peur qui ont saisi le monde cette année, <strong>Dieu a œuvré</strong>. Rejoignez-nous pour célébrer la manière dont Dieu a utilisé l'Alliance Charis pour bénir et pourvoir aux plus démunis. <strong>Inscrivez-vous aujourd'hui</strong> et nous vous enverrons tout le matériel dont vous avez besoin pour participer.</p>
			<div class="primary__downloadContainer">
				<ul>
					<li class="primary__download__button primary__download__button--home"><a target="_blank" href="https://mailchi.mp/encompassworld/2020-charis-dimanche">Inscrivez-vous</a></li>
					<li class="primary__download__button primary__download__button--home"><a href="celebrer/">Accéder aux ressources</a></li>
				</ul>
			</div>
		</div>
	</div>
	<hr>
	<div class="row row--documents">
		<div class="interior__photo interior__photo--home">
			<img src="../_images/home/thumbnail4.jpg?v2" alt="">
		</div>
		<div class="interior__description">
			<h3>Mouvement de prière mondiale Charis 2020</h3>
			<p><strong>En novembre,</strong> les membres de Charis du monde entier se réunissent pour un mouvement virtuel de prière de partout dans le monde. À partir du 1er novembre, nous prierons ensemble pour les églises Charis et les ministères de notre Alliance situés à travers le monde pendant 30 jours. <strong>Inscrivez-vous</strong> pour recevoir ces e-mails.</p>
			<div class="primary__downloadContainer">
				<ul>
					<li class="primary__download__button primary__download__button--home"><a target="_blank" href="https://mailchi.mp/encompassworld/marche-de-prire-mondiale-charis-2020">Inscrivez-vous</a></li>
					<li class="primary__download__button primary__download__button--home"><a href="priere/">Accéder aux ressources</a></li>
				</ul>
			</div>
		</div>
	</div>
	<!-- <div class="row">
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
	</div> -->
	<hr>
	<div class="row">
		<div class="content content--home content--first">
			<h2>Qu’est-ce que Charis?</h2>
			<div class="content content--half content--featured content--bordered">
				<a data-fancybox href="https://vimeo.com/234315598">
					<div>
						<img src="../_images/home/video1.jpg" alt="">
						<i class="fas fa-play-circle"></i>
					</div>
					<span>Vidéo : nos débuts</span>
				</a>
			</div>
			<div class="content content--half content--featured content--bordered">
				<a data-fancybox href="https://vimeo.com/296640239">
					<div>
						<img src="../_images/home/video2.jpg" alt="">
						<i class="fas fa-play-circle"></i>
					</div>
					<span>Vidéo : notre croissance mondiale</span>
				</a>
			</div>
		</div>
	</div>
</div>

	<?php $globalFunction->includeContent(1,'frenchFooter'); ?>
	<?php $globalFunction->includeContent(1,'botInc'); ?>
</body>
</html>