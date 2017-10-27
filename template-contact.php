<div id="contact" class="container">

  <div class="title-inside"> <p><?php the_field('contact_navigation_title'); ?></p></div>

  <div class="contact-image">

  <?php
  $image = get_field('contact_image');
  $size = 'big';
  if( $image ) {
    echo wp_get_attachment_image( $image, $size );
  }
  ?>

  </div>

  <div class="contact-text">
    <?php the_field('contact_text'); ?>
  </div>



  <div class=" mobile header-language">
    <?php wp_nav_menu( array( 'theme_location' => 'header-menu' ) ); ?>
  </div>

</div>
