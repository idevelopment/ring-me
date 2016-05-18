var elixir = require('laravel-elixir');

/*
 |--------------------------------------------------------------------------
 | Elixir Asset Management
 |--------------------------------------------------------------------------
 |
 | Elixir provides a clean, fluent API for defining some basic Gulp tasks
 | for your Laravel application. By default, we are compiling the Sass
 | file for our application, as well as publishing vendor resources.
 |
 */

var pathcss   = '';
var pathJs    = '';
var node      = '../../../node_modules';

elixir(function(mix) {
    // Compoile the theme css
    mix.sass('app.scss')

        // BrowserSync
        .browserSync()

    // Bootstrap
    .less(node + '/bootstrap/less/bootstrap.less', 'public/css/bootstrap.css')
        .scripts(node + '/bootstrap/dist/js/bootstrap.js', 'public/js/bootstrap.js')
        .copy([
            'node_modules/bootstrap/fonts/glyphicons-halflings-regular.eot',
            'node_modules/bootstrap/fonts/glyphicons-halflings-regular.svg',
            'node_modules/bootstrap/fonts/glyphicons-halflings-regular.ttf',
            'node_modules/bootstrap/fonts/glyphicons-halflings-regular.woff',
            'node_modules/bootstrap/fonts/glyphicons-halflings-regular.woff2'
        ], 'public/fonts')

    // Font awesome
    .sass(node + '/font-awesome/scss/font-awesome.scss')
        .copy([
            'node_modules/font-awesome/fonts/FontAwesome.otf',
            'node_modules/font-awesome/fonts/fontawesome-webfont.eot',
            'node_modules/font-awesome/fonts/fontawesome-webfont.svg',
            'node_modules/font-awesome/fonts/fontawesome-webfont.ttf',
            'node_modules/font-awesome/fonts/fontawesome-webfont.woff',
            'node_modules/font-awesome/fonts/fontawesome-webfont.woff2'
        ],  'public/fonts')

    // Vue
    .scripts([
        node + '/vue/dist/vue.js',
        node + '/vue-resource/dist/vue-resource.js'
    ], 'public/js/vue.js');
});
