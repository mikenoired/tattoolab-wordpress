const path = require('path');
const MiniCssExtractPlugin = require('mini-css-extract-plugin');
const ESLintPlugin = require('eslint-webpack-plugin');
const StylelintPlugin = require('stylelint-webpack-plugin');
const CopyWebpackPlugin = require('copy-webpack-plugin');

const PATHS = {
  src: path.join(__dirname, '../src'),
  dist: path.join(__dirname, '../dist')
};

module.exports = {
  externals: {
    paths: PATHS,
  },
  entry: {
    app: `${PATHS.src}/index.js`,
  },
  output: {
    filename: `./[name].js`,
    path: PATHS.dist,
  },
  module: {
    rules: [
      {
        test: /\.js$/,
        exclude: /node_modules/,
        use: {
          loader: 'babel-loader',
        },
      },
      {
        test: /\.(png|jpe?g|gif|svg)$/,
        type: 'asset/resource',
        generator: {
          filename: './favicons/[name][ext]',
          outputPath: 'images',
        },
      },
      {
        test: /\.(woff(2)?|ttf|eot)$/,
        type: 'asset/resource',
        generator: {
          filename: './fonts/[name][ext]',
        },
      },
    ],
  },
  plugins: [
    new StylelintPlugin({
      fix: true,
      files: [path.resolve(__dirname, 'src/**/*.scss')],
    }),
    new MiniCssExtractPlugin({
      filename: '[name].css',
    }),
    new ESLintPlugin(),
    new CopyWebpackPlugin({
      patterns: [
        {
          from: path.resolve(__dirname, '../src/static/favicons'),
          to: path.resolve(__dirname, '../dist/fav'),
        },
      ],
    }),
  ],
};
