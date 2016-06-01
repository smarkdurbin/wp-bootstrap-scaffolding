/* global jQuery */


jQuery(document).ready(function( $ ) {


    $(".btn").mouseup(function() {
        $(this).blur();
    });

    $("button").mouseup(function() {
        $(this).blur();
    });
    
    $('.navbar-close').click(function(e){
      e.preventDefault();
      $('#navbar-slideout').removeClass('in');
    });
    $('.navbar-toggle').click(function(e) {
      e.preventDefault();
      $('#navbar-slideout').toggleClass( "in" );
    });
 

});