jQuery(function() {

  jQuery(".projects-box").click(function() {
    var p = jQuery(this).attr('id');
    jQuery( ".projects-effect-box").removeClass( "visible" );
    jQuery( "#project-effect-" + p ).addClass( "visible" );
  });

});
