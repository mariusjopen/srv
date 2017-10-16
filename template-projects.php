<div class="projects container">

  <div class="projects-headlines">
    <?php
    if( have_rows('projects') ):
      $i = 1;

      while ( have_rows('projects') ) : the_row();
      ?>
      <div id="p-<?php echo $i ?>" class="projects-box">

        <div class="projects-headlines-inside">
          <p><?php the_sub_field('projects_headline'); ?></p>
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

            <div class="projects-text">
              <?php the_sub_field('projects_text'); ?>
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
