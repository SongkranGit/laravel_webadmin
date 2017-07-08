define(function (require) {

    require('../../model/Component').registerSubTypeDefaulter('dataZoom', function (option) {
        // Default 'slideshow' when no type specified.
        return 'slider';
    });

});