<!DOCTYPE html>
<?php require("../../_includes/directory.php"); ?>
<html>
<head>
	<? $globalFunction->includeContent(2,'spanishTopInc'); ?>
</head>
<body>
	<? $globalFunction->includeContent(2,'spanishHeader'); ?>
	<? $globalFunction->includeContent(2,'spanishAboutSubNav'); ?>
<div class="container container--historyTemp">
	<div class="row">
		<?php include('../../_images/about/history/world.svg'); ?>
	</div>
</div>
<div class="container">
	<div class="row">
		<div class="content content--history history--first">
			<h1>
				La Historia de Charis <br>
				<span>(Próximamente)</span>
			</h1>
			<!-- <div class="history__scroll">
				<i class="fa fa-angle-down" aria-hidden="true"></i><br>
				<i class="fa fa-angle-down" aria-hidden="true"></i>
				<p>scroll</p>
			</div> -->
		</div>
	</div>
</div>

	<? $globalFunction->includeContent(2,'spanishFooter'); ?>
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