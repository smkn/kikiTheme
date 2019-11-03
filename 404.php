<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<?php get_template_part('inc/meta'); ?>
</head>
<body <?php body_class(); ?>>
<div id="wrap">

<?php get_template_part('inc/header'); ?>



<div id="contents">
	<article class="pnf_404">
		<h2>Error 404 - Page Not Found</h2>
	</article>

	<aside><?php get_template_part('inc/sidebar'); ?></aside>
</div>



<?php get_template_part('inc/footer'); ?>

</div><!-- /#wrap -->
<?php wp_footer(); ?>
</body>
</html>
