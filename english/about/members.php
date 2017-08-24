<!DOCTYPE html>
<?php require("../../_includes/directory.php"); ?>
<html>
<head>
	<? $globalFunction->includeContent(2,'topInc'); ?>
</head>
<body>
	<? $globalFunction->includeContent(2,'header'); ?>
	<? $globalFunction->includeContent(2,'aboutSubNav'); ?>
<div class="fullContainer fullContainer--members">
	<div class="content content--map">
		<div class="continentOverlay">
			<div class="container">
				<h2 class="map__heading">Choose a Region to Explore:</h2>
			</div>
		</div>
		<?php include("../../_images/about/members/world.svg"); ?>
		<div class="container">
			<div class="map__label map__label--NA" data-name="northAmerica">North America</div>
			<img class="map__zoom map__zoom--NA" data-name="northAmerica" src="../../_images/about/members/zoomButton.png" alt="">
			<div class="map__label map__label--CA" data-name="caribbean">The Caribbean</div>
			<img class="map__zoom map__zoom--CA" data-name="caribbean" src="../../_images/about/members/zoomButton.png" alt="">
			<div class="map__label map__label--SA" data-name="southAmerica">South America</div>
			<img class="map__zoom map__zoom--SA" data-name="southAmerica" src="../../_images/about/members/zoomButton.png" alt="">
			<div class="map__label map__label--EU" data-name="europe">Europe</div>
			<img class="map__zoom map__zoom--EU"  data-name="europe" src="../../_images/about/members/zoomButton.png" alt="">
			<div class="map__label map__label--AF" data-name="africa">Africa</div>
			<img class="map__zoom map__zoom--AF" data-name="africa" src="../../_images/about/members/zoomButton.png" alt="">
			<div class="map__label map__label--AS" data-name="asia">Asia</div>
			<img class="map__zoom map__zoom--AS" data-name="asia" src="../../_images/about/members/zoomButton.png" alt="">
			<div class="map__info">
				<h3  class="map__info__country"></h3>
				<ul class="map__info__list">
					<li class="map__info__status"></li>
					<li class="map__info__delegates"></li>
					<li class="map__info__churches"></li>
				</ul>
			</div>
		</div>
	</div>
</div>
<div class="membersFooter">
	<? $globalFunction->includeContent(2,'footer'); ?>
</div>
	<script src="../../_js/members.js"></script>
	<? $globalFunction->includeContent(2,'botInc'); ?>
</body>
</html>