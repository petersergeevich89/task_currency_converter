const mix = require('laravel-mix');

/*
 |--------------------------------------------------------------------------
 | Mix Asset Management
 |--------------------------------------------------------------------------
mix.js('resources/js/app.js', 'public/js').postCss('resources/css/app.css', 'public/css', [
    require('postcss-import'),
    require('tailwindcss'),
    require('autoprefixer'),
]);



mix.js('resources/js/app.js', 'public/js')
    .postCss([
            'resources/css/app1.css',
            'resources/css/app2.css'
        ],
        'public/css/app.css', [
            require('postcss-import'),
            require('tailwindcss'),
            require('autoprefixer'),
        ]);



 */


mix.js('resources/js/app.js', 'public/js')
    .styles([
            'resources/css/app.css',
            'resources/css/bootstrap.min.css',
        ],
        'public/css/app.css'
        );


