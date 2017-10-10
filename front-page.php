<?php get_header(); ?>

<div class="wrapper">

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

	<div class="welcome container">
		<div class="welcome-text">
			<?php the_field('welcome_text'); ?>
		</div>
	</div>

	<div class="projects container">

		<div class="projects-headlines">
			<?php
			if( have_rows('projects') ):
        $i = 1;

		    while ( have_rows('projects') ) : the_row();
		    ?>
        <div id="project-<?php echo $i ?>" class="projects-box">

			    <div class="projects-headlines-inside">
			    	<?php the_sub_field('projects_headline'); ?>
			    </div>

        </div>
		    <?php
        $i++;
		    endwhile;

			else :

			endif;
			?>
		</div>

		<div class="projects-effect">
			<?php
			if( have_rows('projects') ):
        $i = 1;

			    while ( have_rows('projects') ) : the_row();
			    ?>
            <div id="project-effect-<?php echo $i ?>" class="projects-effect-box">

    					<div class="projects-text-left">
    						<?php the_sub_field('projects_text_left'); ?>
    					</div>

    					<div class="projects-text-right">
    						<?php the_sub_field('projects_text_right'); ?>
    					</div>

            </div>
			      <?php
          $i++;
			    endwhile;

			else :

			endif;
			?>
		</div>

	</div>

	<div class="team container">

		<div class="team-headlines">
			<?php
			if( have_rows('team') ):
      $i = 1;

		    while ( have_rows('team') ) : the_row();
		    ?>
        <div id="team-<?php echo $i ?>" class="team-box">

		    	<div class="team-headlines-inside">
		    		<?php the_sub_field('team_headline'); ?>
				  </div>

        </div>
		    <?php
        $i++;
		    endwhile;

			else :

			endif;
			?>
		</div>


		<div class="team-effect">
			<?php
			if( have_rows('team') ):
      $i = 1;

		    while ( have_rows('team') ) : the_row();
		    ?>
        <div id="team-effect-<?php echo $i ?>" class="team-box">

			    <div class="team-image">
			    		<?php the_sub_field('team_image'); ?>
					</div>

					<div class="team-contact">
						<?php the_sub_field('team_contact'); ?>
					</div>

					<div class="team-text">
						<?php the_sub_field('team_text'); ?>
					</div>

        </div>
		    <?php
        $i++;
		    endwhile;

			else :

			endif;
			?>
		</div>

	</div>

	<div class="contact container">
		<div class="contact-image">
			<?php the_field('contact_image'); ?>
		</div>

		<div class="contact-text-top">
			<?php the_field('contact_text_top'); ?>
		</div>

		<div class="contact-text-map">
			<?php the_field('contact_text_map'); ?>
		</div>

		<div class="contact-text-numbers">
			<?php the_field('contact_text_numbers'); ?>
		</div>

		<div class="contact-text-email">
			<?php the_field('contact_text_email'); ?>
		</div>

	</div>

</div>

<?php get_footer(); ?>
