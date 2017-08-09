<!DOCTYPE html>
<?php require("../../../_includes/directory.php"); ?>
<html>
<head>
	<? $globalFunction->includeContent(3,'topInc'); ?>
</head>
<body>
	<? $globalFunction->includeContent(3,'header'); ?>
<div class="subNav fullContainer">
	<div class="container">
		<div class="row">
			<div class="subNav__item">
				<a href="../video.php"><i class="fa fa-file-video-o"></i>
				<h3>Video Archive</h3></a>
			</div>
			<div class="subNav__item current">
				<a href="../photos.php"><i class="fa fa-file-image-o"></i>
				<h3>Photo Archive</h3></a>
			</div>
		</div>
	</div>
</div>
<div class="documents__background fullContainer">
	<div class="container">
		<div class="row row--archive">
			<div class="archive__section archive__section--gallery">
				<h2>2015 CILE - Thursday, November 5, 2015</h2>				
			</div>
			<div class="archive archive--photos">
				<div class="cycle-slideshow"
				data-cycle-fx=scrollHorz
   				data-cycle-timeout=0
   				data-cycle-prev="#prev"
       			data-cycle-next="#next"
    			data-cycle-caption="#alt-caption"
    			data-cycle-caption-template="{{alt}}">
    				<div class="slideControls slideControls--left" id=prev><i class="fa fa-chevron-left"></i></div>
		        	<div class="slideControls slideControls--right" id=next><i class="fa fa-chevron-right"></i></div>
				    <img src="../../../_images/media/photos/cile-2015-6/img1.jpg" alt="The conference climbed aboard a bus to tour sites in Bangkok.">
				    <img src="../../../_images/media/photos/cile-2015-6/img2.jpg" alt="The delegates from the Fellowship of Grace Brethren Churches: Mike Yoder, Clancy Cruise, Keith Minier, and Bartley Sawatsky.">
				    <img src="../../../_images/media/photos/cile-2015-6/img3.jpg" alt="The group heads into one of the sites they visited.">
				    <img src="../../../_images/media/photos/cile-2015-6/img4.jpg" alt="After lunch along the river, some members of the group showed off their newly-purchased Thailand hats.">
				    <img src="../../../_images/media/photos/cile-2015-6/img5.jpg" alt="Delegates pose with one of their tour guides on Thursday afternoon.">
				    <img src="../../../_images/media/photos/cile-2015-6/img6.jpg" alt="Taking a break from the tour are Florant Varak, a member of the steering committee from France, and Shu Aoki, a delegate and steering committee member from Japan.">
				    <img src="../../../_images/media/photos/cile-2015-6/img7.jpg" alt="Arnulfo Vieyra, Mexico; Kevin Stauffer, France; Franck Segonne, France; Dave Guiles, Encompass World Partners; Paris Pena, Guatemala; and Juan Saez, Chile.">
				    <img src="../../../_images/media/photos/cile-2015-6/img8.jpg" alt="Dr. Augustin Bible, Central African Republic, and Shu Aoki, Japan, listen carefully to the tour guide on Thursday.">
				</div>
				<!-- empty element for caption -->
				<div id="alt-caption" class="slideshow__caption center"></div>
				<div class="slideshowlink slideshowlink__prev">
					<a href="cile-2015-5.php"><i class="fa fa-chevron-left"></i> November 4, 2015</a>
				</div>
				<div class="slideshowlink slideshowlink__back">
					<a href="../photos.php">Back to Photo Gallery</i></a>
				</div>
				<div class="slideshowlink slideshowlink__next">
					<a href="cile-2015-7.php">November 6, 2015 <i class="fa fa-chevron-right"></i></a>
				</div>
			</div>
		</div>
	</div>
</div>
	<? $globalFunction->includeContent(2,'footer'); ?>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
<script src="../../../_js/cycle2.js"></script>
</body>
</html>