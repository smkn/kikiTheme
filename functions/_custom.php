<?php
// 使ったり使わなかったりするもの



// OGP出力 https://saruwakakun.com/html-css/wordpress/ogp
function my_meta_ogp($ogp_img = false) {
	$ogp_title = get_bloginfo('description').' | '.get_bloginfo('name');
	$ogp_descr = '株式会社キキバーブは、東京都調布市を拠点に活動するWeb制作会社です。ウェブサイト制作・システム開発・ウェブサービス企画開発・技術顧問についてお困りのことがございましたら、お気軽にお問い合わせください。';
	$ogp_url = home_url('/');
	$ogp_img = get_template_directory_uri().'/img/ogp.png';

	if (is_page()) {
		$ogp_title = get_the_title().' | '.get_bloginfo('name');
		$ogp_descr = get_the_title();
		$ogp_url = get_permalink();
	} elseif(is_post_type_archive()) {
		$ogp_title = esc_html(get_post_type_object(get_post_type())->label).' | '.get_bloginfo('name');
		$ogp_descr = get_bloginfo('name').'の'.esc_html(get_post_type_object(get_post_type())->label).'ページです。';
		$ogp_url = home_url('/').get_post_type_object(get_post_type())->name.'/';
	} elseif(is_single()) {
		global $post;
		$ogp_title = get_the_title().' | '.get_bloginfo('name');
		$ogp_descr = get_the_excerpt().' | '.get_bloginfo('name');
		$ogp_url = get_permalink();
		$ogp_img = get_the_post_thumbnail_url($post->ID, 'thumb_ogp');
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



// カスタムメニュー機能の導入
add_theme_support('menus');
//// カスタムメニューの初期設定
function cmenu_setup(){
	register_nav_menus( array(
		'global' => 'グローバルナビ',
		'footer' => 'フッターナビ',
		'database_menu' => '業界DBメニュー',
	));
}
//add_action( 'after_setup_theme', 'cmenu_setup' );



// 管理者以外は管理画面に進入禁止
function subscriber_go_to_home(){
	if( ! current_user_can('administrator')){
		wp_redirect(get_home_url());
		exit();
	}
}
//add_action('auth_redirect', 'subscriber_go_to_home');



// ログインIDをメアドに固定
function email_login( $user, $username, $password ) {
	$user = get_user_by('email', $username);
	if(!empty($user->user_login)) {
		$username = $user->user_login;
	} else {
		$username = '';
	}
	return wp_authenticate_username_password( null, $username, $password );
}
//add_filter('authenticate', 'email_login', 20, 3);



// 抜粋文の文字数制限を撤回
function twpp_change_excerpt_length( $length ) {
	return 9999;
}
add_filter( 'excerpt_length', 'twpp_change_excerpt_length', 999 );