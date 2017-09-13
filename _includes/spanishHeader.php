<header>
	<div class="closeEverything"></div>
	<div class="container">
			<a href="<?php echo $directory ?>english/home.php"><img src="<?php echo $directory ?>_images/global/logo.png"/ class="header__logo"></a>
			<ul class="header__nav">
				<li><a href="<?php echo $directory ?>english/about/about.php">Acerca de</a></li>
					<ul class="header__subNav">
						<li><a href="<?php echo $directory ?>english/about/about.php">¿Qué es Charis?</a></li>
						<li><a href="<?php echo $directory ?>english/about/members.php">Miembros de la Alianza</a></li>
						<li><a href="<?php echo $directory ?>english/about/history.php">Historia de Charis</a></li>
					</ul>
				<li><a href="<?php echo $directory ?>english/documents/documents.php">Documentos</a></li>
					<ul class="header__subNav">
						<li><a href="<?php echo $directory ?>english/documents/documents.php">Documentos Primarios</a></li>
						<li><a href="<?php echo $directory ?>english/documents/archive.php">Archivo de Documentos</a></li>
					</ul>
				<li><a href="<?php echo $directory ?>english/media/video.php">Galería</a></li>
					<ul class="header__subNav">
						<li><a href="<?php echo $directory ?>english/media/video.php">Videos</a></li>
						<li><a href="<?php echo $directory ?>english/media/photos.php">Fotos</a></li>
					</ul>
				<li><a href="<?php echo $directory ?>english/news/index.php">Noticias</a></li>
				<li>
					<select  onchange="location = this.options[this.selectedIndex].value;">
						<option selected>English</option>
						<option value="<?php echo $directory ?>espanol/home.php">Español</option>
						<option value="<?php echo $directory ?>francais/home.php">Français</option>
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