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
