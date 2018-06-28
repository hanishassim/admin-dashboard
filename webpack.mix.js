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

mix.js('resources/assets/js/app.js', 'public/js')
    .sass('resources/assets/sass/app.scss', 'public/css')
    .js('resources/assets/js/font-awesome.js', 'public/js');

// mix.sass('resources/assets/sass/app.sass', 'public/css')
//     .sass('resources/assets/sass/admin.sass', 'public/css/admin');

// Mix styles into one single css
// mix.styles([
//     'public/css/vendor/normalize.css',
//     'public/css/vendor/videojs.css'
// ], 'public/css/all.css');

// Mix scripts into one single js
// mix.scripts([
//     'public/js/admin.js',
//     'public/js/dashboard.js'
// ], 'public/js/all.js');

// versioning/ cache busting process & mix notification to only run during production
if (mix.inProduction()) {
    mix.version().disableNotifications();
} else {
    // For development use - provide extra debugging information to your browser's developer tools when using compiled assets
    mix.sourceMaps();

    // For browsersync
    mix.browserSync({
        proxy: 'localhost:8000',
        scrollRestoreTechnique: 'cookie', //maintain/restore scroll position on reload
        files: [ //only update certain files e.g. blade views only
            'resources/views/**/*.blade.php'
        ]
    });
}