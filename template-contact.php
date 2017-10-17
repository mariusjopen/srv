<div id="contact" class="container">

  <div class="contact-text">
    <?php the_field('contact_text'); ?>
  </div>

  <div class="contact-image">

  <?php
  $image = get_field('contact_image');
  $size = 'big';
  if( $image ) {
    echo wp_get_attachment_image( $image, $size );
  }
  ?>

  </div>

</div>
