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
		<h1 class="headlinePage headlineFirst pageTitle" data-pageTitle="<?php echo ucfirst(str_replace('-', ' ', $post->post_name)); ?>"><?php echo ucfirst(str_replace('-', ' ', $post->post_name)); ?><span><?php echo get_subtitle(); ?></span></h1>
		<p class="paragraph">お客さまのお探しのページは、削除された、名前が変更された、または現在利用できない可能性があります。<br />お手数ですが、<a href="<?php echo home_url(); ?>">トップページ</a>もしくはナビメニューよりお探しください。</p>
	</section>

	<?php get_template_part('inc/contactlink'); ?>
</div>

</div>
<?php get_template_part('inc/footer'); ?>
</body>
</html>
