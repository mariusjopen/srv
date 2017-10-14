jQuery(function() {

  jQuery( document ).ready(function() {
    jQuery( "#project-effect-" + 1 ).addClass( "visible" );
    jQuery( "#team-effect-" + 1 ).addClass( "visible" );
  });

  jQuery(".projects-box").click(function() {
    var p = jQuery(this).attr('id');
    jQuery( ".projects-effect-box").removeClass( "visible" );
    jQuery( "#project-effect-" + p ).addClass( "visible" );
  });

  jQuery(".team-box").click(function() {
    var p = jQuery(this).attr('id');
    jQuery( ".team-effect-box").removeClass( "visible" );
    jQuery( "#team-effect-" + p ).addClass( "visible" );
  });

});
