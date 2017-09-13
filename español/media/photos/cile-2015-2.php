<!DOCTYPE html>
<?php require("../../../_includes/directory.php"); ?>
<html>
<head>
	<? $globalFunction->includeContent(3,'topInc'); ?>
</head>
<body>
	<? $globalFunction->includeContent(3,'englishHeader'); ?>
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
				<h2>2015 CILE - Sunday, November 1, 2015</h2>				
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
				    <img src="../../../_images/media/photos/cile-2015-2/img1.jpg" alt="The North American contingent gets acquainted with delegates from France.">
				    <img src="../../../_images/media/photos/cile-2015-2/img2.jpg" alt="Breakfast discussions on Sunday.">
				    <img src="../../../_images/media/photos/cile-2015-2/img3.jpg" alt="Several delegates gathered to discuss a video that will be produced to be shown at national conference in 2016.">
				    <img src="../../../_images/media/photos/cile-2015-2/img4.jpg" alt="Several delegates gathered to discuss a video that will be produced to be shown at national conference in 2016.">
				    <img src="../../../_images/media/photos/cile-2015-2/img5.jpg" alt="Delegates get acquainted before dinner.">
				    <img src="../../../_images/media/photos/cile-2015-2/img6.jpg" alt="Delegates get acquainted before dinner.">
				    <img src="../../../_images/media/photos/cile-2015-2/img7.jpg" alt="Delegates get acquainted before dinner.">
				    <img src="../../../_images/media/photos/cile-2015-2/img8.jpg" alt="Delegates get acquainted before dinner.">
				    <img src="../../../_images/media/photos/cile-2015-2/img9.jpg" alt="There were several options for dinner on Sunday night: Thai, American, Japanese, Mexican, and Chinese. Delegates and staff gathered in the lobby then went to the restaurant of their choice.">
				    <img src="../../../_images/media/photos/cile-2015-2/img10.jpg" alt="Wayne Hannah and Malcom Stephens try a Hot Pot Japanese meal.">
				     <img src="../../../_images/media/photos/cile-2015-2/img11.jpg" alt="The Charis meetings are being held in the Vertical Suites Hotel in Bangkok.">
				      <img src="../../../_images/media/photos/cile-2015-2/img12.jpg" alt="Mboi Andre and Dave Guiles.">
				</div>
				<!-- empty element for caption -->
				<div id="alt-caption" class="slideshow__caption center"></div>
				<div class="slideshowlink slideshowlink__prev">
					<a href="cile-2015-1.php"><i class="fa fa-chevron-left"></i> October 31, 2015</a>
				</div>
				<div class="slideshowlink slideshowlink__back">
					<a href="../photos.php">Back to Photo Gallery</i></a>
				</div>
				<div class="slideshowlink slideshowlink__next">
					<a href="cile-2015-3.php">November 2, 2015 <i class="fa fa-chevron-right"></i></a>
				</div>
			</div>
		</div>
	</div>
</div>
	<? $globalFunction->includeContent(2,'englishFooter'); ?>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
<script src="../../../_js/cycle2.js"></script>
</body>
</html>