<div id="contact" class="container">

  <div class="title-inside"> <p><?php the_field('contact_navigation_title'); ?></p></div>

  <div class="contact-image">



        <?php

      // check if the repeater field has rows of data
      if( have_rows('contact_image_repeat') ):
      $iterate = 1;
       	// loop through the rows of data
          while ( have_rows('contact_image_repeat') ) : the_row();

              ?>
              <div id="iterate-<?php echo $iterate ?>" class="image-slider">
                <?php
                $image = get_sub_field('contact_image');
                $size = 'big';
                if( $image ) {
                  echo wp_get_attachment_image( $image, $size );
                }
                ?>
              </div>
              <?php
              $iterate++;
          endwhile;

      else :

          // no rows found

      endif;

      ?>


  </div>

  <div class="contact-text">
    <?php the_field('contact_text'); ?>
  </div>



  <div class=" mobile header-language">
    <?php wp_nav_menu( array( 'theme_location' => 'header-menu' ) ); ?>
  </div>

</div>
