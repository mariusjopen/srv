<div id="news" class="container">

  <div class="news-list">
    <div class="news-list-inside"><p><?php the_field('news_navigation_title'); ?></p></div>
    <div class="news-list-inside"><p><?php the_field('news_archive_title'); ?></p></div>
  </div>

  <div class="news-text">

    <?php
        query_posts(array(
            'post_type' => 'news',
            'showposts' => 1
        ) );
    ?>
    <?php while (have_posts()) : the_post(); ?>
      <div class="title"><p><?php the_title(); ?></p></div>

      <div class="date"><p><?php the_date( 'j F, Y' ); ?></p></div>
        </br>
      <div class="content"><?php the_content(); ?></div>
    <?php endwhile;?>

  </div>

</div>
