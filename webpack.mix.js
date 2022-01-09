const mix = require('laravel-mix');
const JavaScriptObfuscator = require('webpack-obfuscator');

mix.webpackConfig({
    plugins: [
        new JavaScriptObfuscator ({
            rotateUnicodeArray: true
        }, ['excluded_bundle_name.js'])
    ],
});

mix
    .js('resources/js/app.js', 'public/js')
    .postCss('resources/css/app.css', 'public/css', [
        require('postcss-import'),
        require('tailwindcss'),
        require('autoprefixer'),
    ]);
