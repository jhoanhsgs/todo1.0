const mix = require('laravel-mix');

mix.js([
    'resources/js/app.js', // Aquí deberías importar tu archivo principal de Vue
    'resources/js/main.js' // Asegúrate de que este archivo contenga lógica adicional si es necesario
], 'public/js/app.js') // Esto compila ambos archivos en uno solo
.vue()
.css('resources/css/app.css', 'public/css')
.version();
