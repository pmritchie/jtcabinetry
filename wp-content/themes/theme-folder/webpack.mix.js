const mix = require('laravel-mix')

mix
  .setPublicPath('/')
  .js('resources/scripts/app.js', 'js/app.js')
  .sass('resources/styles/main.scss', 'css/style.css')
  .options({
    processCssUrls: false,
    fileLoaderDirs: {
      fonts: '/fonts',
    },
  })


mix.browserSync({
  proxy: 'https://jtcabinetry.test',
  host: 'jtcabinetry.test',
  open: 'external',
  https: {
    key: '/Users/patrickritchie/.config/valet/Certificates/jtcabinetry.test.key',
    cert: '/Users/patrickritchie/.config/valet/Certificates/jtcabinetry.test.crt',
  },
  files: ['*.*'],
})



