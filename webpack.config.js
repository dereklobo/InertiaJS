const path = require('path');
const ScriptSetup = require('unplugin-vue2-script-setup/webpack').default
module.exports = {
    resolve: {
        alias: {
           
            '@shared': path.resolve(__dirname, 'resources/js/Shared'),

            // '@js': path.resolve(__dirname, 'resources/assets/js'),

            // '@svg': path.resolve(__dirname, 'public/svg'),

            // '@css': path.resolve(__dirname, 'public/css'),

            // // Alias for importing inside JS files ("@scss/..")
            // '@scss': path.resolve(__dirname, 'resources/assets/sass'),

            // // Alias for importing inside SCSS ("~scss/..")
            // scss: path.resolve(__dirname, 'resources/assets/sass'),
        },
    },
    plugins: [
        ScriptSetup({ /* options */ }),
      ]
};
