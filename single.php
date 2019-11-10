<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<?php get_template_part('inc/meta'); ?>
</head>
<body <?php body_class(); ?>>
<div id="wrap">

<?php get_template_part('inc/header'); ?>

<div id="content">
	<?php get_template_part('inc/menu'); ?>

	<section class="content_sectionBox">
<?php if(have_posts()) : while(have_posts()) : the_post(); ?>
		<h1 class="headlinePage headlineFirst pageTitle" data-pageTitle="<?php echo ucfirst(str_replace('-', ' ', $post->post_name)); ?>"><?php echo get_the_title(); ?></h1>

		<div class="paragraph mceContentBody"><?php the_content(); ?></div>
<?php endwhile; endif; ?>
	</section>

	<?php get_template_part('inc/contactlink'); ?>
</div>

</div>
<?php get_template_part('inc/footer'); ?>
</body>
</html>
