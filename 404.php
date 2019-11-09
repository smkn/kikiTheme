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
		<h1 class="headlinePage headlineFirst pageTitle" data-pageTitle="404">404 Not Found<span>お探しのページが見つかりませんでした</span></h1>
		<p class="paragraph">株式会社キキバーブのホームページをご覧いただき、ありがとうございます。<br />指定されたページは削除された、名前が変更された、または現在利用できない可能性があります。<br />お手数ですが、<a href="<?php echo home_url(); ?>">トップページ</a>もしくはナビメニューよりお探しください。</p>
	</section>

	<?php get_template_part('inc/contactlink'); ?>
</div>

</div>
<?php get_template_part('inc/footer'); ?>
</body>
</html>
