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
			countries: 6,
			churches: 2500,
		},
		{
			country: "Cameroon",
			status: "Charis Charter Member",
			delegates: 3,
			churches: 190
		},
		{
			country: "Central African Republic",
			status: "Charis Charter Member",
			delegates: 3,
			churches: 2100
		},

		{
			country: "Democratic Republic of the Congo",
			status: "Charis Observer Member",
			delegates: 1,
			churches: 1
		},
		{
			country: "Nigeria",
			status: "Charis Charter Member",
			delegates: 3,
			churches: 448
		},
		{
			country: "Sudan",
			status: "Charis Observer Member",
			delegates: 1,
			churches: 1
		},
		{
			country: "Chad",  //TD
			status: "Charis Charter Member",
			delegates: 3,
			churches: 800
		},
	],
	asia: [
		{
			continent: 'Asia',
			countries: 3,
			churches: 50,
		},
		{
			country: "Japan",
			status: "Charis Charter Member",
			delegates: 1,
			churches: 3
		},
		{
			country: "Cambodia", //KH
			status: "Charis Charter Member",
			delegates: 1,
			churches: 7
		},
		{
			country: "The Philippines",
			status: "Charis Charter Member",
			delegates: 1,
			churches: 12
		},
	],
	caribbean: [
		{
			continent: 'The Caribbean',
			countries: 3,
			churches: 250,
		},
		{
			country: "The Bahamas",
			status: "Charis Charter Member",
			delegates: 1,
			churches: 8
		},
		{
			country: "Haiti",
			status: "Charis Charter Member",
			delegates: 2,
			churches: 25
		},
		{
			country: "Trinidad",
			status: "Charis Charter Member",
			delegates: 1,
			churches: 5
		}
	],
	europe: [
		{
			continent: 'Europe',
			countries: 4,
			churches: 25,
		},
		{
			country: "Germany",  //DE
			status: "Charis Observer Member",
			delegates: 1,
			churches: 2
		},
		{
			country: "France",
			status: "Charis Charter Member",
			delegates: 1,
			churches: 7
		},
		{
			country: "Great Britain",
			status: "Charis Observer Member",
			delegates: 1,
			churches: 2
		},
		{
			country: "Portugal",
			status: "Charis Observer Member",
			delegates: 1,
			churches: 2
		}
	],
	northAmerica: [
		{
			continent: 'North America',
			countries: 4,
			churches: 400,
		},
		{
			country: "Canada",
			status: "Charis Charter Member",
			delegates: 1,
			churches: 3
		},
		{
			country: "Guatemala",
			status: "Charis Observer Member",
			delegates: 1,
			churches: 1
		},
		{
			country: "Mexico",
			status: "Charis Charter Member",
			delegates: 2,
			churches: 8
		},
		{
			country: "United States",
			status: "Charis Charter Member",
			delegates: 3,
			churches: 245
		}
	],
	southAmerica: [
		{
			continent: 'South America',
			countries: 4,
			churches: 45,
		},
		{
			country: "Argentina",
			status: "Charis Charter Member",
			delegates: 2,
			churches: 12
		},
		{
			country: "Brazil",
			status: "Charis Charter Member",
			delegates: 2,
			churches: 17
		},
		{
			country: "Chile",
			status: "Charis Observer Member",
			delegates: 1,
			churches: 1
		},
		{
			country: "Uruguay",
			status: "Charis Observer Member",
			delegates: 1,
			churches: 1
		}
	]
}