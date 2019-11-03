<?php
// meta系



// タイトルタグ出力
add_theme_support('title-tag');

//// 区切り線変更
function custom_title_separator($sep){
	$sep = '|';
	return $sep;
}
add_filter('document_title_separator', 'custom_title_separator');

//// トップ以外キャッチフレーズの付与停止
function remove_tagline($title){
	if(is_front_page() || is_home()) $title['title'] = $title['title'].' | '.$title['tagline'];
	if(isset($title['tagline'])) unset($title['tagline']);
	return $title;
}
add_filter('document_title_parts', 'remove_tagline');



// RSS出力
add_theme_support('automatic-feed-links');



// OGP出力 https://saruwakakun.com/html-css/wordpress/ogp
function my_meta_ogp($ogp_img = false) {
	$ogp_title = get_bloginfo('description').' | '.get_bloginfo('name');
	$ogp_descr = '「'.get_bloginfo('name').'」は、'.get_bloginfo('description').'です。';
	$ogp_url = home_url('/');
	$ogp_img = ($ogp_img === false)?get_template_directory_uri().'/img/ogp.png':$ogp_img;

	if (is_page()) {
		$ogp_title = get_the_title().' | '.get_bloginfo('name');
		$ogp_descr = get_bloginfo('description').'「'.get_bloginfo('name').'」の'.get_the_title().'のページです。';
		$ogp_url = get_permalink();
	} elseif(is_post_type_archive()) {
		$ogp_title = esc_html(get_post_type_object(get_post_type())->label).' | '.get_bloginfo('name');
		$ogp_descr = get_bloginfo('description').'「'.get_bloginfo('name').'」の'.esc_html(get_post_type_object(get_post_type())->label).'ページです。';
		$ogp_url = home_url('/').get_post_type_object(get_post_type())->name.'/';
	} elseif(is_single()) {
		$ogp_title = get_the_title().' | '.get_bloginfo('name');
		$ogp_descr = get_the_excerpt().' | '.get_bloginfo('name');
		$ogp_url = get_permalink();
	}

	$ogp_type = ( is_front_page() || is_home() ) ? 'website' : 'article';
	$ogp_site_name = get_bloginfo('description').' | '.get_bloginfo('name');
	$insert = '';
	$insert .= '<meta property="og:locale" content="ja_JP">' . "\n";
	$insert .= '<meta property="og:type" content="'.$ogp_type.'">' . "\n";
	$insert .= '<meta property="og:site_name" content="'.esc_attr($ogp_site_name).'">' . "\n";
	$insert .= '<meta property="og:title" content="'.esc_attr($ogp_title).'">' . "\n";
	$insert .= '<meta property="og:description" content="'.esc_attr($ogp_descr).'">' . "\n";
	$insert .= '<meta property="og:url" content="'.esc_url($ogp_url).'">' . "\n";
	$insert .= '<meta property="og:image" content="'.esc_url($ogp_img).'">' . "\n";
	$insert .= '<meta name="twitter:card" content="summary_large_image">' . "\n";

	echo $insert;
}
add_action('wp_head', 'my_meta_ogp');



// 適宜description生成
function get_description() {
	$description = '';
	if (is_home()) {
		$description = get_bloginfo('name').'は、'.get_bloginfo('description').'です。';
	} elseif(is_page()) {
		$description = '「'.get_bloginfo('name').'」の'.get_the_title().'のページです。';
	} elseif(is_post_type_archive()) {
		$description = '「'.get_bloginfo('name').'」の'.esc_html(get_post_type_object(get_post_type())->label).'ページです。';
	} elseif(is_single()) {
		$description = get_the_excerpt().' | '.get_bloginfo('name');
	}
	return $description;
}



// ヘッダー整理
remove_action('wp_head', 'adjacent_posts_rel_link_wp_head');
remove_action('wp_head', 'index_rel_link');
remove_action('wp_head', 'rel_canonical');
remove_action('wp_head', 'rsd_link');
remove_action('wp_head', 'wlwmanifest_link');
remove_action('wp_head', 'wp_generator');
remove_action('wp_head', 'wp_shortlink_wp_head');
remove_action('wp_head', 'feed_links', 2);
remove_action('wp_head', 'feed_links_extra', 3);
remove_action('wp_head', 'parent_post_rel_link', 10, 0);
remove_action('wp_head', 'start_post_rel_link', 10, 0);
