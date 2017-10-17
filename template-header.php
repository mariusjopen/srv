
	<div class="header">
		<div class="header-title">
			<?php echo get_bloginfo( 'name' ); ?>
		</div>

		<div class="header-navigation">

			<div class="header-navigation-inside header-navigation-home">
				<p><?php the_field('welcome_navigation_title'); ?></p>
			</div>

			<div class="header-navigation-inside header-navigation-projects">
				<p><?php the_field('projects_navigation_title'); ?></p>
			</div>

			<div class="header-navigation-inside header-navigation-team">
				<p><?php the_field('team_navigation_title'); ?></p>
			</div>

			<div class="header-navigation-inside header-navigation-contact">
				<p><?php the_field('contact_navigation_title'); ?></p>
			</div>
		</div>

		<div class="header-language">
			<?php wp_nav_menu( array( 'theme_location' => 'header-menu' ) ); ?>
		</div>
	</div>
