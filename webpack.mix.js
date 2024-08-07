let mix = require('laravel-mix');

mix.js([
    'assets/js/form.js',
], 'js/app.js');

mix.js([
    'assets/js/testimonial-slider.js',
], 'js/testimonial.js');

mix.sass('assets/css/app.scss', 'css/app.css')
    .options({
        processCssUrls: false
    });

mix.setPublicPath('dist');

mix.options({
    postCss: [
        require('autoprefixer')({
            overrideBrowserslist: ['last 3 versions'],
            cascade: false
        })
    ]
});

mix.disableNotifications();