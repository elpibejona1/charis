<!DOCTYPE html>
<?php require("../../_includes/directory.php"); ?>
<html>
<head>
	<?php $globalFunction->includeContent(2,'frenchTopInc'); ?>
</head>
<body>
	<?php $globalFunction->includeContent(2,'frenchHeader'); ?>
	<?php $globalFunction->includeContent(2,'frenchAboutSubNav'); ?>
<div class="fullContainer fullContainer--members">
	<div class="content content--map">
		<div class="continentOverlay">
			<div class="container">
				<h2 class="map__heading">Choisir une région pour commencer :</h2>
			</div>
		</div>
		<?php include("../../_images/about/members/world.svg"); ?>
		<div class="container">
			<div class="map__zoom map__zoom--NA" data-name="northAmerica">
				<img src="../../_images/about/members/zoomButton.png" alt="">
				<div class="map__label map__label--NA" data-name="northAmerica">Amérique du Nord</div>
			</div>
			<div class="map__zoom map__zoom--CA" data-name="caribbean">
				<img src="../../_images/about/members/zoomButton.png" alt="">
				<div class="map__label map__label--CA" data-name="caribbean">Caraïbes</div>
			</div>
			<div class="map__zoom map__zoom--SA" data-name="southAmerica">
				<img src="../../_images/about/members/zoomButton.png" alt="">
				<div class="map__label map__label--SA" data-name="southAmerica">Amérique du Sud</div>
			</div>
			<div class="map__zoom map__zoom--EU"  data-name="europe">
				<img src="../../_images/about/members/zoomButton.png" alt="">
				<div class="map__label map__label--EU" data-name="europe">Europe</div>
			</div>
			<div class="map__zoom map__zoom--AF" data-name="africa">
				<img src="../../_images/about/members/zoomButton.png" alt="">
				<div class="map__label map__label--AF" data-name="africa">Afrique</div>
			</div>
			<div class="map__zoom map__zoom--AS" data-name="asia">
				<img src="../../_images/about/members/zoomButton.png" alt="">
				<div class="map__label map__label--AS" data-name="asia">Asie</div>
			</div>
			<div class="map__info">
				<h3 class="map__info__title"></h3>
				<ul class="map__info__list">
					<li class="map__info__item map__info__item--1"></li>
					<li class="map__info__item map__info__item--2"></li>
					<li class="map__info__item map__info__item--3"></li>
					<li class="map__info__directions"></li>
				</ul>
			</div>
		</div>
	</div>
</div>
<div class="membersFooter">
	<?php $globalFunction->includeContent(2,'frenchFooter'); ?>
</div>
	<script src="../../_js/members.js"></script>
	<?php $globalFunction->includeContent(2,'botInc'); ?>
</body>
</html>