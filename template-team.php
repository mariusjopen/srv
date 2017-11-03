<div id="team" class="container">

  <div class="desktop team-headlines">
    <?php
    if( have_rows('team') ):
    $i = 1;

      while ( have_rows('team') ) : the_row();
      ?>
      <div id="t-<?php echo $i ?>" class="team-box">

        <div class="team-headlines-inside">
          <p><?php the_sub_field('team_headline'); ?></p>
        </div>

      </div>
      <?php
      $i++;
      endwhile;

    else :

    endif;
    ?>
  </div>


  <div class="desktop team-effect">
    <?php
    if( have_rows('team') ):
    $i = 1;

      while ( have_rows('team') ) : the_row();
      ?>
      <div id="team-effect-<?php echo $i ?>" class="team-effect-box">

        <div class="team-image <?php the_sub_field('team_image_size'); ?>">
          <?php
          $image = get_sub_field('team_image');
          $size = 'big';
          if( $image ) {
            echo wp_get_attachment_image( $image, $size );
          }
          ?>
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



  <div class="mobile team-headlines">

    <div class="title-inside"> <p><?php the_field('team_navigation_title'); ?></p></div>

    <?php
    if( have_rows('team') ):
    $i = 1;

      while ( have_rows('team') ) : the_row();
      ?>
      <div class="team-box">



        <div class="team-image <?php the_sub_field('team_image_size'); ?>">
          <?php
          $image = get_sub_field('team_image');
          $size = 'big';
          if( $image ) {
            echo wp_get_attachment_image( $image, $size );
          }
          ?>
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
