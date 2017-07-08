define(function (require) {

    require('../../model/Component').registerSubTypeDefaulter('timeline', function () {
        // Only slideshow now.
        return 'slider';
    });

});