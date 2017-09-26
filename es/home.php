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
		<div class="content content--home">
			<h2>Contenido Destacado:</h2>
			<div class="content content--third content--featured">
				<a class="charisVideo fancybox.iframe" data-fancy-box-type="iframe" href="https://player.vimeo.com/video/162078890">
					<img src="../_images/home/thumbnail1.jpg" alt="">
					<span>Mire el video: Presentación de la Alianza de&nbsp;Charis</span>
				</a>
			</div>
			<div class="content content--third content--featured">
				<a href="documents/documents.php">
					<img src="../_images/home/thumbnail3.jpg" alt="">
					<span>Bajar los Estatutos de la Alianza de&nbsp;Charis</span>
				</a>
			</div>
			<div class="content content--third content--featured">
				<a href="documents/documents.php">
					<img src="../_images/home/thumbnail2.jpg" alt="">
					<span>Bajar El Compromiso de Charis a la Identidad&nbsp;Común </span>
				</a>
			</div>
			<hr>
		</div>
	</div>
</div>
<!-- <div class="fullContainer fullContainer--gray">
	<div class="container">
		<div class="row">
			<div class="content content--home content--news">
				<h2>Charis News:</h2>
				<div class="news__feed">
					<div class="content content--third">
						<p><span>Feb 28, 2016</span></p>
						<p class="news__feed__blurb"><strong>The Charis Alliance Charter</strong> is available in the "Documents" section in both A4 and Letter sizes.</p><a href="documents/documents.php">Read More ></a>
					</div>
					<div class="content content--third">
						<p><span>Feb 28, 2016</span></p>
						<p class="news__feed__blurb"><strong>The Charis Commitment to Common Identity</strong> is available in the "Documents" section in both A4 and Letter sizes.</p>
						<a href="documents/documents.php">Read More ></a>
					</div>
					<div class="content content--third">
						<p><span>Feb 28, 2016</span></p>
						<p class="news__feed__blurb"><strong>The Charis Commitment to Common Identity</strong> is available in the "Documents" section in both A4 and Letter sizes.</p>
						<a href="documents/documents.php">Read More ></a>
					</div>
				</div>
				<hr>
			</div>
		</div>
	</div>
</div> -->


	<? $globalFunction->includeContent(1,'spanishFooter'); ?>
	<script src="../_js/cycle2.js"></script>
	<script>
		$(document).ready(function() {
			$(".charisVideo").fancybox({
				maxWidth	: 800,
				maxHeight	: 600,
				fitToView	: false,
				maxWidth	: '70%',
				maxHeight	: '70%',
				aspectRatio: true,
				autoSize	: false,
				closeClick	: false,
				openEffect	: 'none',
				closeEffect	: 'none',
				padding: 0,
				zIndex: 999,
				scrolling: 'no'
			});
		});
	</script>
	<? $globalFunction->includeContent(1,'botInc'); ?>
</body>
</html>