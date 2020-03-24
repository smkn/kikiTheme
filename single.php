<?php
if(wp_get_current_user()->roles[0] !== 'administrator' && is_singular( 'secret' )){
	wp_redirect( home_url('/404.php') );
	exit;
}
?><!DOCTYPE html>
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
		<h1 class="headlinePage headlineFirst pageTitle" data-pageTitle="<?php echo get_the_title(); ?>"><?php echo get_the_title(); ?></h1>
		<div id="postContent" class="mceContentBody">
			<div class="works_mainImage">
				<picture>
					<?php the_post_thumbnail(); ?>
				</picture>
			</div>

			<div><?php the_content(); ?></div>
		</div>
<?php endwhile; endif; ?>

		<div class="works_relatedPosts">
			<h2 class="headlineSecond headlineSingle">関連する実績</h2>
			<ul class="cardListBox">
<?php
$target_post_type = (wp_get_current_user()->roles[0] === 'administrator')?array('works', 'secret'):'works';
$rand_seed = (int)$post->ID + (int)date('d');
$the_query = new WP_Query(array('posts_per_page' => 3, 'post_type' => $target_post_type, 'orderby' => "RAND($rand_seed)"));
?>
<?php if($the_query->have_posts()) : while($the_query->have_posts()) : $the_query->the_post(); ?>
				<li class="cardListBox_list"><a href="<?php the_permalink(); ?>" class="no-link-effect">
					<p class="cardListBox_list_pattern cardListBox_list_pattern_<?php echo get_the_terms( $post->ID, 'pattern' )[0]->slug; ?>"><?php echo get_the_terms( $post->ID, 'pattern' )[0]->name; ?></p>

					<p class="cardListBox_list_picture">
						<picture>
							<?php the_post_thumbnail('thumb_square'); ?>
						</picture>
					</p>

					<div class="cardListBox_list_content">
						<h3 class="headlineThird"><?php echo get_the_title(); ?></h3>
						<ul class="tagListBox">
			<?php foreach(get_the_terms( $post->ID, 'part' ) as $v) : ?>
							<li class="tagListBox_list"><?php echo $v->name; ?></li>
			<?php endforeach; ?>
						</ul>
					</div>
				</a></li>
<?php endwhile; endif; wp_reset_postdata(); ?>
			</ul>
		</div>
	</section>

	<?php get_template_part('inc/contactlink'); ?>
</div>

</div>
<?php get_template_part('inc/footer'); ?>
</body>
</html>
