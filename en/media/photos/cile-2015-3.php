<!DOCTYPE html>
<?php require("../../../_includes/directory.php"); ?>
<html>
<head>
	<?php $globalFunction->includeContent(3,'englishTopInc'); ?>
</head>
<body>
	<?php $globalFunction->includeContent(3,'englishHeader'); ?>
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
				<h2>2015 CILE - Monday, November 2, 2015</h2>				
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
				    <img src="../../../_images/media/photos/cile-2015-3/img1.jpg" alt="Each country was introduced with information about the country and the numbers of the churches in each area. Gifts were also presented from the country.">
				    <img src="../../../_images/media/photos/cile-2015-3/img2.jpg" alt="Each country was introduced with information about the country and the numbers of the churches in each area. Gifts were also presented from the country.">
				    <img src="../../../_images/media/photos/cile-2015-3/img3.jpg" alt="Each country was introduced with information about the country and the numbers of the churches in each area. Gifts were also presented from the country.">
				    <img src="../../../_images/media/photos/cile-2015-3/img4.jpg" alt="Bartley Sawatsky shares about the Grace Brethren movement in Canada.">
				    <img src="../../../_images/media/photos/cile-2015-3/img5.jpg" alt="Keith Minier reports on chruches in the United States.">
				    <img src="../../../_images/media/photos/cile-2015-3/img6.jpg" alt="Romtomne Louis shares about the African countries.">
				    <img src="../../../_images/media/photos/cile-2015-3/img7.jpg" alt="Representatives from the Central African Republic share about chruches in their country.">
				    <img src="../../../_images/media/photos/cile-2015-3/img8.jpg" alt="Augustin Hibaile tells about churches in the Central African Republic.">
				    <img src="../../../_images/media/photos/cile-2015-3/img9.jpg" alt="The African contingent shared a skit about ministries in their countries.">
				    <img src="../../../_images/media/photos/cile-2015-3/img10.jpg" alt="The African contingent shared a skit about ministries in their countries.">
				    <img src="../../../_images/media/photos/cile-2015-3/img11.jpg" alt="The African contingent shared a skit about ministries in their countries.">
				    <img src="../../../_images/media/photos/cile-2015-3/img12.jpg" alt="Worship was led by Kevin Stauffer, Paul Klawitter, and Florent Varak.">
				    <img src="../../../_images/media/photos/cile-2015-3/img13.jpg" alt="The 2015 CILE Delegates">
				</div>
				<!-- empty element for caption -->
				<div id="alt-caption" class="slideshow__caption center"></div>
				<div class="slideshowlink slideshowlink__prev">
					<a href="cile-2015-2.php"><i class="fa fa-chevron-left"></i> November 1, 2015</a>
				</div>
				<div class="slideshowlink slideshowlink__back">
					<a href="../photos.php">Back to Photo Gallery</i></a>
				</div>
				<div class="slideshowlink slideshowlink__next">
					<a href="cile-2015-4.php">November 3, 2015 <i class="fa fa-chevron-right"></i></a>
				</div>
			</div>
		</div>
	</div>
</div>
	<?php $globalFunction->includeContent(2,'englishFooter'); ?>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
<script src="../../../_js/cycle2.js"></script>
</body>
</html>