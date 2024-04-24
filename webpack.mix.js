const mix = require('laravel-mix');
const path = require('path');

const alias = {
    '@': path.resolve(__dirname, 'resources/js'),
};


mix
.alias(alias)
.ts('resources/js/app.ts', 'public/js')
.vue({
  version: 3,
});

mix.webpackConfig({
  stats: {
    children: true,
  },
});