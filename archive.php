<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<?php get_template_part('inc/meta'); ?>
</head>
<body <?php body_class(); ?>>
<div id="wrap">

<?php get_template_part('inc/header'); ?>



<div id="contents">
	<article>
<?php if(have_posts()) : while(have_posts()) : the_post(); ?>
		<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
			<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
			<div class="post_data"><?php the_time("Y年m月j日"); ?></div>
			<div class="mceContentBody"><?php the_content(); ?></div>
		</div>

		<div class="post_navigation">
			<div class="prev"><?php previous_posts_link('&laquo; PREV') ?></div>
			<div class="next"><?php next_posts_link('NEXT &raquo;') ?></div>
		</div>
<?php endwhile; ?>
<?php else : ?>
		<div <?php post_class(); ?>>
			<h2>Nothing found</h2>
		</div>
<?php endif; ?>
	</article>

	<aside><?php get_template_part('inc/sidebar'); ?></aside>
</div>



<?php get_template_part('inc/footer'); ?>

</div><!-- /#wrap -->
<?php wp_footer(); ?>
</body>
</html>
