<?php
// 使ったり使わなかったりするもの



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
add_filter('authenticate', 'email_login', 20, 3);

