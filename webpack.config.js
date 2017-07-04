const webpack = require('webpack')
const ExtractTextPlugin = require('extract-text-webpack-plugin');

module.exports = function(env) {
    return {
        entry: "./src/js/main.js",
        output: {
            path: __dirname + "/dist",
            filename: "bundle.js"
        },
        module: {
            loaders: [
                {
                  test: /\.html$/,
                  loader: 'raw-loader',
                  exclude: /node_modules/
                },
                {
                  test: /\.css$/,
                  loader: "style-loader!css-loader",
                  exclude: /node_modules/
                },
                {
                  test: /\.sass$/,
                  use: ExtractTextPlugin.extract({
                    fallback: 'style-loader',
                    //resolve-url-loader may be chained before sass-loader if necessary
                    use: ['css-loader', 'sass-loader']
                  })
                },
                {
                  test: /\.(jpe?g|png|gif|svg)$/i,
                  loaders: [
                      'file-loader?hash=sha512&digest=hex&name=[name].[ext]',
                      'image-webpack-loader'
                  ]
                },
                {
                  test: /\.woff($|\?)|\.woff2($|\?)|\.ttf($|\?)|\.eot($|\?)|\.svg($|\?)/,
                  loader: 'url-loader'
                }
            ]
        },
        plugins: [
          new ExtractTextPlugin('bundle.css')
          //if you want to pass in options, you can do so:
          //new ExtractTextPlugin({
          //  filename: 'style.css'
          //})
        ]
    }
}
