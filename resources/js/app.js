import './bootstrap';
export default x ({
    plugins:[laravel({
        input: [
            'resources/css/app.css',
             'resources/js/app.js',
              'resources/js/iphone.js',
               'resources/js/mac.js',
               'resources/js/add.js',
        ],
        refesh: true,

    })],


});