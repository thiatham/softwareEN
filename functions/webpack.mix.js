const mix = require('laravel-mix');

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

// Libraries
mix
    .copyDirectory('resources/images', 'public/images')
    .copyDirectory('resources/fonts', 'public/fonts');

// Stylesheets
mix
    .sass('resources/sass/html5.scss', 'public/css/')
    .sass('resources/sass/layouts/auth/app.scss', 'public/css/layouts/auth/')
    .sass('resources/sass/layouts/back-office/app.scss', 'public/css/layouts/back-office/')
    .sass('resources/sass/layouts/e-commerce/app.scss', 'public/css/layouts/e-commerce/')
    .sass('resources/sass/layouts/website/app.scss', 'public/css/layouts/website/')

    // Website
    .sass('resources/sass/website/landing-page.scss', 'public/css/website/')
    .sass('resources/sass/website/privacy-policy.scss', 'public/css/website/')
    .sass('resources/sass/website/terms-of-use.scss', 'public/css/website/')
    .sass('resources/sass/website/profile.scss', 'public/css/website/')

    // Ecommerce
    .sass('resources/sass/e-commerce/cart.scss', 'public/css/e-commerce/')
    .sass('resources/sass/e-commerce/receipt.scss', 'public/css/e-commerce/')
    .sass('resources/sass/e-commerce/thank-you.scss', 'public/css/e-commerce/')

    // Auth
    .sass('resources/sass/auth/passwords/email.scss', 'public/css/auth/passwords/')
    .sass('resources/sass/auth/passwords/reset.scss', 'public/css/auth/passwords/')
    .sass('resources/sass/auth/login.scss', 'public/css/auth/')
    .sass('resources/sass/auth/register.scss', 'public/css/auth/')
    .sass('resources/sass/auth/verify.scss', 'public/css/auth/')

    // BackOffice
    .sass('resources/sass/back-office/example/create.scss', 'public/css/back-office/')
    .sass('resources/sass/back-office/example/index.scss', 'public/css/back-office/')
    .sass('resources/sass/back-office/example/show.scss', 'public/css/back-office/')
    .sass('resources/sass/back-office/example/update.scss', 'public/css/back-office/')

    // BackOffice > Settings
    .sass('resources/sass/back-office/settings/example/create.scss', 'public/css/back-office/settings/')
    .sass('resources/sass/back-office/settings/example/index.scss', 'public/css/back-office/settings/')
    .sass('resources/sass/back-office/settings/example/show.scss', 'public/css/back-office/settings/')
    .sass('resources/sass/back-office/settings/example/update.scss', 'public/css/back-office/settings/')
    .sass('resources/sass/back-office/settings/employees/show.scss', 'public/css/back-office/settings/employees')


    .version();

// JavaScript
mix
    // Layouts
    .js('resources/js/layouts/html5.js', 'public/js/layouts/')

    // Website
    .js('resources/js/website/landing-page.js', 'public/js/website/')
    .js('resources/js/website/privacy-policy.js', 'public/js/website/')
    .js('resources/js/website/terms-of-use.js', 'public/js/website/')
    .js('resources/js/website/profile.js', 'public/js/website/')

    // Ecommerce
    .js('resources/js/e-commerce/cart.js', 'public/js/e-commerce/')
    .js('resources/js/e-commerce/thank-you.js', 'public/js/e-commerce/')
    .js('resources/js/e-commerce/receipt.js', 'public/js/e-commerce/')

    // Auth
    .js('resources/js/auth/passwords/email.js', 'public/js/auth/passwords/')
    .js('resources/js/auth/passwords/reset.js', 'public/js/auth/passwords/')
    .js('resources/js/auth/login.js', 'public/js/auth/')
    .js('resources/js/auth/register.js', 'public/js/auth/')
    .js('resources/js/auth/verify.js', 'public/js/auth/')

    // BackOffice
    .js('resources/js/back-office/example/create.js', 'public/js/back-office/')
    .js('resources/js/back-office/example/index.js', 'public/js/back-office/')
    .js('resources/js/back-office/example/show.js', 'public/js/back-office/')
    .js('resources/js/back-office/example/update.js', 'public/js/back-office/')

    // BackOffice > Settings
    .js('resources/js/back-office/settings/example/create.js', 'public/js/back-office/settings/')
    .js('resources/js/back-office/settings/example/index.js', 'public/js/back-office/settings/')
    .js('resources/js/back-office/settings/example/show.js', 'public/js/back-office/settings/')
    .js('resources/js/back-office/settings/example/update.js', 'public/js/back-office/settings/')

    .sourceMaps();
