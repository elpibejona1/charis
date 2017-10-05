<!DOCTYPE html>
<?php require("../../_includes/directory.php"); ?>
<html>
<head>
	<? $globalFunction->includeContent(2,'frenchTopInc'); ?>
</head>
<body>
	<? $globalFunction->includeContent(2,'frenchHeader'); ?>
	<? $globalFunction->includeContent(2,'frenchAboutSubNav'); ?>
<div class="container container--historyTemp">
	<div class="row">
		<?php include('../../_images/about/history/world.svg'); ?>
	</div>
</div>
<div class="container">
	<div class="row">
		<div class="content content--history history--first">
			<h1>
				L'histoire de Charis <br>
				<span>(À venir)</span>
			</h1>
		</div>
	</div>
</div>
	<? $globalFunction->includeContent(2,'frenchFooter'); ?>
	<script>
		$('document').ready(function(){

			mapInitial();
			tweenIterator();
			toggleCountry();
			bottomMap();

		});
	</script>
	<? $globalFunction->includeContent(2,'botInc'); ?>
</body>
</html>