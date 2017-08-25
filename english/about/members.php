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
				<h2 class="map__heading">Choose a Region to Begin:</h2>
			</div>
		</div>
		<?php include("../../_images/about/members/world.svg"); ?>
		<div class="container">
			<div class="map__zoom map__zoom--NA" data-name="northAmerica">
				<img src="../../_images/about/members/zoomButton.png" alt="">
				<div class="map__label map__label--NA" data-name="northAmerica">North America</div>
			</div>
			<div class="map__zoom map__zoom--CA" data-name="caribbean">
				<img src="../../_images/about/members/zoomButton.png" alt="">
				<div class="map__label map__label--CA" data-name="caribbean">The Caribbean</div>
			</div>
			<div class="map__zoom map__zoom--SA" data-name="southAmerica">
				<img src="../../_images/about/members/zoomButton.png" alt="">
				<div class="map__label map__label--SA" data-name="southAmerica">South America</div>
			</div>
			<div class="map__zoom map__zoom--EU"  data-name="europe">
				<img src="../../_images/about/members/zoomButton.png" alt="">
				<div class="map__label map__label--EU" data-name="europe">Europe</div>
			</div>
			<div class="map__zoom map__zoom--AF" data-name="africa">
				<img src="../../_images/about/members/zoomButton.png" alt="">
				<div class="map__label map__label--AF" data-name="africa">Africa</div>
			</div>
			<div class="map__zoom map__zoom--AS" data-name="asia">
				<img src="../../_images/about/members/zoomButton.png" alt="">
				<div class="map__label map__label--AS" data-name="asia">Asia</div>
			</div>
			<div class="map__info">
				<h3 class="map__info__country-continent"></h3>
				<ul class="map__info__list">
					<li class="map__info__status-countries"></li>
					<li class="map__info__delegates-churches"></li>
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