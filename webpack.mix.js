const mix = require("laravel-mix");
const tailwindcss = require("tailwindcss");
require("laravel-mix-purgecss");

mix.js("resources/js/app.js", "js");

mix.postCss("resources/css/app.css", "css", [
  require("postcss-easy-import"),
  tailwindcss("./tailwind.config.js"),
  require("precss")(),
  require("postcss-combine-media-query")(),
  require("postcss-font-magician")({
    variants: {
      Roboto: {
        "100": [],
        "300": [],
        "500": [],
        "700": []
      }
    }
  })
]);

mix.purgeCss();

mix.browserSync("http://127.0.0.1:8000/");

mix.version();
