
var gulp = require('gulp');
var elixir = require('laravel-elixir');

elixir(function(mix) {
    mix.scripts([
        'jquery-3.2.1.min.js',
        'bootstrap.min.js',
        'front.js'
    ],"public/assets/js");
    mix.sass([
        'bootstrap.min.css',
        'app.scss'
    ],"public/assets/css");
    mix.copy('./node_modules/font-awesome/fonts', 'public/assets/fonts');
});
