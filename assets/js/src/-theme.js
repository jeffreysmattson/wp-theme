/**
 * wp-theme
 *
 * Copyright (c) 2017 Jeff Mattson
 * Licensed under the GPL-2.0+ license.
 */

jQuery(function() {
 main_js.init();
} );

var main_js = {

    variables : '',

    init: function(){
        this.awesomeFunction();
    },

    awesomeFunction : function(){
        console.log('Stuff happening here for sure.');
    }
}