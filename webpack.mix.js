let mix = require('laravel-mix');

/*
 |--------------------------------------------------------------------------
 | Mix Asset Management
 |--------------------------------------------------------------------------
 |
 | Mix provides a clean, fluent API for defining some Webpack build steps
 | for your Laravel application. By default, we are compiling the Sass
 | file for the application as well as bundling up all the JS files.
 |
 */

   mix.autoload({
    jquery: ['$', 'window.jQuery',"jQuery","window.$","jquery","window.jquery"]
	});

   mix.js([
   			'resources/assets/js/jquery.min.js',
   			'resources/assets/js/bootstrap.min.js',
   			'resources/assets/js/nouislider.min.js',
   			'resources/assets/js/slick.min.js',
   			'resources/assets/js/jquery.zoom.min.js',
   			'resources/assets/js/main.js',
   		], 'public/js/app.js')
   		.extract(['jquery']);

   	mix.styles([
   			'resources/assets/css/bootstrap.min.css',
   			'resources/assets/css/colors.css',
   			'resources/assets/css/font-awesome.min.css',
   			'resources/assets/css/media.css',
   			'resources/assets/css/nouislider.min.css',
   			'resources/assets/css/slick-theme.css',
   			'resources/assets/css/slick.css',
   			'resources/assets/css/style.css',
		], 	'public/css/all.css');
