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
			<h2>La Alianza de Charis ...</h2>
			<p>... intenta obedecer a la Gran Comisión mediante la promoción de la comunión fraternal y la cooperación a nivel regional e internacional entre las asociaciones de iglesias que apoyan el Compromiso de Charis a la Misión Común y al Compromiso de Charis a la Identidad Común.</p>
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
			<h2>Contenido Destacado:</h2>
		</div>
	</div>
	<div class="row row--documents row--first">
		<div class="interior__photo interior__photo--first">
			<img src="../_images/news/thumbnail1.jpg?v2" alt="">
		</div>
		<div class="interior__description interior__description--first">
			<h3>Domingo de celebración de Charis - 25 de octubre,&nbsp;2020</h3>
			<p>Incluso en medio de la incertidumbre y del miedo que se ha apoderado del mundo este año, <strong>Dios sigue obrando</strong>. Únase a nosotros para celebrar las formas en que Dios ha usado la Alianza Charis para bendecir a los menos alcanzados. <strong>Regístrese hoy</strong> y le enviaremos todos los materiales que necesita para participar.</p>
			<div class="primary__downloadContainer">
				<ul>
					<li class="primary__download__button primary__download__button--home"><a target="_blank" href="https://mailchi.mp/encompassworld/2020-charis-domingo">Regístrese</a></li>
					<li class="primary__download__button primary__download__button--home"><a href="celebracion/">Acceda a los materiales</a></li>
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
			<h3>Caminata de oración global de Charis 2020</h3>
			<p><strong>En noviembre,</strong> los miembros de Charis de todo el mundo se unirán para una <strong>caminata de oración virtual</strong>. A partir del 1 de noviembre, oraremos juntos por las iglesias y los ministerios de la Alianza Charis durante 30 días. <strong>Regístrese aquí</strong> para recibir estos correos electrónicos.</p>
			<div class="primary__downloadContainer">
				<ul>
					<li class="primary__download__button primary__download__button--home"><a target="_blank" href="https://mailchi.mp/encompassworld/caminata-global-de-oracin-charis-2020">Regístrese</a></li>
					<li class="primary__download__button primary__download__button--home"><a href="oracion/">Acceda a los materiales</a></li>
				</ul>
			</div>
		</div>
	</div>
	<!-- <div class="row">
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
	</div> -->
	<hr>
	<div class="row">
		<div class="content content--home content--first">
			<h2>¿Qué es la Alianza Charis?</h2>
			<div class="content content--half content--featured content--bordered">
				<a data-fancybox href="https://vimeo.com/234542538">
					<div>
						<img src="../_images/home/video1.jpg" alt="">
						<i class="fas fa-play-circle"></i>
					</div>
					<span>Video: Nuestros Comienzos</span>
				</a>
			</div>
			<div class="content content--half content--featured content--bordered">
				<a data-fancybox href="https://vimeo.com/296639077">
					<div>
						<img src="../_images/home/video2.jpg" alt="">
						<i class="fas fa-play-circle"></i>
					</div>
					<span>Video: Nuestro Crecimiento Global</span>
				</a>
			</div>
		</div>
	</div>
</div>
	<?php $globalFunction->includeContent(1,'spanishFooter'); ?>
	<?php $globalFunction->includeContent(1,'botInc'); ?>
</body>
</html>