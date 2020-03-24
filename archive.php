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
		<h1 class="headlinePage headlineFirst pageTitle" data-pageTitle="Works">Works<span>WordPressを活用した企業サイトやウェブサービスの制作を中心に、ECサイトやLPなど多様な実績がございます</span></h1>
	<?php if(!is_paged()) : ?>
		<p class="paragraph"><strong>コーポレートサイト</strong>、<strong>メディアサイト</strong>、<strong>LP</strong>、<strong>ウェブサービス開発</strong>など、<strong>株式会社キキバーブの制作実績、構築事例</strong>をご紹介致します。<br /><br />
		2011年に個人事業として創業以来、上流工程の企画段階から実装までお客様と共に作り上げていったプロジェクトから、月間数百万PVの巨大サービスの新規コンテンツページ制作、地場企業のお問い合わせフォーム設置、ASPを使用したECサイトの構築など、多種多様なご依頼を頂いて参りました。<br /><br />
		また、文字化けを修復するウェブアプリケーションや月平均25万円以上を売り上げるアフィリエイトサイトなどを自社で運営しており、それらの制作や運営で得た知見は余すこと無くクライアントワークに還元しています。</p>
	<?php endif; ?>

		<ul class="cardListBox wow fadeInUp" style="visibility: hidden;">
	<?php if(have_posts()) : while(have_posts()) : the_post(); ?>
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
			<?php if($v->parent === 0) : ?>
						<li class="tagListBox_list"><?php echo $v->name; ?></li>
			<?php endif; ?>
		<?php endforeach; ?>
					</ul>
				</div>
			</a></li>
	<?php endwhile; endif; ?>
		</ul>

		<div class="post_navigation">
			<div class="prev"><?php previous_posts_link('&laquo; PREV') ?></div>
			<div class="next"><?php next_posts_link('NEXT &raquo;') ?></div>
		</div>
	</section>

	<?php get_template_part('inc/contactlink'); ?>
</div>

</div>
<?php get_template_part('inc/footer'); ?>
</body>
</html>
