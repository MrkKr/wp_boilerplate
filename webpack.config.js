const MiniCssExtractPlugin = require("mini-css-extract-plugin");

module.exports = {
  plugins: [
    new MiniCssExtractPlugin({
      filename: "style.css",
    }),
  ],
  entry: {
    assets: ["./src/js/app.js", "./src/scss/style.scss"],
  },
  output: {
    filename: "script.js",
    publicPath: "../",
  },
  module: {
    rules: [
      {
        test: /\.(sa|sc|c)ss$/,
        use: [
          {
            loader: MiniCssExtractPlugin.loader,
            options: {
              hmr: true,
              reloadAll: true,
            },
          },
          "css-loader",
          "postcss-loader",
          "sass-loader",
        ],
      },
      {
        test: /\.(jpg|svg|woff|woff2|ttf|eot)(\?.*$|$)/,
        loader: "file-loader",
      },
    ],
  },
};

// const path = require("path");
// const TerserJSPlugin = require("terser-webpack-plugin");
// const OptimizeCSSAssetsPlugin = require("optimize-css-assets-webpack-plugin");
// const MiniCssExtractPlugin = require("mini-css-extract-plugin");

// module.exports = {
//   optimization: {
//     minimizer: [
//       new TerserJSPlugin({
//         sourceMap: true,
//       }),
//       new OptimizeCSSAssetsPlugin({
//         cssProcessorOptions: {
//           map: {
//             inline: false,
//           },
//         },
//       }),
//     ],
//   },
//   plugins: [
//     new MiniCssExtractPlugin({
//       filename: "style.css",
//     }),
//   ],
//   entry: {
//     assets: [
//       "@babel/polyfill",
//       "./src/js/bootstrap.js",
//       "./src/js/app.js",
//       "./src/scss/style.scss",
//     ],
//   },
//   output: {
//     path: path.resolve(__dirname, "./dist/"),
//     filename: "script.js",
//   },
//   devtool: "source-map",
//   module: {
//     rules: [
//       {
//         test: /\.(js)$/,
//         exclude: /node_modules/,
//         loader: "babel-loader",
//         options: {
//           presets: [
//             [
//               "@babel/preset-env",
//               {
//                 useBuiltIns: "entry",
//                 corejs: 3,
//               },
//             ],
//           ],
//           cwd: "./",
//         },
//       },
//       {
//         test: /\.(sa|sc|c)ss$/,
//         use: [
//           {
//             loader: MiniCssExtractPlugin.loader,
//             options: {
//               hmr: process.env.NODE_ENV === "development",
//               reloadAll: true,
//             },
//           },
//           "css-loader",
//           "postcss-loader",
//           "sass-loader",
//         ],
//       },
//       {
//         test: /\.(jpg|svg|woff|woff2|ttf|eot)(\?.*$|$)/,
//         loader: "file-loader",
//       },
//     ],
//   },
// };
