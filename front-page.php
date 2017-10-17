<?php get_header(); ?>

<div class="wrapper <?php print qtrans_getLanguage(); ?>">
	<?php include(locate_template('template-header.php')); ?>
	<?php include(locate_template('template-welcome.php')); ?>
	<?php include(locate_template('template-projects.php')); ?>
	<?php include(locate_template('template-team.php')); ?>
	<?php include(locate_template('template-contact.php')); ?>
</div>

<?php get_footer(); ?>
