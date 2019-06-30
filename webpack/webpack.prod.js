const common = require("./webpack.common");
const merge = require("webpack-merge");
const ExtractTextPlugin = require("extract-text-webpack-plugin");
const UglifyJSPlugin = require('uglifyjs-webpack-plugin');

module.exports = merge(common, {
  mode: "production",
  optimization: {
    splitChunks: {
      cacheGroups: {
        vendor: {
          name: "vendors",
          chunks: "all",
          test: /node_modules/,
          enforce: true
        }
      }
    }
  },
  module: {
    rules: [
      {
        test: /\.scss|sass$/,
        use: ExtractTextPlugin.extract({
          fallback: "style-loader",
          use: [
            {
              loader: "css-loader"
            },
            {
              loader: "postcss-loader"
            },
            {
              loader: "sass-loader"
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
              loader: "css-loader"
            },
            {
              loader: "postcss-loader",
              options: {
                config: { path: "./postcss.config.js" }
              }
            }
          ]
        })
      }
    ]
  },
  plugins: [
    new UglifyJSPlugin()
  ]
});