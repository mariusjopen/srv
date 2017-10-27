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

<div class="wrapper <?php print qtrans_getLanguage(); ?>">




  	<div class="header">
  		<div id="header-navigation-welcome" class="header-title">
  			<a href="<?php echo get_home_url(); ?>"><?php echo get_bloginfo( 'name' ); ?></a>
  		</div>



  		<div class=" desktop header-language">
  			<?php wp_nav_menu( array( 'theme_location' => 'header-menu' ) ); ?>
  		</div>
  	</div>





  <div class="news-year">
<div class="news-post-list all active">
<p>  News Archive</p>
</div>
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
      <div class="content"><p><?php the_content(); ?></p></div>
    </div>

    <?php
    endwhile;
    wp_reset_query();
    ?>

  </div>


</div>

<?php get_footer(); ?>
