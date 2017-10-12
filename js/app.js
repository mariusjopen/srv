jQuery(function() {

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
