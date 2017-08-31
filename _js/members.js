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
			countries: 4,
			churches: 'XXX',
		},
		{
			country: "Cameroon",
			status: "Charis Charter Member",
			delegates: 'X',
			churches: 'XXX'
		},
		{
			country: "The Central African Republic",
			status: "Charis Charter Member",
			delegates: 'X',
			churches: 'XXX'
		},
		{
			country: "Nigeria",
			status: "Charis Charter Member",
			delegates: 'X',
			churches: 'XXX'
		},
		{
			country: "Chad",  //TD
			status: "Charis Charter Member",
			delegates: 'X',
			churches: 'XXX'
		},
	],
	asia: [
		{
			continent: 'Asia',
			countries: 3,
			churches: 'XXX',
		},
		{
			country: "Japan",
			status: "Charis Observer Member",
			delegates: 'X',
			churches: 'XXX'
		},
		{
			country: "Cambodia", //KH
			status: "Charis Charter Member",
			delegates: 'X',
			churches: 'XXX'
		},
		{
			country: "The Philippines",
			status: "Charis Charter Member",
			delegates: 'X',
			churches: 'XXX'
		},
	],
	caribbean: [
		{
			continent: 'The Caribbean',
			countries: 1,
			churches: 'XXX',
		},
		{
			country: "The Bahamas",
			status: "Charis Charter Member",
			delegates: 'X',
			churches: 'XXX'
		}
	],
	europe: [
		{
			continent: 'Europe',
			countries: 4,
			churches: 'XXX',
		},
		{
			country: "Germany",  //DE
			status: "Charis Observer Member",
			delegates: 'X',
			churches: 'XXX'
		},
		{
			country: "France",
			status: "Charis Charter Member",
			delegates: 'X',
			churches: 'XXX'
		},
		{
			country: "Great Britain",
			status: "Charis Observer Member",
			delegates: 'X',
			churches: 'XXX'
		},
		{
			country: "Ireland",
			status: "Charis Observer Member",
			delegates: 'X',
			churches: 'XXX'
		}
	],
	northAmerica: [
		{
			continent: 'North America',
			countries: 4,
			churches: 'XXX',
		},
		{
			country: "Canada",
			status: "Charis Charter Member",
			delegates: 'X',
			churches: 'XXX'
		},
		{
			country: "Guatemala",
			status: "Charis Observer Member",
			delegates: 'X',
			churches: 'XXX'
		},
		{
			country: "Mexico",
			status: "Charis Charter Member",
			delegates: 'X',
			churches: 'XXX'
		},
		{
			country: "The United States",
			status: "Charis Charter Member",
			delegates: 'X',
			churches: 'XXX'
		}
	],
	southAmerica: [
		{
			continent: 'South America',
			countries: 4,
			churches: 'XXX',
		},
		{
			country: "Argentina",
			status: "Charis Charter Member",
			delegates: 'X',
			churches: 'XXX'
		},
		{
			country: "Brazil",
			status: "Charis Charter Member",
			delegates: 'X',
			churches: 'XXX'
		},
		{
			country: "Chile",
			status: "Charis Observer Member",
			delegates: 'X',
			churches: 'XXX'
		},
		{
			country: "Uruguay",
			status: "Charis Observer Member",
			delegates: 'X',
			churches: 'XXX'
		}
	]
}