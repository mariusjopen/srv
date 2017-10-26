jQuery(function() {

  jQuery( document ).ready(function() {
    jQuery( ".projects-headlines #p-1").addClass( "active" );
    jQuery( ".team-headlines #t-1").addClass( "active" );

    jQuery( "#project-effect-" + 1 ).addClass( "visible" );
    jQuery( "#team-effect-" + 1 ).addClass( "visible" );
  });

  jQuery(".projects-box").click(function() {
    var p = jQuery(this).attr('id').replace('p-', '');
    jQuery( ".projects-effect-box").removeClass( "visible" );
    jQuery( "#project-effect-" + p ).addClass( "visible" );
    jQuery(".projects-box ").removeClass( "active" );
    jQuery(this).addClass( "active" );
  });

  jQuery(".team-box").click(function() {
    var p = jQuery(this).attr('id').replace('t-', '');
    jQuery( ".team-effect-box").removeClass( "visible" );
    jQuery( "#team-effect-" + p ).addClass( "visible" );
    jQuery(".team-box ").removeClass( "active" );
    jQuery(this).addClass( "active" );
  });


  jQuery("#header-navigation-welcome").click(function() {
    jQuery('html,body').animate({
        scrollTop: jQuery("#welcome").offset().top
    }, 'slow');
  });

  jQuery("#header-navigation-projects").click(function() {
    jQuery('html,body').animate({
        scrollTop: jQuery("#projects").offset().top
    }, 'slow');
  });

  jQuery("#header-navigation-team").click(function() {
    jQuery('html,body').animate({
        scrollTop: jQuery("#team").offset().top
    }, 'slow');
  });

  jQuery("#header-navigation-news").click(function() {
    jQuery('html,body').animate({
        scrollTop: jQuery("#news").offset().top
    }, 'slow');
  });

  jQuery("#header-navigation-contact").click(function() {
    jQuery('html,body').animate({
        scrollTop: jQuery("#contact").offset().top
    }, 'slow');
  });


});
