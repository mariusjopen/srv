<div class="contact container">
  <div class="contact-image">

  <?php
  $image = get_field('contact_image');
  $size = 'medium';
  if( $image ) {
    echo wp_get_attachment_image( $image, $size );
  }
  ?>

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
