<!DOCTYPE html>
<?php require("../../../_includes/directory.php"); ?>
<html>
<head>
	<? $globalFunction->includeContent(3,'frenchTopInc'); ?>
</head>
<body>
	<? $globalFunction->includeContent(3,'frenchHeader'); ?>
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
				<h2>2015 CILE - Saturday, October 31, 2015</h2>				
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
				    <img src="../../../_images/media/photos/cile-2015-1/img1.jpg" alt="Delegates and staff are arriving in Bangkok this weekend for the Charis International Leadership Encounter.">
				    <img src="../../../_images/media/photos/cile-2015-1/img2.jpg" alt="Delegates and staff greeted each other in the lobby of the hotel.">
				    <img src="../../../_images/media/photos/cile-2015-1/img3.jpg" alt="A group set out Saturday night for dinner with Reiner Ehmann from Germany leading the way.">
				    <img src="../../../_images/media/photos/cile-2015-1/img4.jpg" alt="This group tried Thai food at the local mall.">
				    <img src="../../../_images/media/photos/cile-2015-1/img5.jpg" alt="Part of the group that tried Thai food at the local mall.">
				    <img src="../../../_images/media/photos/cile-2015-1/img6.jpg" alt="Part of the group that tried Thai food at the local mall.">
				    <img src="../../../_images/media/photos/cile-2015-1/img7.jpg" alt="Part of the group that tried Thai food at the local mall.">
				    <img src="../../../_images/media/photos/cile-2015-1/img8.jpg" alt="Leaving the mall.">
				    <img src="../../../_images/media/photos/cile-2015-1/img9.jpg" alt="A view from the hotel about dusk.">
				    <img src="../../../_images/media/photos/cile-2015-1/img10.jpg" alt="A Saturday night view from the hotel where the CILE meetings are being held.">
				</div>
				<!-- empty element for caption -->
				<div id="alt-caption" class="slideshow__caption center"></div>
				<div class="slideshowlink slideshowlink__prev">
					&nbsp;
				</div>
				<div class="slideshowlink slideshowlink__back">
					<a href="../photos.php">Back to Photo Gallery</i></a>
				</div>
				<div class="slideshowlink slideshowlink__next">
					<a href="cile-2015-2.php">November 1, 2015 <i class="fa fa-chevron-right"></i></a>
				</div>
			</div>
		</div>
	</div>
</div>
	<? $globalFunction->includeContent(2,'frenchFooter'); ?>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
<script src="../../../_js/cycle2.js"></script>
</body>
</html>