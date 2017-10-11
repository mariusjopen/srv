
	<div class="header">
		<div class="header-title">
			<?php echo get_bloginfo( 'name' ); ?>
		</div>

		<div class="header-navigation">
			<div class="header-navigation-projects">
				<?php the_field('navigation_projects'); ?>
			</div>

			<div class="header-navigation-team">
				<?php the_field('navigation_team'); ?>
			</div>

			<div class="header-navigation-contact">
				<?php the_field('navigation_contact'); ?>
			</div>
		</div>

		<div class="header-language">
			<?php wp_nav_menu( array( 'theme_location' => 'header-menu' ) ); ?>
		</div>
	</div>
