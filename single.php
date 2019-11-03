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

		<div class="postmetadata">
			<?php the_tags('Tags: ', ', ', '<br />'); ?>
			Posted in <?php the_category(', ') ?> |
			<?php comments_popup_link('No Comments &#187;', '1 Comment &#187;', '% Comments &#187;'); ?>
			<?php comments_template(); ?>
		</div>
<?php endwhile; endif; ?>
	</article>

	<aside><?php get_template_part('inc/sidebar'); ?></aside>
</div>



<?php get_template_part('inc/footer'); ?>

</div><!-- /#wrap -->
<?php wp_footer(); ?>
</body>
</html>
