const mix = require('laravel-mix');

mix.js('resources/js/app.js', 'public/js')
    .sass('resources/sass/app.scss', 'public/css')
    .browserSync({
        proxy: 'your-project-directory.test',  // Cambia esto por tu dominio local
        files: [
            'app/**/*',
            'resources/views/**/*',
            'public/**/*',
            'resources/js/**/*',
            'resources/sass/**/*'
        ]
    });
