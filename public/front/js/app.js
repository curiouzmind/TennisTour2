/**
 * Created by Developer on 5/16/2016.
 */
//custom scripts

//import jquery
window.$ = window.jQuery = require('jquery')
require('bootstrap-sass');
//require('bootswatch-sass');

$(document).ready(function() {
   console.log($.fn.tooltip.Constructor.VERSION);
});
