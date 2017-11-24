<div id="projects" class="container">
<div class="projects-inside">
  <div class="projects-headlines desktop">
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

  <div class="projects-effect desktop">
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



  <div class="mobile projects-headlines">

    <div class="title-inside"> <p><?php the_field('projects_navigation_title'); ?></p></div>

    <?php
    if( have_rows('projects') ):
      $i = 1;

      while ( have_rows('projects') ) : the_row();
      ?>
      <div class="projects-box">

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


</div>
