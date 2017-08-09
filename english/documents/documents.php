<!DOCTYPE html>
<?php require("../../_includes/directory.php"); ?>
<html>
<head>
	<? $globalFunction->includeContent(2,'topInc'); ?>
</head>
<body>
	<? $globalFunction->includeContent(2,'header'); ?>
	<? $globalFunction->includeContent(2,'documentsSubNav'); ?>
<div class="interior__background fullContainer">
	<div class="container">
		<div class="row row--documents">
			<div class="interior__photo">
				<img src="../../_images/home/thumbnail3.jpg" alt="">
			</div>
			<div class="interior__description">
				<p><span>Charis Alliance Charter</span> - What does it mean to be a member of the  <strong>Charis Alliance</strong>? Access definitions, a description of member benefits and responsibilities, and information on the governing body of this international partnership.</p>
				<a href="#download1" class="fancybox">Download Document</a>
			</div>
		</div>
		<div class="row row--documents">
			<div class="interior__photo">
				<img src="../../_images/home/thumbnail2.jpg" alt="">
			</div>
			<div class="interior__description">
				<p><span>Charis Commitment to a Common Identity</span> - Unanimously approved by the delegates of the 2015 CILE, this historic document is a truly global expression of the common values and beliefs of the Grace Brethren movement.</p>
				<a href="#download2" class="fancybox">Download Document</a>
			</div>
		</div>
		<div class="row row--documents">
			<div class="interior__photo">
				<img src="../../_images/documents/primary/thumbnail4.jpg" alt="">
			</div>
			<div class="interior__description">
				<p><span>Charis Commitment to a Common Mission</span> - Unanimously approved by the delegates of the 2008 CILE, this historic document summarizes our commitment to work together in regional and international arenas to promote church planting, leadership training and integrated ministries.</p>
				<a  target="_blank" href="../../documents/cccm/CCCM_English.pdf">Download Document</a>
			</div>
		</div>
	</div>
</div>

<div class="interior__download" id="download1">
	<h2>The Charis Alliance Charter</h2>

	<h3>Download PDF:</h3>
	<a class="interior__buttons" target="_blank" href="../../documents/charter/The_Charis_Alliance_Charter_(v2015.0)_letter_size.pdf">Letter Size</a>
	<a class="interior__buttons" target="_blank" href="../../documents/charter/The Charis Alliance Charter (v2015.0)_A4.pdf">A4 Size</a>

	<h3>Download DOCX:</h3>
	<a class="interior__buttons" href="../../documents/charter/The_Charis_Alliance_Charter_(v2015.0)_letter_size.docx">Letter Size</a>
	<a class="interior__buttons" href="../../documents/charter/The Charis Alliance Charter (v2015.0)_A4.docx">A4 Size</a>
</div>

<div class="interior__download interior__download--wide" id="download2">
	<h2>The Charis Commitment to Common Identity</h2>
	
	<div>
		<h3>Download PDF:</h3>
		<a class="interior__buttons" target="_blank" href="../../documents/ccci/Our_Commitment_to_Common_Identity_(2015_Brochure).pdf">Brochure</a>
		<a class="interior__buttons" target="_blank" href="../../documents/ccci/Our_Commitment_to_Common_Identity_(ENG_v2015.0_Letter).pdf">Letter Size</a>
		<a class="interior__buttons" target="_blank" href="../../documents/ccci/Our_Commitment_to_Common_Identity_(ENG_v2015.0_A4).pdf">A4 Size</a>
		<a class="interior__buttons" target="_blank" href="../../documents/ccci/Our_Commitment_to_Common_Identity_(ENG_v2015.1_with_verses_letter).pdf">Letter Size (with scripture verses)</a>
		<a class="interior__buttons" target="_blank" href="../../documents/ccci/Our_Commitment_to_Common_Identity_(ENG_v2015.1_with_verses_A4).pdf">A4 Size (with scripture verses)</a>
	</div>
	
	<div>
		<h3>Download DOCX:</h3>
		<a class="interior__buttons" href="../../documents/ccci/Our_Commitment_to_Common_Identity_(ENG_v2015.0_Letter).docx">Letter Size</a>
		<a class="interior__buttons" href="../../documents/ccci/Our_Commitment_to_Common_Identity_(ENG_v2015.0_A4).docx">A4 Size</a>
		<a class="interior__buttons" href="../../documents/ccci/Our_Commitment_to_Common_Identity_(ENG_v2015.1_with_verses_letter).docx">Letter Size (with scripture verses)</a>
		<a class="interior__buttons" target="_blank" href="../../documents/ccci/Our_Commitment_to_Common_Identity_(ENG_v2015.1_with_verses_A4).docx">A4 Size (with scripture verses)</a>
	</div>
</div>



	<? $globalFunction->includeContent(2,'footer'); ?>

<script type="text/javascript">
$(document).ready(function() {
	$('.fancybox').fancybox();
});
</script>
	<? $globalFunction->includeContent(2,'botInc'); ?>
</body>
</html>