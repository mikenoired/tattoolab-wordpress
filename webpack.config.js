const path = require('path');
const webpack = require('webpack');
const ExtractTextPlugin = require("extract-text-webpack-plugin");
const UglifyJSPlugin = require('uglifyjs-webpack-plugin');
const OptimizeCssAssetsPlugin = require('optimize-css-assets-webpack-plugin');
const BrowserSyncPlugin = require('browser-sync-webpack-plugin');

const config = {
  entry: {
    app: './src/app.js',
  },
  output: {
    filename: '[name].js',
    path: path.resolve(__dirname, 'public'),
  },
  module: {
    rules: [{ // SASS
        test: /(sass).*\.sass$/,
        use: ExtractTextPlugin.extract({
          fallback: 'style-loader',
          use: ['css-loader', 'postcss-loader', 'sass-loader']
        }),
      },
      { // JS
        test: /\.js$/,
        exclude: /node_modules/,
        loader: 'babel-loader',
        query: {
          presets: ['@babel/preset-env']
        }
      },
      { // Images
        test: /(img).*\.(png|jpg|jpeg|gif|svg)$/,
        loader: "file-loader?name=img/[name].[ext]"
      },
      {
        test: /(favicon).*\.*$/,
        loader: 'file-loader?name=favicon/[name].[ext]'
      }
    ],
  },
  plugins: [
    require('autoprefixer'),
    new ExtractTextPlugin('/[name].css'),
    new BrowserSyncPlugin({
      proxy: 'tattoo-laboratory.ru:8888',
      port: 3000,
      files: [
        '**/*.php'
      ],
      ghostMode: {
        clicks: false,
        location: false,
        forms: false,
        scroll: false
      },
      injectChanges: true,
      logFileChanges: true,
      logLevel: 'debug',
      logPrefix: 'wepback',
      notify: false,
      reloadDelay: 0
    })
  ]
};

module.exports = (env, argv) => { // If true JS and CSS files will be minified
  if (argv.mode === 'production') {
    config.plugins.push(
      new UglifyJSPlugin(),
      new OptimizeCssAssetsPlugin()
    );
  }
  return config;
}