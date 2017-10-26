
	<div class="header">
		<div id="header-navigation-welcome" class="header-title">
			<?php echo get_bloginfo( 'name' ); ?>
		</div>

		<div class="header-navigation">

			<div class="header-navigation-inside"  id="header-navigation-projects">
				<p><?php the_field('projects_navigation_title'); ?></p>
			</div>

			<div class="header-navigation-inside" id="header-navigation-team">
				<p><?php the_field('team_navigation_title'); ?></p>
			</div>

			<div class="header-navigation-inside" id="header-navigation-news">
				<p><?php the_field('news_navigation_title'); ?></p>
			</div>

			<div class="header-navigation-inside" id="header-navigation-contact">
				<p><?php the_field('contact_navigation_title'); ?></p>
			</div>
		</div>

		<div class=" desktop header-language">
			<?php wp_nav_menu( array( 'theme_location' => 'header-menu' ) ); ?>
		</div>
	</div>
