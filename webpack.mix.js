let mix = require('laravel-mix')

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

mix.sourceMaps()
    .js('resources/js/app.js', 'public/js')
    .stylus('resources/stylus/app.styl', 'public/css', {
        use: [
            require('rupture')()
        ]
    })
    .disableNotifications()

mix.browserSync({
    notify: false,
    proxy: 'https://lit-shelf-43160.herokuapp.com/'
})

mix.webpackConfig({
    devtool: "source-map"
})

if (mix.inProduction()) {
    mix.version()
}
