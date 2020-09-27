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
			<h2>The Charis Alliance ...</h2>
			<p>... seeks to obey the Great Commission by promoting fellowship and cooperation on the regional and international levels among associations of churches that endorse the Charis Commitments to Common Identity and Mission.</p>
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
			<h2>Featured Content:</h2>
		</div>
	</div>
	<div class="row row--documents row--first">
		<div class="interior__photo interior__photo--first">
			<img src="../_images/news/thumbnail1.jpg?v2" alt="">
		</div>
		<div class="interior__description interior__description--first">
			<h3>Charis Celebration Sunday - October 25, 2020</h3>
			<p>Even amid the uncertainty and fear that has gripped the world this year, God has been moving. Join us as we celebrate the ways God has used the Charis Alliance to bless and provide for the least reached. <strong>Sign up today,</strong> and we will send you all the materials you need to participate.</p>
			<div class="primary__downloadContainer">
				<ul>
					<li class="primary__download__button primary__download__button--home"><a target="_blank" href="https://mailchi.mp/encompassworld/chariscelebration2020">Sign Up</a></li>
					<li class="primary__download__button primary__download__button--home"><a href="celebration/">Access Resources</a></li>
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
			<h3>Charis Global Prayer Walk 2020</h3>
			<p>In November, Charis members from around the globe are joining together for a virtual Global Prayer Walk. <strong>Starting November 1,</strong> we will pray together for the Charis churches and ministries of our Alliance located around the world for 30 days. <strong>Sign up below</strong> to receive these emails.</p>
			<div class="primary__downloadContainer">
				<ul>
					<li class="primary__download__button primary__download__button--home"><a target="_blank" href="https://mailchi.mp/encompassworld/globalprayerwalk2020">Sign Up</a></li>
					<li class="primary__download__button primary__download__button--home"><a href="prayer/">Access Resources</a></li>
				</ul>
			</div>
		</div>
		<!-- <div class="content content--home content--first">
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
		</div> -->
	</div>
	<hr>
	<div class="row">
		<div class="content content--home content--first">
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