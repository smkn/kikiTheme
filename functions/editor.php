<?php
// エディタ系



// ビジュアルエディタにCSSを当てる(reset.cssとstyle.css)
add_editor_style(array('css/reset.css', 'style.css'));



// ビジュアルエディタのキャッシュ避け
function extend_tiny_mce_before_init( $mce_init ) {
	$mce_init['cache_suffix'] = 'v='.time();
	return $mce_init;
}
add_filter('tiny_mce_before_init', 'extend_tiny_mce_before_init');



// アイキャッチ機能
//add_theme_support('post-thumbnails');



// サムネイルサイズ設定
add_image_size('thumb_square', 600, 9999, false);
add_image_size('thumb_retina', 1600, 9999, false);
add_image_size('thumb_ogp', 1200, 630, true);



// 動画URL投稿時、自動でwrap用タグを付与
function addclass_embed_content($code){
	return '<div class="embed_content">' . $code . '</div>';
}
add_filter('embed_handler_html', 'addclass_embed_content');
add_filter('embed_oembed_html', 'addclass_embed_content');



// ビジュアルエディタからh1とh2を削除
function custom_editor_settings( $initArray ){
	$initArray['block_formats'] = "見出し1=h2; 見出し2=h3; 見出し3=h4; 整形済みテキスト=pre";
	return $initArray;
}
add_filter( 'tiny_mce_before_init', 'custom_editor_settings' );



// 管理画面の投稿系ページのbodyにステータス付与
function add_user_status_class( $admin_body_class ) {
	$admin_body_class .= 'poststatus-'.get_post_status();
	return $admin_body_class;
}
add_filter( 'admin_body_class', 'add_user_status_class' );
