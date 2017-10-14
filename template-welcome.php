<div class="welcome container">

  <div class="welcome-text <?php if(get_field('welcome_image'))  { echo "image-active"; }?>">
    <?php the_field('welcome_text'); ?>
  </div>

  <div class="welcome-image">
    <?php
    $image = get_field('welcome_image');
    $size = 'big';
    if( $image ) {
      echo wp_get_attachment_image( $image, $size );
    }
    ?>
  </div>

</div>
