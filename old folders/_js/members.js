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
			country: "Cameroon",
			status: "Charis Charter Member",
			delegates: '3 Delegates',
			churches: '190 churches'
		},
		{
			country: "Central African Republic",
			status: "Charis Charter Member",
			delegates: '3 Delegates',
			churches: '2100 churches'
		},

		{
			country: "Democratic Republic of the Congo",
			status: "Charis Observer Member",
			delegates: '1 Delegate',
			churches: '1 church'
		},
		{
			country: "Nigeria",
			status: "Charis Charter Member",
			delegates: '3 Delegates',
			churches: '448 churches'
		},
		{
			country: "Sudan",
			status: "Charis Observer Member",
			delegates: '1 Delegate',
			churches: '1 church'
		},
		{
			country: "Chad",  //TD
			status: "Charis Charter Member",
			delegates: '3 Delegates',
			churches: '800 churches'
		},
	],
	asia: [
		{
			country: "Japan",
			status: "Charis Charter Member",
			delegates: '1 Delegates',
			churches: '3 churches'
		},
		{
			country: "Cambodia", //KH
			status: "Charis Charter Member",
			delegates: '1 Delegates',
			churches: '7 churches'
		},
		{
			country: "The Philippines",
			status: "Charis Charter Member",
			delegates: '1 Delegates',
			churches: '12 churches'
		},
	],
	caribbean: [
		{
			country: "The Bahamas",
			status: "Charis Charter Member",
			delegates: '1 Delegate',
			churches: '8 churches'
		},
		{
			country: "Haiti",
			status: "Charis Charter Member",
			delegates: '2 Delegate',
			churches: '25 churches'
		},
		{
			country: "Trinidad",
			status: "Charis Charter Member",
			delegates: '1 Delegate',
			churches: '5 churches'
		}
	],
	europe: [
		{
			country: "Germany",  //DE
			status: "Charis Observer Member",
			delegates: '1 Delegate',
			churches: '2 churches'
		},
		{
			country: "France",
			status: "Charis Charter Member",
			delegates: '1 Delegate',
			churches: '7 churches'
		},
		{
			country: "Great Britain",
			status: "Charis Observer Member",
			delegates: '1 Delegate',
			churches: '2 churches'
		},
		{
			country: "Portugal",
			status: "Charis Observer Member",
			delegates: '1 Delegate',
			churches: '2 churches'
		}
	],
	northAmerica: [
		{
			country: "Canada",
			status: "Charis Charter Member",
			delegates: '1 Delegate',
			churches: '3 churches'
		},
		{
			country: "Guatemala",
			status: "Charis Observer Member",
			delegates: '1 Delegate',
			churches: '1 church'
		},
		{
			country: "Mexico",
			status: "Charis Charter Member",
			delegates: '2 Delegates',
			churches: '8 churches'
		},
		{
			country: "United States",
			status: "Charis Charter Member",
			delegates: '3 Delegates',
			churches: '245 churches'
		}
	],
	southAmerica: [
		{
			country: "Argentina",
			status: "Charis Charter Member",
			delegates: '2 Delegates',
			churches: '12 churches'
		},
		{
			country: "Brazil",
			status: "Charis Charter Member",
			delegates: '2 Delegates',
			churches: '17 churches'
		},
		{
			country: "Chile",
			status: "Charis Observer Member",
			delegates: '1 Delegate',
			churches: '1 church'
		},
		{
			country: "Uruguay",
			status: "Charis Observer Member",
			delegates: '1 Delegate',
			churches: '1 church'
		}
	]
}