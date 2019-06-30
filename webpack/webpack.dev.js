const common = require("./webpack.common");
const merge = require("webpack-merge");
const webpack = require("webpack");
const ExtractTextPlugin = require("extract-text-webpack-plugin");
const BrowserSyncPlugin = require("browser-sync-webpack-plugin");

module.exports = merge(common, {
  mode: "development",
  devtool: "cheap-module-eval-source-map",
  module: {
    rules: [
      {
        test: /\.scss|sass$/,
        use: ExtractTextPlugin.extract({
          fallback: "style-loader",
          use: [
            {
              loader: "css-loader",
              options: { sourceMap: true }
            },
            {
              loader: "postcss-loader",
              options: {
                sourceMap: true,
                config: { path: "./postcss.config.js" }
              }
            },
            {
              loader: "sass-loader",
              options: { sourceMap: true }
            }
          ]
        })
      },
      {
        test: /\.css$/,
        use: ExtractTextPlugin.extract({
          fallback: "style-loader",
          use: [
            {
              loader: "css-loader",
              options: { sourceMap: true }
            },
            {
              loader: "postcss-loader",
              options: {
                sourceMap: true,
                config: { path: "./postcss.config.js" }
              }
            }
          ]
        })
      }
    ]
  },
  plugins: [
    new webpack.SourceMapDevToolPlugin({
      filename: "[file].map"
    }),
    new BrowserSyncPlugin({
      proxy: "tattoo-laboratory.ru:8888",
      port: 3000,
      files: ["**/*.php"],
      ghostMode: {
        clicks: false,
        location: false,
        forms: false,
        scroll: false
      },
      injectChanges: true,
      logFileChanges: true,
      logLevel: "debug",
      logPrefix: "wepback",
      notify: false,
      reloadDelay: 0
    })
  ]
});
