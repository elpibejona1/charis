<?php /* Prayer Engine - Handles Display of Elements During Form Submit Process */
if (TWITTER == 'yes') { ?>
	<script type="text/javascript" src="javascripts/prayerengine/jquery.limit.js"></script>
	<script type="text/javascript" src="javascripts/prayerengine/prayertweet.js"></script>
<?php } ?> 
<?php if ($_POST) { ?>
	<script type="text/javascript">
		$(document).ready(function() {
		$("#pe-share-button").toggle( //If JavaScript is on, toggle the visibility and text of the Formulaire de sujets de prière
			function () { 
				$("#pe-form-container").slideUp(500);
				$("#pe-share-button").text('Partagez votre sujet de prière');
				$("#pe-form-header h2").text('Sujets de prières récents');
			},
			function () {
				$("#pe-form-container").slideDown(500);
				$("#pe-share-button").text('Fermer le formulaire');
				$("#pe-form-header h2").text('Formulaire de sujets de prière');
			}
		);
		});
	</script>
<?php } else { //Hide form unless it has been posted ?> 
	<script type="text/javascript">
		$(document).ready(function() {
			$("#pe-share-button").toggle( //If JavaScript is on, toggle the visibility and text of the Formulaire de sujets de prière
				function () { 
					$("#pe-form-container").slideDown(500);
					$("#pe-share-button").text('Fermer le formulaire');
					$("#pe-form-header h2").text('Formulaire de sujets de prière');
				},
				function () {
					$("#pe-form-container").slideUp(500);
					$("#pe-share-button").text('Partagez votre sujet de prière');
					$("#pe-form-header h2").text('Sujets de prières récents');
				}
			);
		});
	</script>
<?php } ?>
<?php if ($_POST && !empty($errors) && isset($_POST['twitter_ok'])) { // Show prayer tweet if POST and checkbox selected  ?>
	<script type="text/javascript">
		$(document).ready(function() {
			$('#pe-twitter-area').show();
		});
	</script>
<?php } else { // Hide prayer tweet and replace text if not selected ?>
	<script type="text/javascript">
		$(document).ready(function() {
			$('#pe-twitter-area').hide();
			$('#prayer_tweet').focus(function() { // Replace instructions with current prayer request on click.
				var prayer = $('#prayer').attr('value');
				$(this).val(prayer);
				$(this).unbind();
			});
		});
	</script>
<?php } ?>