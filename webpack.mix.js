let mix = require('laravel-mix');
var LiveReloadPlugin = require('webpack-livereload-plugin');

mix.browserSync('127.0.0.1:8000');
