const mix = require('laravel-mix');
require('laravel-mix-jigsaw');

mix.disableSuccessNotifications();
mix.setPublicPath('source/assets/build');

mix.jigsaw(
  {browserSyncOptions: { browser: 'Firefox Developer Edition' }}
)
    .js('source/_assets/js/main.js', 'js')
    .postCss("source/_assets/css/main.css", "css", [
        require("tailwindcss"),
      ])
    .options({
        processCssUrls: false,
    })
    .version();