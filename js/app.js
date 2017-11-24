jQuery(function() {

jQuery( document ).ready(function() {
	myFunction();

	  });


		jQuery(window).on('resize', function(){
			myFunction();

			  });

	function myFunction() {
	  var elementHeights = jQuery('.projects-effect-box').map(function() {
	    return jQuery(this).height();
	  }).get();

	  var maxHeight = Math.max.apply(null, elementHeights);

		jQuery( ".projects-inside" ).height(maxHeight);
	  jQuery( ".projects-effect-box" ).addClass( "invisible" );



		var elementHeights = jQuery('.team-image, .team-text').map(function() {
	    return jQuery(this).height();
	  }).get();

		var maxHeight = Math.max.apply(null, elementHeights);

		jQuery( ".team-inside" ).height(maxHeight);
	  jQuery( ".team-effect-box" ).addClass( "invisible" );
	}


  jQuery( document ).ready(function() {
    jQuery( ".projects-headlines #p-1").addClass( "active" );
    jQuery( ".team-headlines #t-1").addClass( "active" );

    jQuery( "#iterate-" + 1 ).addClass( "image-active" );
    jQuery( "#project-effect-" + 1 ).addClass( "visible" );

    jQuery( "#team-effect-" + 1 ).addClass( "visible" );
  });


  jQuery(".image-slider").click(function() {
    var max = jQuery(".image-slider").length;
    var i = jQuery(this).attr('id').replace('iterate-', '');
    var ii = parseInt(i);

    ii = ii+1;

    if(max >= ii) {
      jQuery( ".image-slider").removeClass( "image-active" );
      jQuery( "#iterate-" + ii ).addClass( "image-active" );
    }

    if(max < ii) {
      jQuery( ".image-slider").removeClass( "image-active" );
      jQuery( "#iterate-" + 1 ).addClass( "image-active" );
    }
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
    jQuery('html,body').stop().animate({
        scrollTop: jQuery("#welcome").offset().top
    }, 'slow');
  });

  jQuery("#header-navigation-projects").click(function() {
    jQuery('html,body').stop().animate({
        scrollTop: jQuery("#projects").offset().top
    }, 'slow');
  });

  jQuery("#header-navigation-team").click(function() {
    jQuery('html,body').stop().animate({
        scrollTop: jQuery("#team").offset().top
    }, 'slow');
  });

  jQuery("#header-navigation-news").click(function() {
    jQuery('html,body').stop().animate({
        scrollTop: jQuery("#news").offset().top
    }, 'slow');
  });

  jQuery("#header-navigation-contact").click(function() {
    jQuery('html,body').stop().animate({
        scrollTop: jQuery("#contact").offset().top
    }, 'slow');
  });


  jQuery(".news-post-list").click(function() {
    var n = jQuery(this).html().trim();

    jQuery(".news-post-list" ).removeClass( "active" );
    jQuery(this).addClass( "active" );
    jQuery(".news-post" ).removeClass( "visible-news" );
    jQuery( ".date-" + n).addClass( "visible-news" );
  });


    jQuery(".news-post-list.all").click(function() {
      jQuery( ".news-post").addClass( "visible-news" );
    });




});
