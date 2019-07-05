<?php get_header(); ?>

<aside class="sidebar">
	<?php if ( !function_exists('dynamic_sidebar')
        || !dynamic_sidebar(2) ) : ?>
	<?php endif; ?>
</aside>
<main class="content">
	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
		<h1 class="post-title"><?php the_title(); ?><?php edit_post_link(__('Править'), ' ', ''); ?></h1>
		<?php the_content('<p class="serif">Читать полностью &raquo;</p>'); ?>
	<?php endwhile; endif; ?>
</main>
<?php  include(TEMPLATEPATH."/sidebar.php"); ?>

<?php get_footer(); ?>