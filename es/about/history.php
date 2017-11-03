<!DOCTYPE html>
<?php require("../../_includes/directory.php"); ?>
<html>
<head>
	<? $globalFunction->includeContent(2,'spanishTopInc'); ?>
</head>
<body>
	<? $globalFunction->includeContent(2,'spanishHeader'); ?>
	<? $globalFunction->includeContent(2,'spanishAboutSubNav'); ?>
<div class="container container--historyMap">
	<div class="row">
		<?php include('../../_images/about/history/world.svg'); ?>
	</div>
</div>
<div class="container">
	<div class="row">
		<div class="content content--history history--first">
			<h1>La historia de Charis</h1>
			<div class="history__scroll">
				<i class="fa fa-angle-down" aria-hidden="true"></i><br>
				<i class="fa fa-angle-down" aria-hidden="true"></i>
				<p>desplazarse hacia abajo</p>
			</div>
		</div>
	</div>
</div>
<div class="fullContainer fullContainer--history">
	<div class="toTop">
		<i class="fa fa-angle-up" aria-hidden="true"></i><br>
		Volver al principio
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
						<h2>1708: El movimiento comenzó en Alemania</h2>
						<div class="timeline__event__photo">
							<img src="../../_images/about/history/origins-image1.jpg" alt="">
							<p class="caption">Alexander Mack fundó el Movimiento de Los Hermanos en Schwarzenau, Alemania.</p>
						</div>
						<div class="timeline__event__photo timeline__event__photo--portrait">
							<img src="../../_images/about/history/origins-image2.jpg" alt="">
							<p class="caption">Los ocho Hermanos originales.</p>		
						</div>
					</div>
				</div>
				<div class="row">
					<div class="timeline__dot timeline__dot--country" data-dot="US"></div>
					<div class="timeline__event">
						<h2>1719: La primera Ola de Inmigrantes a los Estados Unidos</h2>
						<div class="timeline__event__photo">
							<img src="../../_images/about/history/immigration-image1.jpg" alt="">
							<p class="caption">Los primeros Hermanos en Estados Unidos.</p>
						</div>
						<div class="timeline__event__photo">
							<img src="../../_images/about/history/immigration-image2.jpg" alt="">
							<p class="caption">Edificio de los primeros Hermanos en Estados Unidos.</p>		
						</div>
					</div>
				</div>
				<div class="row">
					<div class="timeline__decade timeline__decade--1">1900</div>
				</div>
				<div class="row">
					<div class="timeline__dot"></div>
					<div class="timeline__event">
						<h2>1900: Comienzan los esfuerzos misioneros</h2>
						<div class="timeline__event__photo">
							<img src="../../_images/about/history/usa-image2.jpg" alt="">
							<p class="caption">Placa conmemorando la organización de la Sociedad de Misiones Extranjeras de la Iglesia de Los Hermanos (conocida hoy como Encompass World Partners) en Winona Lake, Indiana, EEUU.</p>
						</div>
						<div class="timeline__event__photo timeline__event__photo--portrait">
							<img src="../../_images/about/history/usa-image1.jpg" alt="">
							<p class="caption">Jacob C. Cassel: Fundador de la Misión de Los Hermanos.</p>		
						</div>
					</div>
				</div>
				<div class="row">
					<div class="timeline__dot timeline__dot--country" data-dot="AR"></div>
					<div class="timeline__event">
						<h2>1909: Argentina</h2>
						<div class="timeline__event__photo">
							<img src="../../_images/about/history/argentina-image1.jpg" alt="">
							<p class="caption">Frente a la Iglesia de Los Hermanos en Río Cuarto, los entrenadores bíblicos se preparan para una reunión en carpa en 1932.</p>		
						</div>
						<div class="timeline__event__photo">
							<img src="../../_images/about/history/argentina-image2.jpg" alt="">
							<p class="caption">Capacitación para el Liderazgo en el Instituto Bíblico de Los Hermanos en Argentina.</p>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="timeline__decade timeline__decade--2">1910</div>
				</div>
				<div class="row">
					<div class="timeline__dot timeline__dot--country" data-dot="CF"></div>
					<div class="timeline__event">
						<h2>1918: República Centroafricana</h2>
						<div class="timeline__event__photo">
							<img src="../../_images/about/history/car-image1.jpg" alt="">
							<p class="caption">Misionero de los Hermanos James Gribble y su familia.</p>	
						</div>
						<div class="timeline__event__photo">
							<img src="../../_images/about/history/car-image2.jpg" alt="">
							<p class="caption">Un centro de investigación de misiones ubica a la República Centroafricana como el país más evangelizado del mundo.</p>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="timeline__decade timeline__decade--3">1940</div>
				</div>
				<div class="row">
					<div class="timeline__dot timeline__dot--country" data-dot="BR"></div>
					<div class="timeline__event">
						<h2>1949: Brasil</h2>
						<div class="timeline__event__photo">
							<img src="../../_images/about/history/brazil-image1.jpg" alt="">
							<p class="caption">Misionero Bill Burk y su bote el “Vamos”, usado para evangelizar en las islas del Río Amazonas.</p>
						</div>
						<div class="timeline__event__photo">
							<img src="../../_images/about/history/brazil-image2.jpg" alt="">
							<p class="caption">Comienzo del ministerio en la ciudad de Belén, cerca de la desembocadura del Río Amazonas. Más tarde los esfuerzos se expandieron al sur, a la ciudad de Uberlandia y en las regiones de los alrededores.</p>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="timeline__decade timeline__decade--3">1950</div>
				</div>
				<div class="row">
					<div class="timeline__dot timeline__dot--country" data-dot="MX"></div>
					<div class="timeline__event">
						<h2>1951: México</h2>
						<div class="timeline__event__photo">
							<img src="../../_images/about/history/mexico-image1.jpg" alt="">
							<p class="caption">En México, los esfuerzos comenzaron a lo largo de la frontera con los Estados Unidos, y más tarde se expandió hacia el sur, hasta la ciudad de México.</p>
						</div>
						<div class="timeline__event__photo">
							<img src="../../_images/about/history/mexico-image2.jpg" alt="">
							<p class="caption">Un Instituto Bíblico se fundó en el año 1960, proveyendo capacitación para pastores y líderes.</p>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="timeline__dot timeline__dot--country" data-dot="FR"></div>
					<div class="timeline__event">
						<h2>1951: Francia</h2>
						<div class="timeline__event__photo">
							<img src="../../_images/about/history/france-image1.jpg" alt="">
							<p class="caption">Los esfuerzos estaban centralizados en el Chateau de Saint-Albain.</p>		
						</div>
						<div class="timeline__event__photo">
							<img src="../../_images/about/history/france-image2.jpg" alt="">
							<p class="caption">Bautismos en el Chateau.</p>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="timeline__decade timeline__decade--4">1960</div>
				</div>
				<div class="row">
					<div class="timeline__dot timeline__dot--country" data-dot="TD"></div>
					<div class="timeline__event">
						<h2>1966: Chad</h2>
						<div class="timeline__event__photo">
							<img src="../../_images/about/history/chad-image1.jpg" alt="">
							<p class="caption">Graduados de la Escuela de Evangelismo Chadiana.</p>		
						</div>
						<div class="timeline__event__photo">
							<img src="../../_images/about/history/chad-image2.jpg" alt="">
							<p class="caption">Evangelista Dadjé Samuel, fundador de la Escuela de Evangelismo Chadiana.</p>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="timeline__dot timeline__dot--country" data-dot="DE"></div>
					<div class="timeline__event">
						<h2>1968: Alemania</h2>
						<div class="timeline__event__photo">
							<img src="../../_images/about/history/germany-image1.jpg" alt="">
							<p class="caption">Misioneros Roger y Nancy Peugh comenzaron teniendo estudios bíblicos y reuniones de adoración en su hogar.</p>
						</div>
						<div class="timeline__event__photo">
							<img src="../../_images/about/history/germany-image2.jpg" alt="">
							<p class="caption">Una iglesia fue fundada en la ciudad de Stuttgart, y más tarde comenzó otra en Leonberg.</p>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="timeline__decade timeline__decade--5">1980</div>
				</div>
				<div class="row">
					<div class="timeline__dot timeline__dot--country" data-dot="GB"></div>
					<div class="timeline__event">
						<h2>1980: Reino Unido</h2>
						<div class="timeline__event__photo">
							<img src="../../_images/about/history/uk-image1.jpg" alt="">
							<p class="caption">Un joven británico en un campamento de verano.</p>		
						</div>
						<div class="timeline__event__photo">
							<img src="../../_images/about/history/uk-image2.jpg" alt="">
							<p class="caption">Confraternidad Bíblica de la Gracia en Solihull, Inglaterra (Pascua de 1983).</p>
						</div>
					</div>
				</div>
				<!-- <div class="row">
					<div class="timeline__dot timeline__dot--country" data-dot="GT"></div>
					<div class="timeline__event">
						<h2>1983: Guatemala</h2>
						<div class="timeline__event__photo">
							<img src="http://via.placeholder.com/500x284?text=Próximamente" alt="">
						</div>
						<div class="timeline__event__photo">
							<img src="http://via.placeholder.com/500x284?text=Próximamente" alt="">
						</div>
					</div>
				</div> -->
				<div class="row">
					<div class="timeline__dot timeline__dot--country" data-dot="JP"></div>
					<div class="timeline__event">
						<h2>1984: Japón</h2>
						<div class="timeline__event__photo">
							<img src="../../_images/about/history/japan-image1.jpg" alt="">
							<p class="caption">El ministerio en Japón comenzó en la ciudad de Hoya (Gran Tokio).</p>
						</div>
						<div class="timeline__event__photo">
							<img src="../../_images/about/history/japan-image2.jpg" alt="">
							<p class="caption">NorthStar, cabaña de montaña en los Alpes japoneses. Busca alcanzar a los japoneses a través de deportes extremos y actividades al aire libre.</p>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="timeline__dot timeline__dot--country" data-dot="PH"></div>
					<div class="timeline__event">
						<h2>1984: Las Filipinas</h2>
						<div class="timeline__event__photo">
							<img src="../../_images/about/history/philippines-image1.jpg" alt="">
							<p class="caption">Reunión de la iglesia en Gran Manila.</p>		
						</div>
						<div class="timeline__event__photo">
							<img src="../../_images/about/history/philippines-image2.jpg" alt="">
							<p class="caption">Celebración de los 10 años de las Iglesias de los Hermanos en Las&nbsp;Filipinas.</p>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="timeline__dot timeline__dot--country" data-dot="UY"></div>
					<div class="timeline__event">
						<h2>1987: Uruguay</h2>
						<div class="timeline__event__photo">
							<img src="../../_images/about/history/uruguay-image1.jpg" alt="">
							<p class="caption">José y Titi Palacios, fundadores de la iglesia de Los Hermanos por Gracia en Uruguay.</p>
						</div>
						<div class="timeline__event__photo">
							<img src="../../_images/about/history/uruguay-image2.jpg" alt="">
							<p class="caption">Comienzos en el barrio de Shangri-la.&nbsp;1988.</p>
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
						<h2>1994: Encuentro de Charis en Saint-Albain,&nbsp;Francia</h2>
						<div class="timeline__event__photo">
							<img src="../../_images/about/history/charis94-image1.jpg" alt="">
							<p class="caption">El coordinador de Charis, Florent Varak, de Francia, lidera el Encuentro de Charis en el Chateau de Saint-Albain.</p>		
						</div>
						<div class="timeline__event__photo">
							<img src="../../_images/about/history/charis94-image2.jpg" alt="">
							<p class="caption">Los delegados de Charis conversando acerca de temas de interés común.</p>
						</div>
					</div>
					<div class="timeline__event">
						<div class="timeline__event__photo">
							<img src="../../_images/about/history/charis94-image3.jpg" alt="">
							<p class="caption">Los delegados de Charis conversando acerca de temas de interés común.</p>		
						</div>
						<div class="timeline__event__photo">
							<img src="../../_images/about/history/charis94-image4.jpg" alt="">
							<p class="caption">Los participantes del Encuentro de Charis en 1994.</p>
						</div>
					</div>
				</div>
				<!-- <div class="row">
					<div class="timeline__dot timeline__dot--country" data-dot="CA"></div>
					<div class="timeline__event">
						<h2>1996: Canada</h2>
						<div class="timeline__event__photo">
							<img src="http://via.placeholder.com/500x284?text=Photo+to+come" alt="">
						</div>
						<div class="timeline__event__photo">
							<img src="http://via.placeholder.com/500x284?text=Photo+to+come" alt="">
						</div>
					</div>
				</div> -->
				<div class="row">
					<div class="timeline__dot"></div>
					<div class="timeline__event">
						<h2>1996: Encuentro de Charis en Toronto,&nbsp;Canadá</h2>
						<div class="timeline__event__photo">
							<img src="../../_images/about/history/charis96-image1.jpg" alt="">
							<p class="caption">Los delegados internacionales y miembros de Encompass llegan al Encuentro de Charis en 1996.</p>		
						</div>
						<div class="timeline__event__photo">
							<img src="../../_images/about/history/charis96-image2.jpg" alt="">
							<p class="caption">Los participantes del Encuentro de Charis en 1996.</p>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="timeline__dot timeline__dot--country" data-dot="KH"></div>
					<div class="timeline__event">
						<h2>1997: Camboya</h2>
						<div class="timeline__event__photo">
							<img src="../../_images/about/history/cambodia-image2.jpg" alt="">
							<p class="caption">El ministerio en Camboya comenzó a través de la asociación entre Vek Huong Taing y la Misión Internacional de los Hermanos por Gracia.</p>
						</div>
						<div class="timeline__event__photo">
							<img src="../../_images/about/history/cambodia-image1.jpg" alt="">
							<p class="caption">El alcance se extendió a ciudades más grandes y a las poblaciones de sus alrededores.</p>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="timeline__dot timeline__dot--country" data-dot="CL"></div>
					<div class="timeline__event">
						<h2>1998: Chile</h2>
						<div class="timeline__event__photo">
							<img src="../../_images/about/history/chile-image1.jpg" alt="">
							<p class="caption">El equipo misionero en Curicó, Chile. Año 2006.</p>
						</div>
						<div class="timeline__event__photo">
							<img src="../../_images/about/history/chile-image2.jpg" alt="">
							<p class="caption">Reuniones en hogares. Año 2006.</p>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="timeline__dot timeline__dot--lastTrigger"></div>
					<div class="timeline__event">
						<h2>1999: Encuentro de Charis en Carlos Paz,&nbsp;Argentina</h2>
						<div class="timeline__event__photo">
							<img src="../../_images/about/history/charis99-image1.jpg" alt="">
							<p class="caption">Los participantes del Encuentro de Charis en 1999.</p>
						</div>
						<div class="timeline__event__photo">
							<img src="../../_images/about/history/charis99-image2.jpg" alt="">
							<p class="caption">Delegados de América Latina y de África en el Encuentro de Charis de&nbsp;1999.</p>		
						</div>
					</div>
				</div>
				<div class="row">
					<div class="timeline__decade timeline__decade--7">2000</div>
				</div>
				<div class="row">
					<div class="timeline__dot timeline__dot--country" data-dot="IE"></div>
					<div class="timeline__event">
						<h2>2002: Irlanda</h2>
						<div class="timeline__event__photo">
							<img src="../../_images/about/history/ireland-image1.jpg" alt="">
							<p class="caption">Iglesia Crossroads de Dublín.</p>
						</div>
						<div class="timeline__event__photo">
							<img src="../../_images/about/history/ireland-image2.jpg" alt="">
							<p class="caption">Personas interesadas en investigar acerca del evangelio se reúnen  en un café de Dublin, para participar en grupos de discusión.</p>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="timeline__dot timeline__dot--country" data-dot="CM"></div>
					<div class="timeline__event">
						<h2>2003: Camerún</h2>
						<div class="timeline__event__photo">
							<img src="../../_images/about/history/cameroon-image1.jpg" alt="">
							<p class="caption">Evangelista Delphy Wilingang y estudiantes de la Escuela de evangelismo en Toubouro, al norte de Camerún.</p>
						</div>
						<div class="timeline__event__photo">
							<img src="../../_images/about/history/cameroon-image2.jpg" alt="">
							<p class="caption">Un grupo de la iglesia de Santa Bárbara, Yaounde, construye un puente como una forma de alcanzar a su&nbsp;comunidad.</p>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="timeline__dot timeline__dot--country" data-dot="NG"></div>
					<div class="timeline__event">
						<h2>2006: Nigeria</h2>
						<div class="timeline__event__photo">
							<img src="../../_images/about/history/nigeria-image1.jpg" alt="">
							<p class="caption">El president de las iglesias, Enoch Kolarambaye, y el evangelista Clison Djendode, junto a estudiantes de la escuela de evangelismo.</p>
						</div>
						<div class="timeline__event__photo">
							<img src="../../_images/about/history/nigeria-image2.jpg" alt="">
							<p class="caption">Conferencia de Mujeres en Nigeria, 2017.</p>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="timeline__dot"></div>
					<div class="timeline__event">
						<h2>2008: Encuentro de Charis en Bad Homburg,&nbsp;Alemania</h2>
						<div class="timeline__event__photo">
							<img src="../../_images/about/history/charis08-image1.jpg" alt="">
							<p class="caption">Los participantes del Encuentro de Liderazgo de Charis 2008.</p>		
						</div>
						<div class="timeline__event__photo">
							<img src="../../_images/about/history/charis08-image2.jpg" alt="">
							<p class="caption">El tema del encuentro fue: “Fieles administradores de la gracia de Dios”, basado en I Pedro 4:10.</p>
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
							<p class="caption">Líderes de la Alianza de Charis de Las Bahamas firmando&nbsp;documentos.</p>
						</div>
						<div class="timeline__event__photo">
							<img src="../../_images/about/history/bahamas-image2.jpg" alt="">
							<p class="caption">Pastores y lideres celebran la formación de la Alianza de Charis en Las Bahamas.</p>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="timeline__decade timeline__decade--8">2010</div>
				</div>
				<div class="row">
					<div class="timeline__dot"></div>
					<div class="timeline__event">
						<h2>2010: Encuentro de Charis en Saint-Albain,&nbsp;Francia.</h2>
						<div class="timeline__event__photo">
							<img src="../../_images/about/history/charis10-image1.jpg" alt="">
							<p class="caption">Participantes del Encuentro de Charis 2010.</p>		
						</div>
						<div class="timeline__event__photo">
							<img src="../../_images/about/history/charis10-image2.jpg" alt="">
							<p class="caption">Miembros del Comité Directivo de Charis.</p>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="timeline__dot"></div>
					<div class="timeline__event">
						<h2>2015: Encuentro de Charis en Bangkok,&nbsp;Tailandia.</h2>
						<div class="timeline__event__photo">
							<img src="../../_images/about/history/charis15-image1.jpg" alt="">
							<p class="caption">Los participantes del Encuentro Internacional de Liderazgo de Charis 2015.</p>		
						</div>
						<div class="timeline__event__photo">
							<img src="../../_images/about/history/charis15-image2.jpg" alt="">
							<p class="caption">Los delegados discuten acerca del Compromiso de Charis a la Identidad Común.</p>
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
			<h1>La Alianza de Charis</h1>
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