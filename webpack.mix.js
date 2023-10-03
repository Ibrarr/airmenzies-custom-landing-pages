let mix = require('laravel-mix');

mix.js('src/js/app.js', 'dist/js').setPublicPath('dist');
mix.sass('src/css/app.scss', 'dist/css').setPublicPath('dist');

mix.copy('node_modules/@splidejs/splide/dist/js/splide.js', 'dist/js/splide.js');
mix.copy('node_modules/@splidejs/splide/dist/css/splide.min.css', 'dist/css/splide.css');

mix.options({
    postCss: [
        require('autoprefixer')({
            overrideBrowserslist: ['last 3 versions'],
            cascade: false
        })
    ]
});

mix.disableNotifications();