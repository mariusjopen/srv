jQuery(function() {

  jQuery( document ).ready(function() {
    jQuery( ".projects-headlines #1").addClass( "active" );
    jQuery( ".team-headlines #1").addClass( "active" );
    jQuery( "#project-effect-" + 1 ).addClass( "visible" );
    jQuery( "#team-effect-" + 1 ).addClass( "visible" );
  });

  jQuery(".projects-box").click(function() {
    var p = jQuery(this).attr('id');
    jQuery( ".projects-effect-box").removeClass( "visible" );
    jQuery( "#project-effect-" + p ).addClass( "visible" );
    jQuery(".projects-box ").removeClass( "active" );
    jQuery(this).addClass( "active" );
  });

  jQuery(".team-box").click(function() {
    var p = jQuery(this).attr('id');
    jQuery( ".team-effect-box").removeClass( "visible" );
    jQuery( "#team-effect-" + p ).addClass( "visible" );
    jQuery(".team-box ").removeClass( "active" );
    jQuery(this).addClass( "active" );
  });

});
