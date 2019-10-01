let mix = require('laravel-mix');
let HtmlWebpackPlugin = require("html-webpack-plugin");
let HtmlBeautifyPlugin = require('html-beautify-webpack-plugin');
let PrerenderSpaPlugin = require('prerender-spa-plugin');
let { CleanWebpackPlugin } = require('clean-webpack-plugin');
const Renderer = PrerenderSpaPlugin.PuppeteerRenderer;
const path = require("path");
/*
 |--------------------------------------------------------------------------
 | Mix Asset Management
 |--------------------------------------------------------------------------
 |
 | Mix provides a clean, fluent API for defining some Webpack build steps
 | for your Laravel application. By default, we are compiling the Sass
 | file for your application, as well as bundling up your JS files.
 |
 */

mix.js('src/js/app.js', 'public_html/js').sass('src/scss/main.scss', 'public_html/css').options({
	// processCssUrls: false,
	autoprefixer: {
		options: {
			overrideBrowserslist: [
				'> 1%',
				"last 2 versions"
			]
		}
	}
}).webpackConfig({
	resolve: {
		alias: {
			"_src": path.resolve(__dirname, "src"),
			"_components": path.resolve(__dirname, "src/js/components"),
			// "_assets": path.resolve(__dirname, "src/assets"),
		}
	},
	plugins:[
		new CleanWebpackPlugin(),
		new HtmlWebpackPlugin({
			template: 'src/index.html',
			inject: false,
		}),
	],
	module: {
		rules: [
			{
				test: /\.(mov|mp4|webm)$/,
				use: [
					{
						loader: 'file-loader',
						options: {
							name: 'video/[name].[ext]',
							// outputPath: 'video'
						}  
					}
				]
			},
			{
				test: /\.woff(2)?(\?v=[0-9]\.[0-9]\.[0-9])?$/,
			}
		]
	}
}).setPublicPath('public_html');
// mix.copy('src/index.php', 'public_html').copy('src/mix.php', 'public_html');
if (mix.inProduction()) {
    mix.version().webpackConfig({
		plugins:[
			new PrerenderSpaPlugin({//el prerenderizado solo se compila en produccion
				staticDir: path.join(__dirname, 'public_html'),
				routes: ['/', '/get_started', '/404'],//listado de rutas a prerenderizar
				minify: {
					// collapseBooleanAttributes: true,
					// collapseWhitespace: true,
					// decodeEntities: true,
					// keepClosingSlash: true,
					// sortAttributes: true,
					// minifyCSS: true,
					// minifyJS: true,
					removeComments: true,
				},
				beautify: {
					end_with_newline: false,
					indent_size: 2,
					indent_with_tabs: true,
					indent_inner_html: true,
					preserve_newlines: false,
					// unformatted: ['p', 'i', 'b', 'span'],
				},
				renderer: new Renderer({
					injectProperty: '__PRERENDER_INJECTED',
					inject: true,
					headless: true,
				})
			}),
			new HtmlBeautifyPlugin({
				config: {
					html: {
						end_with_newline: false,
						indent_size: 2,
						indent_with_tabs: true,
						indent_inner_html: true,
						preserve_newlines: false,
						// unformatted: ['p', 'i', 'b', 'span']
					}
				},
				// replace: [' type="text/javascript"']
			}),
		]
	}).copy('src/production_only', 'public_html', false);
} else {
	let proxy_url = process.env.BROWSERSYNC_PROXY_URL;
	mix.sourceMaps(true, 'source-map').copy('src/dev_only', 'public_html', false).browserSync({
		proxy: proxy_url
	})
}
// if (mix.inWatch()) {
//     mix.browserSync();
// }

// Full API
// mix.js(src, output);
// mix.react(src, output); <-- Identical to mix.js(), but registers React Babel compilation.
// mix.preact(src, output); <-- Identical to mix.js(), but registers Preact compilation.
// mix.coffee(src, output); <-- Identical to mix.js(), but registers CoffeeScript compilation.
// mix.ts(src, output); <-- TypeScript support. Requires tsconfig.json to exist in the same folder as webpack.mix.js
// mix.extract(vendorLibs);
// mix.sass(src, output);
// mix.less(src, output);
// mix.stylus(src, output);
// mix.postCss(src, output, [require('postcss-some-plugin')()]);
// mix.browserSync('my-site.test');
// mix.combine(files, destination);
// mix.babel(files, destination); <-- Identical to mix.combine(), but also includes Babel compilation.
// mix.copy(from, to);
// mix.copyDirectory(fromDir, toDir);
// mix.minify(file);
// mix.sourceMaps(); // Enable sourcemaps
// mix.version(); // Enable versioning.
// mix.disableNotifications();
// mix.setPublicPath('path/to/public');
// mix.setResourceRoot('prefix/for/resource/locators');
// mix.autoload({}); <-- Will be passed to Webpack's ProvidePlugin.
// mix.webpackConfig({}); <-- Override webpack.config.js, without editing the file directly.
// mix.babelConfig({}); <-- Merge extra Babel configuration (plugins, etc.) with Mix's default.
// mix.then(function () {}) <-- Will be triggered each time Webpack finishes building.
// mix.dump(); <-- Dump the generated webpack config object to the console.
// mix.extend(name, handler) <-- Extend Mix's API with your own components.
// mix.options({
//   extractVueStyles: false, // Extract .vue component styling to file, rather than inline.
//   globalVueStyles: file, // Variables file to be imported in every component.
//   processCssUrls: true, // Process/optimize relative stylesheet url()'s. Set to false, if you don't want them touched.
//   purifyCss: false, // Remove unused CSS selectors.
//   terser: {}, // Terser-specific options. https://github.com/webpack-contrib/terser-webpack-plugin#options
//   postCss: [] // Post-CSS options: https://github.com/postcss/postcss/blob/master/docs/plugins.md
// });
