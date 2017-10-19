<div id="welcome" class="container">

  <div class="welcome-image">
    <?php
    $image = get_field('welcome_image');
    $size = 'big';
    if( $image ) {
      echo wp_get_attachment_image( $image, $size );
    }
    ?>
  </div>

  <div class="welcome-text <?php if(get_field('welcome_image'))  { echo "image-active"; }?>">
    <h1><?php the_field('welcome_text'); ?></h1>
  </div>


</div>
