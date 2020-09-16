// Continent Zoooming

var coords = [
	{
		continent: 'africa',
		name: 'Africa',
		scale: 2.75,
		x: -375,
		y: -300,
		buttonTop: $('.map__zoom--AF').css('top'),
		buttonLeft: $('.map__zoom--AF').css('left')
	},
	{
		continent: 'asia',
		name: 'Asia',
		scale: 3.5,
		x: -1200,
		y: -950,
		buttonTop: $('.map__zoom--AS').css('top'),
		buttonLeft: $('.map__zoom--AS').css('left')
	},
	{
		continent: 'caribbean',
		name: 'The Caribbean',
		scale: 8,
		x: -200,
		y: -250,
		buttonTop: $('.map__zoom--CA').css('top'),
		buttonLeft: $('.map__zoom--CA').css('left')
	},
	{
		continent: 'europe',
		name: 'Europe',
		scale: 5,
		x: -600,
		y: -950,
		buttonTop: $('.map__zoom--EU').css('top'),
		buttonLeft: $('.map__zoom--EU').css('left')
	},
	{
		continent: 'northAmerica',
		name: 'North America',
		scale: 2.15,
		x: -100,
		y: -320,
		buttonTop: $('.map__zoom--NA').css('top'),
		buttonLeft: $('.map__zoom--NA').css('left')
	},
	{
		continent: 'southAmerica',
		name: 'South America',
		scale: 2.75,
		x: -200,
		y: -400,
		buttonTop: $('.map__zoom--SA').css('top'),
		buttonLeft: $('.map__zoom--SA').css('left')
	}
]

// Country info

