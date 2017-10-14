
	<div class="header">
		<div class="header-title">
			<?php echo get_bloginfo( 'name' ); ?>
		</div>

		<div class="header-navigation">

			<div class="header-navigation-home">
				<?php the_field('welcome_navigation_title'); ?>
			</div>

			<div class="header-navigation-projects">
				<?php the_field('projects_navigation_title'); ?>
			</div>

			<div class="header-navigation-team">
				<?php the_field('team_navigation_title'); ?>
			</div>

			<div class="header-navigation-contact">
				<?php the_field('contact_navigation_title'); ?>
			</div>
		</div>

		<div class="header-language">
			<?php wp_nav_menu( array( 'theme_location' => 'header-menu' ) ); ?>
		</div>
	</div>
