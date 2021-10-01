const mix = require('laravel-mix');
const env = process.env.APP_URL;
require('laravel-mix-svg-sprite');
/*
 |--------------------------------------------------------------------------
 | Mix Asset Management
 |--------------------------------------------------------------------------
 |
 | Mix provides a clean, fluent API for defining some Webpack build steps
 | for your Laravel applications. By default, we are compiling the CSS
 | file for the application as well as bundling up all the JS files.
 |
 */
if ( ! mix.inProduction()) {
    mix.webpackConfig({
        devtool: 'inline-source-map'
    })
}

mix
    // .copyDirectory('resources/fonts', 'public/fonts')
    // .copyDirectory('resources/images', 'public/images')
    .svgSprite('resources/icon', 'public/sprite.svg')
    .postCss('resources/css/style.css', 'public/css', [
        require('postcss-custom-properties'),
        require('autoprefixer'),
        require('postcss-nested'),
        require('postcss-simple-vars')
    ])
    .version();

mix.browserSync(env);
