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
			countries: 4,
			churches: 'XXX',
			pointsOfLight: 'X'
		},
		{
			country: "Cameroon",
			status: "Charis Charter Member",
			estado: "Miembro de la Alianza",
			pointsOfLight: 'X',
			churches: 'XXX'
		},
		{
			country: "The Central African Republic",
			status: "Charis Charter Member",
			estado: "Miembro de la Alianza",
			pointsOfLight: 'X',
			churches: 'XXX'
		},
		{
			country: "Nigeria",
			status: "Charis Charter Member",
			estado: "Miembro de la Alianza",
			pointsOfLight: 'X',
			churches: 'XXX'
		},
		{
			country: "Chad",  //TD
			status: "Charis Charter Member",
			estado: "Miembro de la Alianza",
			pointsOfLight: 'X',
			churches: 'XXX'
		},
	],
	asia: [
		{
			continent: 'Asia',
			continente: 'Asia',
			countries: 3,
			churches: 'XXX',
			pointsOfLight: 'X'
		},
		{
			country: "Japan",
			status: "Charis Observer Member",
			estado: "Miembro Observador",
			pointsOfLight: 'X',
			churches: 'XXX'
		},
		{
			country: "Cambodia", //KH
			status: "Charis Charter Member",
			estado: "Miembro de la Alianza",
			pointsOfLight: 'X',
			churches: 'XXX'
		},
		{
			country: "The Philippines",
			status: "Charis Charter Member",
			estado: "Miembro de la Alianza",
			pointsOfLight: 'X',
			churches: 'XXX'
		},
	],
	caribbean: [
		{
			continent: 'The Caribbean',
			continente: 'El Caribe',
			countries: 1,
			churches: 'XXX',
			pointsOfLight: 'X'
		},
		{
			country: "The Bahamas",
			status: "Charis Charter Member",
			estado: "Miembro de la Alianza",
			pointsOfLight: '',
			churches: 5
		}
	],
	europe: [
		{
			continent: 'Europe',
			continente: 'Europa',
			countries: 4,
			churches: 'XXX',
			pointsOfLight: 'X'
		},
		{
			country: "Germany",  //DE
			status: "Charis Observer Member",
			estado: "Miembro Observador",
			pointsOfLight: 1,
			churches: 3
		},
		{
			country: "France",
			status: "Charis Charter Member",
			estado: "Miembro de la Alianza",
			estado: "Miembro Observador",
			pointsOfLight: 5,
			churches: 7
		},
		{
			country: "Great Britain",
			status: "Charis Observer Member",
			estado: "Miembro Observador",
			pointsOfLight: 'X',
			churches: 'XXX'
		},
		{
			country: "Ireland",
			status: "Charis Observer Member",
			estado: "Miembro Observador",
			pointsOfLight: '',
			churches: 1
		}
	],
	northAmerica: [
		{
			continent: 'North America',
			continente: 'América del Norte',
			countries: 4,
			churches: 'XXX',
			pointsOfLight: 'X'
		},
		{
			country: "Canada",
			status: "Charis Charter Member",
			estado: "Miembro de la Alianza",
			pointsOfLight: 1,
			churches: 4
		},
		{
			country: "Guatemala",
			status: "Charis Observer Member",
			estado: "Miembro Observador",
			pointsOfLight: 'X',
			churches: 'XXX'
		},
		{
			country: "Mexico",
			status: "Charis Charter Member",
			estado: "Miembro de la Alianza",
			pointsOfLight: 'X',
			churches: 'XXX'
		},
		{
			country: "The United States",
			status: "Charis Charter Member",
			estado: "Miembro de la Alianza",
			pointsOfLight: '',
			churches: 238
		}
	],
	southAmerica: [
		{
			continent: 'South America',
			continente: 'América del Sur',
			countries: 4,
			churches: 'XXX',
			pointsOfLight: 'X'
		},
		{
			country: "Argentina",
			status: "Charis Charter Member",
			estado: "Miembro de la Alianza",
			pointsOfLight: 4,
			churches: 18
		},
		{
			country: "Brazil",
			status: "Charis Charter Member",
			estado: "Miembro de la Alianza",
			pointsOfLight: 'X',
			churches: 'XXX'
		},
		{
			country: "Chile",
			status: "Charis Observer Member",
			estado: "Miembro Observador",
			pointsOfLight: 1,
			churches: 1
		},
		{
			country: "Uruguay",
			status: "Charis Observer Member",
			estado: "Miembro Observador",
			pointsOfLight: 1,
			churches: 1
		}
	]
}