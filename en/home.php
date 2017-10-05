<!DOCTYPE html>
<?php require("../_includes/directory.php"); ?>
<html>
<head>
	<? $globalFunction->includeContent(1,'englishTopInc'); ?>
</head>
<body>
	<? $globalFunction->includeContent(1,'englishHeader'); ?>
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
		<div class="content content--home content--video">
			<h2>What is the Charis Alliance?</h2>
			<iframe class="about__video" src="https://player.vimeo.com/video/234318690?color=b7962f&title=0&byline=0" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
			<hr>
		</div>
	</div>
	<div class="row">
		<div class="content content--home">
			<h2>Featured Content:</h2>
			<div class="content content--third content--featured">
				<a href="/celebration/">
					<img src="../_images/news/thumbnail1.jpg" alt="">
					<span>Charis Celebration Sunday. <br>Join us on November 5th!</span>
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
</div>
	<? $globalFunction->includeContent(1,'englishFooter'); ?>
	<? $globalFunction->includeContent(1,'botInc'); ?>
</body>
</html>