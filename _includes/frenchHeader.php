<header>
	<div class="closeEverything"></div>
	<div class="container">
			<a href="<?php echo $directory ?>francais/home.php"><img src="<?php echo $directory ?>_images/global/logo.png"/ class="header__logo"></a>
			<ul class="header__nav header__nav--french">
				<li><a href="<?php echo $directory ?>francais/about/about.php">À propos de Charis</a></li>
					<ul class="header__subNav">
						<li><a href="<?php echo $directory ?>francais/about/about.php">Qu’est-ce que c’est?</a></li>
						<li><a href="<?php echo $directory ?>francais/about/members.php">Membres de l’Alliance</a></li>
						<li><a href="<?php echo $directory ?>francais/about/history.php">Histoire de Charis</a></li>
					</ul>
				<li><a href="<?php echo $directory ?>francais/documents/documents.php">Documents</a></li>
					<ul class="header__subNav">
						<li><a href="<?php echo $directory ?>francais/documents/documents.php">Documents principaux</a></li>
						<li><a href="<?php echo $directory ?>francais/documents/archive.php">Archive des documents</a></li>
					</ul>
				<li><a href="<?php echo $directory ?>francais/media/video.php">Médiathèque</a></li>
					<ul class="header__subNav">
						<li><a href="<?php echo $directory ?>francais/media/video.php">Vidéos</a></li>
						<li><a href="<?php echo $directory ?>francais/media/photos.php">Photos</a></li>
					</ul>
				<li><a href="<?php echo $directory ?>francais/news/index.php">Nouvelles</a></li>
				<li>
					<select  onchange="location = this.options[this.selectedIndex].value;">
						<option value="">English</option>
						<option value="">Español</option>
						<option selected>Français</option>
					</select>
				</li>
			</ul>
			<div class="header__buttons">
				<svg id="Layer_1" class="header__hamburger" data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" width="34" height="30" viewBox="0 0 34 30">
					<title>hamburger</title>
					<rect width="34" height="30" style="fill: #b22222"/>
					<path class="hamburger__top" d="M5,9H29a2,2,0,0,0,0-4H5A2,2,0,0,0,5,9Z" style="fill: #fff"/>
					<path class="hamburger__middle" d="M29,13H5a2,2,0,0,0,0,4H29a2,2,0,0,0,0-4Z" style="fill: #fff"/>
					<path class="hamburger__bottom" d="M29,21H5a2,2,0,0,0,0,4H29a2,2,0,0,0,0-4Z" style="fill: #fff"/>
				</svg>

			</div>
	</div>
</header>