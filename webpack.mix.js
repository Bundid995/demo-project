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
    proxy: 'https://127.0.0.1:8000'
})

mix.webpackConfig({
    devtool: "source-map"
})

if (mix.inProduction()) {
    mix.version()
}
