<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package Shape
 * @since Shape 1.0
 */

get_header(); ?>

<div class="news-year">

  <?php
  query_posts(array(
      'post_type' => 'news'
  ) );
  while (have_posts()) : the_post();
  ?>

    <div class="news-post-list">
    <?php the_date( 'Y' ); ?>
    </div>

  <?php
  endwhile;
  wp_reset_query();
  ?>

</div>

<div class="news-archive">

  <?php
  query_posts(array(
      'post_type' => 'news'
  ) );
  while (have_posts()) : the_post();
  ?>

  <div class="visible-news date-<?php the_date( 'Y' ); ?> news-post">
    <div class="title"><p><?php the_title(); ?></p></div>

    <div class="date"><p><?php the_date( 'j F, Y' ); ?></p></div>
      </br>
    <div class="content"><p><?php the_field('news_teaser'); ?></p></div>
  </div>

  <?php
  endwhile;
  wp_reset_query();
  ?>

</div>

<?php get_footer(); ?>
