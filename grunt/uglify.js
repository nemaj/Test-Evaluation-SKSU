// This module uglifies the concatenated js files from app.src.js into app.min.js
module.exports = {
    dev: {
        files: {
            'public/js/app.min.js': 'public/js/app.src.js'
        },
        options: {
            mangle: false
        }
    }
};