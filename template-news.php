<div id="news" class="container">
  <div class="news-inside">
  <div class="news-list desktop">
    <div class="active news-list-inside"><p><?php the_field('news_navigation_title'); ?></p></div>
    <div class="news-list-inside"><p><a href="/news-archive"><?php the_field('news_archive_title'); ?></a></p></div>
  </div>




  <div class="news-text">
  <div class="news-title mobile"> <p><?php the_field('news_navigation_title'); ?></p></div>
    <?php
    query_posts(array(
        'post_type' => 'news',
        'showposts' => 1
    ) );

    while (have_posts()) : the_post();
    ?>

      <div class="title"><p><?php the_title(); ?></p></div>

      <div class="date"><p><?php the_date( 'j F, Y' ); ?></p></div>
        </br>
      <div class="content"><p><?php the_field('news_teaser'); ?></p></div>

    <?php
    endwhile;
    wp_reset_query();
    ?>


<div class="news-archive-link mobile"><p><a href="/news.php"><?php the_field('news_archive_title'); ?></a></p></div>


  </div>
</div>
</div>
