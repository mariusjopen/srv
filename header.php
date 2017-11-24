<!doctype html>
<html <?php language_attributes(); ?>>
	<head>
		<meta charset="<?php bloginfo('charset'); ?>">
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="description" content="<?php bloginfo('description'); ?>">
		<title><?php wp_title(''); ?><?php if(wp_title('', false)) { echo ' :'; } ?> <?php bloginfo('name'); ?></title>
		<?php wp_head(); ?>

		<script>
			jQuery(function () {
			  // initialize skrollr if the window width is large enough
			  if (jQuery(window).width() > 700) {
					jQuery.scrollify({
						section : ".container"
					});



			  }

				jQuery(window).on('resize', function () {
					if (jQuery(window).width() > 700) {
						jQuery.scrollify.enable();
						jQuery.scrollify({
							section : ".container"
						});
					}
				});
			  // disable skrollr if the window is resized below 768px wide
			  jQuery(window).on('resize', function () {
			    if (jQuery(window).width() <= 700) {
						jQuery.scrollify.destroy();
						jQuery.scrollify.disable();
			    }
			  });
			});

    </script>

	</head>

	<body  <?php body_class(); ?> >
