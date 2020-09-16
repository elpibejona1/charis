<!DOCTYPE html>
<?php require("../_includes/directory.php"); ?>
<html>
<head>
	<?php $globalFunction->includeContent(1,'englishTopInc'); ?>
</head>
<body>
	<?php $globalFunction->includeContent(1,'englishHeader'); ?>
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
			<h2>The Charis Alliance ...</h2>
			<p>... seeks to obey the Great Commission by promoting fellowship and cooperation on the regional and international levels among associations of churches that endorse the Charis Commitments to Common Identity and Mission.</p>
			<div class="home__scroll">
				<i class="fa fa-angle-down" aria-hidden="true"></i>
				<i class="fa fa-angle-down" aria-hidden="true"></i>
			</div>
		</div>
	</div>
</div>
<div class="container">
	<div class="row">
		<div class="content content--home content--first">
			<h2>Featured Content:</h2>
			<div class="content content--third content--featured">
				<a href="celebration/">
					<img src="../_images/news/thumbnail1.jpg" alt="">
					<span>Charis Celebration Sunday. <br>Join us!</span>
				</a>
			</div>
			<div class="content content--third content--featured">
				<a href="about/about.php">
					<img src="../_images/home/thumbnail3.jpg" alt="">
					<span>What is Charis? Learn more about who we are and what we believe. </span>
				</a>
			</div>
			<div class="content content--third content--featured">
				<a href="giving/index.php">
					<img src="../_images/home/thumbnail2.jpg" alt="">
					<span>Want to help equip our global <br>network of churches? Donate&nbsp;here!</span>
				</a>
			</div>
			<hr>
		</div>
	</div>
	<div class="row">
		<div class="content content--home">
			<h2>What is the Charis Alliance?</h2>
			<div class="content content--half content--featured content--bordered">
				<a data-fancybox href="https://vimeo.com/234318690">
					<div>
						<img src="../_images/home/video1.jpg" alt="">
						<i class="fas fa-play-circle"></i>
					</div>
					<span>Video: Our Beginnings</span>
				</a>
			</div>
			<div class="content content--half content--featured content--bordered">
				<a data-fancybox href="https://vimeo.com/296002480">
					<div>
						<img src="../_images/home/video2.jpg" alt="">
						<i class="fas fa-play-circle"></i>
					</div>
					<span>Video: Our Global Growth</span>
				</a>
			</div>
		</div>
	</div>
</div>
	<?php $globalFunction->includeContent(1,'englishFooter'); ?>
	<?php $globalFunction->includeContent(1,'botInc'); ?>
</body>
</html>