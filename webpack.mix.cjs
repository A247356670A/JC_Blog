const mix = require('laravel-mix');

// 编译 JavaScript 文件
mix.js('resources/js/custom.js', 'public/js');

// 编译 SCSS 文件
mix.css('resources/css/style.css', 'public/css');