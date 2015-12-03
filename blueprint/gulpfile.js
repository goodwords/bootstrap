process.env.DISABLE_NOTIFIER = true;
var elixir = require('laravel-elixir');
elixir.config.sourcemaps = false;

require('del')(['./public/assets' , './public/rev-manifest.json']);

elixir(function(mix){

    mix.sass(
        './resources/assets/sass/app.scss',
        './public/assets/app.css'
    );

    mix.scripts(
        [
              './bower_components/jquery/dist/jquery.js'
            , './resources/assets/js/mycomponent.js'
        ],
        './public/assets/app.js'
    );

    if (elixir.config.production) {
        mix.version(
            [
                  './public/assets/app.css'
                , './public/assets/app.js'
            ],
            './public'
        );
    }

});
