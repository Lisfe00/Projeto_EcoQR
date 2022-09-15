// webpack.mix.js

let mix = require('laravel-mix');

mix.scripts([
    'resources/assets/js/script.js'
], 'public/assets/js/scripts.js').version();

mix.copyDirectory('resources/assets/img', 'public/assets/images');