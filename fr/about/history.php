<!DOCTYPE html>
<?php require("../../_includes/directory.php"); ?>
<html>
<head>
	<? $globalFunction->includeContent(2,'frenchTopInc'); ?>
</head>
<body>
	<? $globalFunction->includeContent(2,'frenchHeader'); ?>
	<? $globalFunction->includeContent(2,'frenchAboutSubNav'); ?>
<div class="container container--historyMap">
	<div class="row">
		<?php include('../../_images/about/history/world.svg'); ?>
	</div>
</div>
<div class="container">
	<div class="row">
		<div class="content content--history history--first">
			<h1>L’Histoire de Charis</h1>
			<div class="history__scroll">
				<i class="fa fa-angle-down" aria-hidden="true"></i><br>
				<i class="fa fa-angle-down" aria-hidden="true"></i>
				<p>faire défiler</p>
			</div>
		</div>
	</div>
</div>
<div class="fullContainer fullContainer--history">
	<div class="toTop">
		<i class="fa fa-angle-up" aria-hidden="true"></i><br>
		Retourner au début
	</div>
	<div class="container">
		<!-- <div class="row">
			<div class="history__nav">
				<div class="history__nav__button history__nav__button--1" data-decade="1">1900</div>
				<div class="history__nav__button history__nav__button--2" data-decade="2">1910</div>
				<div class="history__nav__button history__nav__button--3" data-decade="3">1950</div>
				<div class="history__nav__button history__nav__button--4" data-decade="4">1960</div>
				<div class="history__nav__button history__nav__button--5" data-decade="5">1980</div>
				<div class="history__nav__button history__nav__button--6" data-decade="6">1990</div>
				<div class="history__nav__button history__nav__button--7" data-decade="7">2000</div>
				<div class="history__nav__button history__nav__button--8" data-decade="8">2010</div>
			</div>
		</div>	 -->
		<div class="row">
			<div class="content content--timeline">
				<div class="row">
					<div class="timeline__decade timeline__decade--1">1700</div>
				</div>
				<div class="row">
					<div class="timeline__dot"></div>
					<div class="timeline__event">
						<h2>1708: Le mouvement commence en Allemagne</h2>
						<div class="timeline__event__photo">
							<img src="../../_images/about/history/origins-image1.jpg" alt="">
							<p class="caption">Alexander Mack a créé le Mouvement des Frères à Schwarzenau, Allemagne.</p>
						</div>
						<div class="timeline__event__photo timeline__event__photo--portrait">
							<img src="../../_images/about/history/origins-image2.jpg" alt="">
							<p class="caption">Les huit premiers Frères.</p>		
						</div>
					</div>
				</div>
				<div class="row">
					<div class="timeline__dot timeline__dot--country" data-dot="US"></div>
					<div class="timeline__event">
						<h2>1719: Première vague d’immigration en Amérique.</h2>
						<div class="timeline__event__photo">
							<img src="../../_images/about/history/immigration-image1.jpg" alt="">
							<p class="caption">Premiers Frères en Amérique.</p>
						</div>
						<div class="timeline__event__photo">
							<img src="../../_images/about/history/immigration-image2.jpg" alt="">
							<p class="caption">Immeuble des premiers Frères en Amérique.</p>		
						</div>
					</div>
				</div>
				<div class="row">
					<div class="timeline__decade timeline__decade--1">1900</div>
				</div>
				<div class="row">
					<div class="timeline__dot"></div>
					<div class="timeline__event">
						<h2>1900: début des efforts de la Mission</h2>
						<div class="timeline__event__photo">
							<img src="../../_images/about/history/usa-image2.jpg" alt="">
							<p class="caption">Plaque commémorant l’organisation de la <em>Foreign Missionary Society</em> (Société missionnaire étrangère) de l’Église des Frères (connue aujourd’hui comme <em>Encompass World Partners</em>) à Winona Lake, dans l’Indiana aux Etats-Unis.</p>
						</div>
						<div class="timeline__event__photo timeline__event__photo--portrait">
							<img src="../../_images/about/history/usa-image1.jpg" alt="">
							<p class="caption">Jacob C. Cassel : Fondateur des Missions des Frères.</p>		
						</div>
					</div>
				</div>
				<div class="row">
					<div class="timeline__dot timeline__dot--country" data-dot="AR"></div>
					<div class="timeline__event">
						<h2>1909: Argentine</h2>
						<div class="timeline__event__photo">
							<img src="../../_images/about/history/argentina-image1.jpg" alt="">
							<p class="caption">En 1932, devant l’Église des Frères de la Grâce à <em>Rio Cuarto</em>, les conseillers bibliques se préparent pour une réunion sous tente.</p>		
						</div>
						<div class="timeline__event__photo">
							<img src="../../_images/about/history/argentina-image2.jpg" alt="">
							<p class="caption">Formation au leadership à l’Institut Biblique des Frères en&nbsp;Argentine.</p>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="timeline__decade timeline__decade--2">1910</div>
				</div>
				<div class="row">
					<div class="timeline__dot timeline__dot--country" data-dot="CF"></div>
					<div class="timeline__event">
						<h2>1918: République Centrafricaine</h2>
						<div class="timeline__event__photo">
							<img src="../../_images/about/history/car-image1.jpg" alt="">
							<p class="caption">Le missionnaire des Frères Jacques Gribble et sa famille.</p>	
						</div>
						<div class="timeline__event__photo">
							<img src="../../_images/about/history/car-image2.jpg" alt="">
							<p class="caption">Un centre de recherche sur la mission a classé la République Centrafricaine comme le pays le plus évangélisé de la planète.</p>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="timeline__decade timeline__decade--3">1940</div>
				</div>
				<div class="row">
					<div class="timeline__dot timeline__dot--country" data-dot="BR"></div>
					<div class="timeline__event">
						<h2>1949: Brésil</h2>
						<div class="timeline__event__photo">
							<img src="../../_images/about/history/brazil-image1.jpg" alt="">
							<p class="caption">Le missionnaire Bill Burke et son embarcation <em>Vamos</em>, utilisée pour répandre l’Évangile dans les îles du fleuve Amazone.</p>
						</div>
						<div class="timeline__event__photo">
							<img src="../../_images/about/history/brazil-image2.jpg" alt="">
							<p class="caption">Le ministère a commencé dans la ville de Belém, près de l’embouchure de l’Amazone. Les efforts ont ensuite été étendus au sud de la ville d’Uberlândia et à la région environnante.</p>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="timeline__decade timeline__decade--3">1950</div>
				</div>
				<div class="row">
					<div class="timeline__dot timeline__dot--country" data-dot="MX"></div>
					<div class="timeline__event">
						<h2>1951: Mexique</h2>
						<div class="timeline__event__photo">
							<img src="../../_images/about/history/mexico-image1.jpg" alt="">
							<p class="caption">Les efforts au Mexique ont commencé le long de la frontière des États-Unis, et ont ensuite été étendus au sud de la ville de Mexico.</p>
						</div>
						<div class="timeline__event__photo">
							<img src="../../_images/about/history/mexico-image2.jpg" alt="">
							<p class="caption">En 1960, un Institut biblique offrant des formations aux pasteurs et aux leaders a été fondé.</p>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="timeline__dot timeline__dot--country" data-dot="FR"></div>
					<div class="timeline__event">
						<h2>1951: France</h2>
						<div class="timeline__event__photo">
							<img src="../../_images/about/history/france-image1.jpg" alt="">
							<p class="caption">Les activités se sont centrées autour du Château de Saint-Albain.</p>		
						</div>
						<div class="timeline__event__photo">
							<img src="../../_images/about/history/france-image2.jpg" alt="">
							<p class="caption">Baptêmes au Château.</p>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="timeline__decade timeline__decade--4">1960</div>
				</div>
				<div class="row">
					<div class="timeline__dot timeline__dot--country" data-dot="TD"></div>
					<div class="timeline__event">
						<h2>1966: Tchad</h2>
						<div class="timeline__event__photo">
							<img src="../../_images/about/history/chad-image1.jpg" alt="">
							<p class="caption">Diplômés de l’École d’évangélisation tchadienne.</p>		
						</div>
						<div class="timeline__event__photo">
							<img src="../../_images/about/history/chad-image2.jpg" alt="">
							<p class="caption">L’Évangéliste Dadjé Samuel, fondateur de l’École d’évangélisation tchadienne.</p>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="timeline__dot timeline__dot--country" data-dot="DE"></div>
					<div class="timeline__event">
						<h2>1968: Allemagne</h2>
						<div class="timeline__event__photo">
							<img src="../../_images/about/history/germany-image1.jpg" alt="">
							<p class="caption">Les missionnaires Roger et Nancy Peugh ont commencé à organiser des études bibliques et des cultes dans leur maison.</p>
						</div>
						<div class="timeline__event__photo">
							<img src="../../_images/about/history/germany-image2.jpg" alt="">
							<p class="caption">Une Église a été implantée à Stuttgart et une autre plus tard à&nbsp;Leonberg.</p>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="timeline__decade timeline__decade--5">1980</div>
				</div>
				<div class="row">
					<div class="timeline__dot timeline__dot--country" data-dot="GB"></div>
					<div class="timeline__event">
						<h2>1980: Royaume-Uni</h2>
						<div class="timeline__event__photo">
							<img src="../../_images/about/history/uk-image1.jpg" alt="">
							<p class="caption">La jeunesse britannique dans un camp d’été.</p>		
						</div>
						<div class="timeline__event__photo">
							<img src="../../_images/about/history/uk-image2.jpg" alt="">
							<p class="caption">Communauté Biblique de la Grâce de Solihull, en Angleterre (Pâques 1983).</p>
						</div>
					</div>
				</div>
				<!-- <div class="row">
					<div class="timeline__dot timeline__dot--country" data-dot="GT"></div>
					<div class="timeline__event">
						<h2>1983: Guatemala</h2>
						<div class="timeline__event__photo">
							<img src="http://via.placeholder.com/500x284?text=Photo+à+venir" alt="">
						</div>
						<div class="timeline__event__photo">
							<img src="http://via.placeholder.com/500x284?text=Photo+à+venir" alt="">
						</div>
					</div>
				</div> -->
				<div class="row">
					<div class="timeline__dot timeline__dot--country" data-dot="JP"></div>
					<div class="timeline__event">
						<h2>1984: Japon</h2>
						<div class="timeline__event__photo">
							<img src="../../_images/about/history/japan-image1.jpg" alt="">
							<p class="caption">Le ministère au Japon a commencé à Hoya City (Grand Tokyo).</p>
						</div>
						<div class="timeline__event__photo">
							<img src="../../_images/about/history/japan-image2.jpg" alt="">
							<p class="caption"><em>NorthStar</em>, un hôtel en montagne aux Alpes japonaises, cherche à atteindre les japonais à travers les sports extrêmes et les activités de plein air.</p>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="timeline__dot timeline__dot--country" data-dot="PH"></div>
					<div class="timeline__event">
						<h2>1984: Philippines</h2>
						<div class="timeline__event__photo">
							<img src="../../_images/about/history/philippines-image1.jpg" alt="">
							<p class="caption">Réunion à l’Église du Grand Manille.</p>		
						</div>
						<div class="timeline__event__photo">
							<img src="../../_images/about/history/philippines-image2.jpg" alt="">
							<p class="caption">Célébration des 10 ans des Eglises des Frères de la Grâce aux&nbsp;Philippines.</p>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="timeline__dot timeline__dot--country" data-dot="UY"></div>
					<div class="timeline__event">
						<h2>1987: Uruguay</h2>
						<div class="timeline__event__photo">
							<img src="../../_images/about/history/uruguay-image1.jpg" alt="">
							<p class="caption">José et Titi Palacios, les fondateurs du mouvement des Églises des Frères en Uruguay.</p>
						</div>
						<div class="timeline__event__photo">
							<img src="../../_images/about/history/uruguay-image2.jpg" alt="">
							<p class="caption">Les débuts du ministère aux environs de Shangri-la en&nbsp;1988.</p>
						</div>
					</div>
				</div>
				<!-- <div class="row">
					<div class="timeline__dot timeline__dot--country" data-dot="PT"></div>
					<div class="timeline__event">
						<h2>NEED YEAR: Portugal</h2>
						<p>It was the vision of Jack Zielasko which opened the ministry in Portugal. The Zielaskos had served for 14 years in Brazil before Jack became the Executive Director of Grace Brethren Missions. Because of their knowledge of Portuguese, they became burdened for the mother country of that language, a country impoverished by years of dictatorship and colonial wars.</p>
						<p>The majority of the Portuguese are Catholics, but only a minority regularly practice their religion. Protestants represent only slightly more than 1% of the population, with far fewer being evangelical. The Zielaskos were soon joined by Tim and Julie Hawkins and Ralph and Martha Schwartz, followed later by their son and his wife, Sam and Tracey.</p>
					</div>
					<div class="timeline__event">
						<div class="timeline__event__photo"> 						<img src="http://placehold.it/424x200" alt="">
							<p class="caption">Lorem ipsum dolor sit amet, consectetur.</p>		
						</div>
						<div class="timeline__event__photo"> 						<img src="http://placehold.it/424x200" alt="">
							<p class="caption">Lorem ipsum dolor sit amet, consectetur.</p>
						</div>
					</div>
					<div class="timeline__event">
						<p>Most of the ministry in Portugal has centered in the city of Porto and has focused on personal contact-making and the creation of small groups, of which a number were started in the area. The missionaries cooperated with other workers in establishing an international church, which has been instrumental in reaching out also into Portuguese families. A number of Portuguese men have been trained as leaders of the ministry, and have faithfully fulfilled their responsibilities. One of these, Alfredo Abreu, who had been serving in a campus ministry, later moved with his family to the capitol, Lisbon, to seek to build up a body of believers there. He has been joined by Sam and Tracey Schwartz, and their ministries have resulted in planting a church. There are currently four organized churches in Portugal with the Brethren fellowship.</p>
					</div>
				</div> -->
				<div class="row">
					<div class="timeline__decade timeline__decade--6">1990</div>
				</div>
				<!-- <div class="row">
					<div class="timeline__dot"></div>
					<div class="timeline__event">
						<h2>1990s: The Beginnings of an International&nbsp;Identity</h2>
						<p>The vision of an international fellowship of Grace Brethren churches goes back many decades. Periodically a proposal would be made at National Conference for the creation of an international conference, but would almost immediately be tabled because of the obstacles involved in making it happen. Too many questions seemed unanswerable. Who would be invited? How would they be chosen? How would a global gathering of Grace Brethren churches be financed? What would be the guiding purpose?</p>
						<p>At the 1990 conference there was serious discussion concerning the need to give churches an international identity, but again it appeared that because of the hurdles involved, an international fellowship would never be more than a dream.</p>
					</div>
					<div class="timeline__event">
						<p>Those involved with Grace Brethren International Missions knew, however, that some day the dream would have to become a reality in order to allow churches around the globe to preserve their Grace Brethren identities. Whenever churches are established throughout the world, the mission plays an apostolic role, usually perceived as the role of a parent. The identity of a church is closely related to the mission until the time several congregations can organize themselves into a national fellowship, usually following the pattern of the sending churches. At this time the churches become autonomous, making their own decisions, and seeking to provide for their own needs.</p>
					</div>
					<div class="timeline__event">
						<p>When this autonomy becomes a reality, the churches begin to phase out their relationship with the mission. However, this forces to them phase out their relationship with the only entity that has given them a sense of global identity. As the mission moves into the background, something has to take its place, or the churches will become increasingly provincial and cut off from the rest of the world.</p>
						<p>Therefore, the main purpose of an international fellowship, whatever the form it assumes, is to give global vision and identity to church fellowships. They must know that they are a part of a larger family than their local churches. And they must know that their mission and ministry go beyond their own back yard.</p>
					</div>
					<div class="timeline__event">
						<p>At the 1993 National Conference of the Fellowship of Grace Brethren Churches (FGBC) in Billings, Mont., serious dialogues occurred concerning this need and how to meet it. These discussions, which took place in encounters with the field superintendents (of Grace Brethren International Missions) rather than on the conference floor, opened the way to the first international gathering representing a global fellowship. Three key guidelines were established concerning the nature of an international gathering:</p>
						<ul class="list">
							<li>Charis would be an international gathering of leaders, rather than churches.</li>
							<li>These leaders would meet somewhere outside the United States.</li>
							<li>This endeavor would be led by a national, not by an American.</li>
						</ul>
					</div>
					<div class="timeline__event">
						<p>It was also determined that:</p>
						<ul class="list">
							<li>The place of the first meeting would be the Château of Saint-Albain in France.</li>
							<li>Florent Varak, pastor of the Grace Brethren Church in Lyon, France, would be asked to give leadership to the gathering.</li>
							<li>The time of the meeting would be October of 1994.</li>
							<li>The Field Superintendents would be responsible for inviting at least one delegate from each country.</li>
						</ul>
					</div>
					<div class="timeline__event">
						<p>The name <span>Charis</span> was chosen, to represent Grace in any language. It would be called the <span>Charis International Alliance</span>, since it was to be a fraternity of leaders, and not an organization. The overall purpose would be to promote international church planting.</p>
						<p>Accordingly, on October 3, 1994, delegates from fifteen countries converged on the Château of Saint Albain, France, for the first meeting of the <span>Charis International Alliance</span>.</p>
					</div>
				</div> -->
				<div class="row">
					<div class="timeline__dot"></div>
					<div class="timeline__event">
						<h2>1994: Rencontre Charis à Saint-Albain, en&nbsp;France</h2>
						<div class="timeline__event__photo">
							<img src="../../_images/about/history/charis94-image1.jpg" alt="">
							<p class="caption">Florent Varak, coordinateur Charis en France, conduit la rencontre Charis au Château de St. Albain.</p>		
						</div>
						<div class="timeline__event__photo">
							<img src="../../_images/about/history/charis94-image2.jpg" alt="">
							<p class="caption">Les délégués Charis discutent de thèmes d’intérêt commun.</p>
						</div>
					</div>
					<div class="timeline__event">
						<div class="timeline__event__photo">
							<img src="../../_images/about/history/charis94-image3.jpg" alt="">
							<p class="caption">Les délégués Charis discutent de thèmes d’intérêt commun.</p>		
						</div>
						<div class="timeline__event__photo">
							<img src="../../_images/about/history/charis94-image4.jpg" alt="">
							<p class="caption">Les participants de la Rencontre Charis de 1994.</p>
						</div>
					</div>
				</div>
				<!-- <div class="row">
					<div class="timeline__dot timeline__dot--country" data-dot="CA"></div>
					<div class="timeline__event">
						<h2>1996: Canada</h2>
						<div class="timeline__event__photo">
							<img src="http://via.placeholder.com/500x284?text=Photo+à+venir" alt="">
						</div>
						<div class="timeline__event__photo">
							<img src="http://via.placeholder.com/500x284?text=Photo+à+venir" alt="">
						</div>
					</div>
				</div> -->
				<div class="row">
					<div class="timeline__dot"></div>
					<div class="timeline__event">
						<h2>1996: Rencontre Charis à Toronto, au&nbsp;Canada</h2>
						<div class="timeline__event__photo">
							<img src="../../_images/about/history/charis96-image1.jpg" alt="">
							<p class="caption">Les délégués internationaux et le personnel d’<em>Encompass</em> arrivent à la Rencontre Charis de 1996.</p>		
						</div>
						<div class="timeline__event__photo">
							<img src="../../_images/about/history/charis96-image2.jpg" alt="">
							<p class="caption">Les participants de la Rencontre Charis de 1996.</p>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="timeline__dot timeline__dot--country" data-dot="KH"></div>
					<div class="timeline__event">
						<h2>1997: Cambodge</h2>
						<div class="timeline__event__photo">
							<img src="../../_images/about/history/cambodia-image2.jpg" alt="">
							<p class="caption">Le ministère au Cambodge a commencé grâce à un partenariat entre Vek Huong Taing et les Missions des Frères de la Grâce.</p>
						</div>
						<div class="timeline__event__photo">
							<img src="../../_images/about/history/cambodia-image1.jpg" alt="">
							<p class="caption">La sensibilisation s’est étendue des grandes villes jusqu’aux villages environnants.</p>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="timeline__dot timeline__dot--country" data-dot="CL"></div>
					<div class="timeline__event">
						<h2>1998: Chili</h2>
						<div class="timeline__event__photo">
							<img src="../../_images/about/history/chile-image1.jpg" alt="">
							<p class="caption">L’équipe missionnaire à Curico, au Chili, en 2006.</p>
						</div>
						<div class="timeline__event__photo">
							<img src="../../_images/about/history/chile-image2.jpg" alt="">
							<p class="caption">Réunion dans les maisons, en 2006.</p>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="timeline__dot timeline__dot--lastTrigger"></div>
					<div class="timeline__event">
						<h2>1999: Rencontre Charis à <em>Carlos Paz</em>, en&nbsp;Argentine</h2>
						<div class="timeline__event__photo">
							<img src="../../_images/about/history/charis99-image1.jpg" alt="">
							<p class="caption">Les participants de la Rencontre Charis de 1999.</p>
						</div>
						<div class="timeline__event__photo">
							<img src="../../_images/about/history/charis99-image2.jpg" alt="">
							<p class="caption">Les délégués latino-américains et africains à la Rencontre&nbsp;Charis.</p>		
						</div>
					</div>
				</div>
				<div class="row">
					<div class="timeline__decade timeline__decade--7">2000</div>
				</div>
				<div class="row">
					<div class="timeline__dot timeline__dot--country" data-dot="IE"></div>
					<div class="timeline__event">
						<h2>2002: Irlande</h2>
						<div class="timeline__event__photo">
							<img src="../../_images/about/history/ireland-image1.jpg" alt="">
							<p class="caption">Église <em>Crossroads</em> de Dublin.</p>
						</div>
						<div class="timeline__event__photo">
							<img src="../../_images/about/history/ireland-image2.jpg" alt="">
							<p class="caption">Les personnes souhaitant explorer l’Évangile se retrouvent dans un café à Dublin pour des discussions en groupes.</p>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="timeline__dot timeline__dot--country" data-dot="CM"></div>
					<div class="timeline__event">
						<h2>2003: Cameroun</h2>
						<div class="timeline__event__photo">
							<img src="../../_images/about/history/cameroon-image1.jpg" alt="">
							<p class="caption">L’évangéliste Delphi Wilingang et les étudiants de l’école d’évangélisation à Toubouro, au nord du Cameroun.</p>
						</div>
						<div class="timeline__event__photo">
							<img src="../../_images/about/history/cameroon-image2.jpg" alt="">
							<p class="caption">Un groupe de l’Église de Santa Barbara à Yaoundé construit un pont pour rejoindre leur communauté.</p>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="timeline__dot timeline__dot--country" data-dot="NG"></div>
					<div class="timeline__event">
						<h2>2006: Nigéria</h2>
						<div class="timeline__event__photo">
							<img src="../../_images/about/history/nigeria-image1.jpg" alt="">
							<p class="caption">Le président des Églises Enoch Kolarambaye et l’évangéliste Clison Djendode posent avec les étudiants de l’école d’évangélisation.</p>
						</div>
						<div class="timeline__event__photo">
							<img src="../../_images/about/history/nigeria-image2.jpg" alt="">
							<p class="caption">2017:  Conférence de femmes au Nigéria</p>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="timeline__dot"></div>
					<div class="timeline__event">
						<h2>2008: Rencontre Charis à Bad Homburg,&nbsp;Allemagne</h2>
						<div class="timeline__event__photo">
							<img src="../../_images/about/history/charis08-image1.jpg" alt="">
							<p class="caption">Les participants de la Rencontre Charis de 2008 sur le leadership.</p>		
						</div>
						<div class="timeline__event__photo">
							<img src="../../_images/about/history/charis08-image2.jpg" alt="">
							<p class="caption">Le thème de la rencontre était « Intendants fidèles de la Grâce de Dieu », basé sur 1 Pierre 4:10.</p>
						</div>
					</div>
					<!-- <div class="timeline__event">
						<div class="timeline__event__photo">
							<img src="../../_images/about/history/charis08-image3.jpg" alt="">
						</div>
						<div class="timeline__event__photo">
							<img src="../../_images/about/history/charis08-image4.jpg" alt="">
						</div>
					</div> -->
				</div>
				<div class="row">
					<div class="timeline__dot timeline__dot--country" data-dot="BS"></div>
					<div class="timeline__event">
						<h2>2009: Bahamas</h2>
						<div class="timeline__event__photo">
							<img src="../../_images/about/history/bahamas-image1.jpg" alt="">
							<p class="caption">Leaders de l’Alliance Charis bahamienne signant des documents constitutifs.</p>
						</div>
						<div class="timeline__event__photo">
							<img src="../../_images/about/history/bahamas-image2.jpg" alt="">
							<p class="caption">Des pasteurs et des leaders célèbrent la formation de l’Alliance Charis des Bahamas.</p>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="timeline__decade timeline__decade--8">2010</div>
				</div>
				<div class="row">
					<div class="timeline__dot"></div>
					<div class="timeline__event">
						<h2>2010: Rencontre Charis à Saint-Albain, en France</h2>
						<div class="timeline__event__photo">
							<img src="../../_images/about/history/charis10-image1.jpg" alt="">
							<p class="caption">Les participants de la Rencontre Charis de 2010.</p>		
						</div>
						<div class="timeline__event__photo">
							<img src="../../_images/about/history/charis10-image2.jpg" alt="">
							<p class="caption">Membres du Comité directeur Charis.</p>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="timeline__dot"></div>
					<div class="timeline__event">
						<h2>2015: Rencontre Charis à Bangkok, en&nbsp;Thaïlande</h2>
						<div class="timeline__event__photo">
							<img src="../../_images/about/history/charis15-image1.jpg" alt="">
							<p class="caption">Les participants de la Rencontre Internationale Charis sur le Leadership de 2015.</p>		
						</div>
						<div class="timeline__event__photo">
							<img src="../../_images/about/history/charis15-image2.jpg" alt="">
							<p class="caption">Les représentants discutent de la Déclaration Charis pour une Identité&nbsp;Commune.</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<div class="container">
	<div class="row">
		<div class="content content--history history--last">
			<h1>L’Alliance Charis</h1>
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