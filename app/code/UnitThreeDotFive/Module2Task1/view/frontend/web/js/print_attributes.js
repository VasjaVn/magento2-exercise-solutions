define([
    "jquery"
], function($){
    "use strict";

    return function(config, element) {
        var review = $.trim( $(element).text() );
        console.log("Review: " + review);
        /*
        var numOfAttributes = $(element).find('tr').length;
        console.log("Number of attributes: " + numOfAttributes);
        */
    }
});