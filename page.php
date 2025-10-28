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
		<h1 class="headlinePage headlineFirst pageTitle" data-pageTitle="<?php echo ucfirst(str_replace('-', ' ', $post->post_name)); ?>"><?php echo ucfirst(str_replace('-', ' ', $post->post_name)); ?><span><?php echo get_the_title(); ?></span></h1>

		<div id="postContent"><?php the_content(); ?></div>
<?php endwhile; endif; ?>
	</section>

	<?php get_template_part('inc/contactlink'); ?>
</div>

</div>
<?php get_template_part('inc/footer'); ?>
<?php if(is_page('contact')) : ?>
<script>
const query = window.location.search.substring(6);
if(query){
	const obj = document.getElementById('type');
	if(query === 'outsource'){
		obj.value = 'パートナー募集（外注先をお探しの方）';
	} else if(query === 'resource') {
		obj.value = 'パートナー募集（リソースをご提供いただける方）';
	}
}
</script>
<?php endif; ?>
<?php if(is_page('resource')) : ?>
<script>
const obj = document.getElementsByClassName('mw_wp_form_confirm');
if(obj){
	const el = document.getElementById("resource_wanted_lists");
	el.style.display = "none";
}
</script>
<?php endif; ?>
</body>
</html>
