<div class="team container">

  <div class="team-headlines">
    <?php
    if( have_rows('team') ):
    $i = 1;

      while ( have_rows('team') ) : the_row();
      ?>
      <div id="<?php echo $i ?>" class="team-box">

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
      <div id="team-effect-<?php echo $i ?>" class="team-effect-box">

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