var info = {
	africa: [
		{
			continent: 'Africa',
			continente: 'África',
			continentFr: 'en <br><span class="continent">Afrique'
		},
		{
			country: "Cameroon",
			pais: "Camerún",
			pays: 'au <br><span class="country">Cameroun',
			status: "Charis Charter Member",
			estado: "Miembro Fundador de&nbsp;Charis",
			statut: 'Membre fondateur de&nbsp;Charis',
			churches: 52,
			pointsOfLight: 24
		},
		{
			country: "The Central African Republic",
			pais: "República Centroafricana",
			pays: 'en <br><span class="country">République Centrafricaine',
			status: "Charis Charter Member",
			estado: "Miembro Fundador de&nbsp;Charis",
			statut: 'Membre fondateur de&nbsp;Charis',
			churches: 3060,
			pointsOfLight: 218
		},
		{
			country: "Nigeria",
			pais: "Nigeria",
			pays: 'au <br><span class="country">Nigéria',
			status: "Charis Charter Member",
			estado: "Miembro Fundador de&nbsp;Charis",
			statut: 'Membre fondateur de&nbsp;Charis',
			churches: 6,
			pointsOfLight: 8
		},
		{
			country: "Chad",  //TD
			pais: "Chad",
			pays: 'au <br><span class="country">Tchad',
			status: "Charis Charter Member",
			estado: "Miembro Fundador de&nbsp;Charis",
			statut: 'Membre fondateur de&nbsp;Charis',
			churches: 301,
			pointsOfLight: 115
		},
		{
			country: "Republic of Congo",  //TD
			pais: "República del Congo",
			pays: 'en <br><span class="country">République du Congo',
			status: "Charis Charter Member",
			estado: "Miembro Fundador de&nbsp;Charis",
			statut: 'Membre fondateur de&nbsp;Charis',
			churches: 4,
			pointsOfLight: 0
		},
		{
			country: "Sudan",  //TD
			pais: "Sudán",
			pays: 'au <br><span class="country">Soudan',
			status: "Charis Charter Member",
			estado: "Miembro Fundador de&nbsp;Charis",
			statut: 'Membre fondateur de&nbsp;Charis',
			churches: 5,
			pointsOfLight: 22
		},
	],
	asia: [
		{
			continent: 'Asia',
			continente: 'Asia',
			continentFr: 'en <br><span class="continent">Asie'
		},
		{
			country: "Japan",
			pais: "Japón",
			pays: 'au <br><span class="country">Japon',
			status: "Charis Observer Member",
			estado: "Miembro Observador",
			statut: 'Membre Observateur Charis',
			churches: 2,
			pointsOfLight: 1
		},
		{
			country: "Cambodia", //KH
			pais: "Camboya",
			pays: 'au <br><span class="country">Cambodge',
			status: "Charis Charter Member",
			estado: "Miembro Fundador de&nbsp;Charis",
			statut: 'Membre fondateur de&nbsp;Charis',
			churches: 3,
			pointsOfLight: 4
		},
		{
			country: "The Philippines",
			pais: "Filipinas",
			pays: 'aux <br><span class="country">Philippines',
			status: "Charis Charter Member",
			estado: "Miembro Fundador de&nbsp;Charis",
			statut: 'Membre fondateur de&nbsp;Charis',
			churches: 5,
			pointsOfLight: 4
		},
	],
	caribbean: [
		{
			continent: 'The Caribbean',
			continente: 'El Caribe',
			continentFr: 'aux <br><span class="continent">Caraïbes'
		},
		{
			country: "The Bahamas",
			pais: "Bahamas",
			pays: 'aux <br><span class="country">Bahamas',
			status: "Charis Charter Member",
			estado: "Miembro Fundador de&nbsp;Charis",
			statut: 'Membre fondateur de&nbsp;Charis',
			churches: 3,
			pointsOfLight: 3
		},
		{
			country: "Haiti",
			pais: "Haití",
			pays: 'en <br><span class="country">Haïti',
			status: "Charis Charter Member",
			estado: "Miembro Fundador de&nbsp;Charis",
			statut: 'Membre fondateur de&nbsp;Charis',
			churches: 70,
			pointsOfLight: 0
		}
	],
	europe: [
		{
			continent: 'Europe',
			continente: 'Europa',
			continentFr: 'en <br><span class="continent">Europe'
		},
		{
			country: "Germany",  //DE
			pais: "Alemania",
			pays: 'en <br><span class="country">Allemagne',
			status: "Charis Observer Member",
			estado: "Miembro Observador",
			statut: 'Membre Observateur Charis',
			churches: 1,
			pointsOfLight: 0
		},
		{
			country: "France",
			pais: "Francia",
			pays: 'en <br><span class="country">France',
			status: "Charis Charter Member",
			estado: "Miembro Fundador de&nbsp;Charis",
			statut: 'Membre fondateur de&nbsp;Charis',
			churches: 7,
			pointsOfLight: 2
		},
		{
			country: "The United Kingdom",
			pais: "Reino Unido",
			pays: 'au <br><span class="country">Royaume-Uni',
			status: "Charis Observer Member",
			estado: "Miembro Observador",
			statut: 'Membre Observateur Charis',
			churches: 2,
			pointsOfLight: 0
		},
		{
			country: "Poland",
			pais: "Polonia",
			pays: 'en <br><span class="country">Pologne',
			status: "Charis Observer Member",
			estado: "Miembro Observador",
			statut: 'Membre Observateur Charis',
			churches: 1,
			pointsOfLight: 0
		},
		{
			country: "Portugal",
			pais: "Portugal",
			pays: 'au <br><span class="country">Portugal',
			status: "Charis Observer Member",
			estado: "Miembro Observador",
			statut: 'Membre Observateur Charis',
			churches: 1,
			pointsOfLight: 1
		},
	],
	northAmerica: [
		{
			continent: 'North America',
			continente: 'América del Norte',
			continentFr: 'en <br><span class="continent">Amérique du&nbsp;Nord'
		},
		{
			country: "Canada",
			pais: "Canadá",
			pays: 'au <br><span class="country">Canada',
			status: "Charis Charter Member",
			estado: "Miembro Fundador de&nbsp;Charis",
			statut: 'Membre fondateur de&nbsp;Charis',
			churches: 4,
			pointsOfLight: 0
		},
		{
			country: "Mexico",
			pais: "México",
			pays: 'au <br><span class="country">Mexique',
			status: "Charis Charter Member",
			estado: "Miembro Fundador de&nbsp;Charis",
			statut: 'Membre fondateur de&nbsp;Charis',
			churches: 25,
			pointsOfLight: 23
		},
		{
			country: "The United States",
			pais: "Estados Unidos",
			pays: 'aux <br><span class="country">États-Unis',
			status: "Charis Charter Member",
			estado: "Miembro Fundador de&nbsp;Charis",
			statut: 'Membre fondateur de&nbsp;Charis',
			churches: 231,
			pointsOfLight: 0
		}
	],
	southAmerica: [
		{
			continent: 'South America',
			continente: 'América del Sur',
			continentFr: 'en <br><span class="continent">Amérique du&nbsp;Sud'
		},
		{
			country: "Argentina",
			pais: "Argentina",
			pays: 'en <br><span class="country">Argentine',
			status: "Charis Charter Member",
			estado: "Miembro Fundador de&nbsp;Charis",
			statut: 'Membre fondateur de&nbsp;Charis',
			churches: 14,
			pointsOfLight: 18
		},
		{
			country: "Brazil",
			pais: "Brasil",
			pays: 'au <br><span class="country">Brésil',
			status: "Charis Charter Member",
			estado: "Miembro Fundador de&nbsp;Charis",
			statut: 'Membre fondateur de&nbsp;Charis',
			churches: 32,
			pointsOfLight: 26
		},
		{
			country: "Chile",
			pais: "Chile",
			pays: 'au <br><span class="country">Chili',
			status: "Charis Observer Member",
			estado: "Miembro Observador",
			statut: 'Membre Observateur Charis',
			churches: 1,
			pointsOfLight: 0
		},
		{
			country: "Uruguay",
			pais: "Uruguay",
			pays: 'en <br><span class="country">Uruguay',
			status: "Charis Observer Member",
			estado: "Miembro Observador",
			statut: 'Membre Observateur Charis',
			churches: 1,
			pointsOfLight: 5
		}
	]
}