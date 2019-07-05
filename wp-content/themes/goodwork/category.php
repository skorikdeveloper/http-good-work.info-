<?php get_header(); ?>

<main class="content">
	<?php  include(TEMPLATEPATH."/sidebar.php"); ?>
	<h1 class="post-title" ><?php single_cat_title(''); ?></h1>
	<?php if (have_posts()) : ?>
		<?php while (have_posts()) : the_post(); ?>
			<div class="post">
			
				<h2 class="post-title"><a href="<?php the_permalink() ?>"><?php the_title(); ?></a><?php edit_post_link(__('Править'), ' ', ''); ?></h2>
				<span class="date"><?php the_time('d.m.Y') ?></span>
				
				<?php the_content('Читать полностью &raquo;'); ?>

			</div>
		<?php endwhile; ?>
		
		<!-- navigation -->
		<div class="wp-nav">
		<table class="wp-nav-bg"><tr><td class="wp-nav-left"></td><td class="wp-nav-center">
		<?php if(function_exists('wp_pagenavi')) { wp_pagenavi(); } ?>
		</td><td class="wp-nav-right"></td></tr></table>
		</div>
		<!-- navigation -->		

	<?php else : endif; ?>	
</main>

<?php get_footer(); ?>