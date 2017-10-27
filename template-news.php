<div id="news" class="container">

  <div class="news-list">
    <div class="news-list-inside"><?php the_field('news_navigation_title'); ?></div>
    <div class="news-list-inside"><?php the_field('news_archive_title'); ?></div>
  </div>

  <div class="news-text">

    <?php
	$args = array( 'numberposts' => '1' );
	$recent_posts = wp_get_recent_posts( $args );
	foreach( $recent_posts as $recent ){
  ?>
		<div class="title"><?php echo $recent["post_title"];  ?></div>

    <div class="date"><?php echo $recent["post_date"];  ?></div>

    <div class="content"><?php echo $recent["post_content"];  ?></div>

  <?php
	}
	wp_reset_query();
?>

  </div>

</div>
