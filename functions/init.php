<?php
// 初期設定
/*
wp-config.phpに下記追加（エラーログ保持）https://kiraba.jp/post-mny7bdcn/
define('WP_DEBUG', true);
define('WP_DEBUG_LOG', true);
*/



// テーマフォルダ直下にheader.php/footer.php/sidebar.phpが無いと発生するエラー（wp-includes\functions.php on line 4592）を回避してdebug.logに追記させない
add_filter( 'deprecated_file_trigger_error', '__return_false' );



// 独自関数
function h($str){
	return htmlspecialchars($str, ENT_QUOTES, 'UTF-8');
}

function v(){
	$dumperArray = func_get_args();
	foreach($dumperArray as $v){
		echo '<pre style="background:#f9f9f9;color:#333;border:1px solid #ccc;margin:0.5em;padding:0.5em;font-size:0.8em;letter-spacing:2px">'."\n";
		var_dump($v);
		echo '</pre>'."\n";
	}
}



// セルフピンバック禁止
function no_self_ping(&$links){
	$home = home_url();
	foreach($links as $l => $link){
		if(strpos($link, $home) === 0) unset($links[$l]);
	}
}
add_action('pre_ping', 'no_self_ping');



// 記事の自動整形を無効にする
function override_mce_options( $init_array ) {
	$init_array['indent'] = true;
	$init_array['wpautop'] = false;
	$init_array['tadv_noautop'] = true;
	return $init_array;
}
add_filter( 'tiny_mce_before_init', 'override_mce_options' );
remove_filter('the_content', 'wptexturize');
remove_filter('the_content', 'wpautop');
remove_filter('the_excerpt', 'wpautop');



// コメント系とユーザー系のREST APIを停止
function nendebcom_deny_restapi_except_embed( $result, $wp_rest_server, $request ){
	$namespaces = $request->get_route();
	if( strpos( $namespaces, '/comments' ) !== false || strpos( $namespaces, '/users' ) !== false){
		return new WP_Error( 'rest_disabled', __( 'The REST API on this site has been disabled.' ), array( 'status' => rest_authorization_required_code() ) );
	}
	return $result;
}
add_filter( 'rest_pre_dispatch', 'nendebcom_deny_restapi_except_embed', 10, 3 );



// RSSの<generator>を削除
remove_action('rss2_head', 'the_generator');

// RSSのキャッシュを無効化
function do_not_cache_feeds(&$feed) {
	$feed->enable_cache(false);
}
add_action( 'wp_feed_options', 'do_not_cache_feeds' );
