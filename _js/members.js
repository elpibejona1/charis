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
			continente: 'África'
		},
		{
			country: "Cameroon",
			pais: "Camerún",
			status: "Charis Charter Member",
			estado: "Miembro de la Alianza",
			churches: 49,
			pointsOfLight: 37
		},
		{
			country: "The Central African Republic",
			pais: "República Centroafricana",
			status: "Charis Charter Member",
			estado: "Miembro de la Alianza",
			churches: 2965,
			pointsOfLight: 384
		},
		{
			country: "Nigeria",
			pais: "Nigeria",
			status: "Charis Charter Member",
			estado: "Miembro de la Alianza",
			churches: 0,
			pointsOfLight: 0
		},
		{
			country: "Chad",  //TD
			pais: "Chad",
			status: "Charis Charter Member",
			estado: "Miembro de la Alianza",
			churches: 249,
			pointsOfLight: 283
		},
	],
	asia: [
		{
			continent: 'Asia',
			continente: 'Asia'
		},
		{
			country: "Japan",
			pais: "Japón",
			status: "Charis Observer Member",
			estado: "Miembro Observador",
			churches: 2,
			pointsOfLight: 0
		},
		{
			country: "Cambodia", //KH
			pais: "Camboya",
			status: "Charis Charter Member",
			estado: "Miembro de la Alianza",
			churches: 4,
			pointsOfLight: 4
		},
		{
			country: "The Philippines",
			pais: "Filipinas",
			status: "Charis Charter Member",
			estado: "Miembro de la Alianza",
			churches: 10,
			pointsOfLight: 6
		},
	],
	caribbean: [
		{
			continent: 'The Caribbean',
			continente: 'El Caribe'
		},
		{
			country: "The Bahamas",
			pais: "Bahamas",
			status: "Charis Charter Member",
			estado: "Miembro de la Alianza",
			churches: 5,
			pointsOfLight: 0
		}
	],
	europe: [
		{
			continent: 'Europe',
			continente: 'Europa'
		},
		{
			country: "Germany",  //DE
			pais: "Alemania",
			status: "Charis Observer Member",
			estado: "Miembro Observador",
			churches: 3,
			pointsOfLight: 1
		},
		{
			country: "France",
			pais: "Francia",
			status: "Charis Charter Member",
			estado: "Miembro de la Alianza",
			estado: "Miembro Observador",
			churches: 7,
			pointsOfLight: 5
		},
		{
			country: "The United Kingdom",
			pais: "Reino Unido",
			status: "Charis Observer Member",
			estado: "Miembro Observador",
			churches: 0,
			pointsOfLight: 0
		},
		{
			country: "Ireland",
			pais: "Irlanda",
			status: "Charis Observer Member",
			estado: "Miembro Observador",
			churches: 1,
			pointsOfLight: 0
		}
	],
	northAmerica: [
		{
			continent: 'North America',
			continente: 'América del Norte'
		},
		{
			country: "Canada",
			pais: "Canadá",
			status: "Charis Charter Member",
			estado: "Miembro de la Alianza",
			churches: 4,
			pointsOfLight: 1
		},
		{
			country: "Guatemala",
			pais: "Guatemala",
			status: "Charis Observer Member",
			estado: "Miembro Observador",
			churches: 1,
			pointsOfLight: 0
		},
		{
			country: "Mexico",
			pais: "México",
			status: "Charis Charter Member",
			estado: "Miembro de la Alianza",
			churches: 30,
			pointsOfLight: 15
		},
		{
			country: "The United States",
			pais: "Estados Unidos",
			status: "Charis Charter Member",
			estado: "Miembro de la Alianza",
			churches: 238,
			pointsOfLight: 0
		}
	],
	southAmerica: [
		{
			continent: 'South America',
			continente: 'América del Sur'
		},
		{
			country: "Argentina",
			pais: "Argentina",
			status: "Charis Charter Member",
			estado: "Miembro de la Alianza",
			churches: 18,
			pointsOfLight: 4
		},
		{
			country: "Brazil",
			pais: "Brasil",
			status: "Charis Charter Member",
			estado: "Miembro de la Alianza",
			churches: 33,
			pointsOfLight: 29
		},
		{
			country: "Chile",
			pais: "Chile",
			status: "Charis Observer Member",
			estado: "Miembro Observador",
			churches: 1,
			pointsOfLight: 1
		},
		{
			country: "Uruguay",
			pais: "Uruguay",
			status: "Charis Observer Member",
			estado: "Miembro Observador",
			churches: 1,
			pointsOfLight: 1
		}
	]
}