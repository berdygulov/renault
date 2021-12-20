module.exports = {
	purge: [
		'./storage/framework/views/*.php',
		'./resources/**/*.blade.php',
		'./resources/**/*.js',
		'./resources/**/*.vue',
	],
	content: [],
	theme: {
		container: {
			center: true,
			padding: '1rem'
		},
		extend: {
			colors: {
				renault: {
					black: '#000',
					yellow: '#efdf00'
				}
			}
		},
	},
	plugins: [],
}
