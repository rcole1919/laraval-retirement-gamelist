const mix = require('laravel-mix');
const env = process.env.APP_URL;
const SVGSpritemapPlugin = require('svg-spritemap-webpack-plugin');
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
    .js('resources/js/demo.js', 'public/js')
    .postCss('resources/css/style.css', 'public/css', [
        require('postcss-custom-properties'),
        require('autoprefixer'),
        require('postcss-nested'),
        require('postcss-simple-vars')
    ])
    .webpackConfig({
        plugins: [
            new SVGSpritemapPlugin(
                'resources/icon/*.svg',
                {
                    output: {
                        filename: '../resources/views/icons.blade.php',
                        chunk: {
                            keep: true, // Включаем, чтобы при сборке не было ошибок из-за отсутствия spritemap.js
                        },
                    },
                    sprite: {
                        prefix: 'icon-', // Префикс для id иконок в спрайте, будет иметь вид 'icon-имя_файла_с_иконкой'
                        generate: {
                            title: false, // Не добавляем в спрайт теги <title>
                        }
                    }
                }
            )
        ]
    })
    .version();

mix.browserSync(env);
