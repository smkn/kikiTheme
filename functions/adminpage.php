<?php
// 管理画面系



// カテゴリーの階層構造がずれるのを防止 http://liginc.co.jp/programmer/archives/2931
function wp_category_terms_checklist_no_top( $args, $post_id = null ) {
	$args['checked_ontop'] = false;
	return $args;
}
add_action( 'wp_terms_checklist_args', 'wp_category_terms_checklist_no_top' );



// 管理者以外は管理バーを非表示にする
if (!current_user_can('administrator')) {
	add_filter('show_admin_bar', '__return_false');
}



// 他の人の投稿を見れないようにする http://wpcj.net/1482
function pre_get_author_posts( $query ) {
	if ( is_admin() && !current_user_can('administrator') && $query->is_main_query() ) {
		$query->set( 'author', get_current_user_id() );
		unset($_GET['author']);
	}
}
add_action( 'pre_get_posts', 'pre_get_author_posts' );



// 他のユーザーがアップした画像を見せないように
function display_only_self_uploaded_medias( $query ) {
	if(($user = wp_get_current_user()) && !current_user_can('administrator')) $query['author'] = $user->ID;
	return $query;
}
add_action( 'ajax_query_attachments_args', 'display_only_self_uploaded_medias' );



// 寄稿者にメディアアップロード権限を付与
function contributor_has_upload_files( $allcaps ) {
	if ( isset( $allcaps['contributor'] ) ) {
		$allcaps['upload_files'] = true;
	}
	return $allcaps;
}
add_filter( 'user_has_cap', 'contributor_has_upload_files' );



// ユーザープロフィールの不要な項目を非表示に
function user_profile_hide_script( $hook ) {
$script = <<<SCRIPT
jQuery(function($) {
	$('label[for=first_name]').parents('tr').hide();
	$('label[for=last_name]').parents('tr').hide();
	$('label[for=url]').parents('tr').hide();
});
SCRIPT;
wp_add_inline_script( 'jquery-core', $script );
}
add_action( 'admin_enqueue_scripts', 'user_profile_hide_script' );



// 管理者以外に余計な管理画面項目を見せない
function hide_menu() {
	if(!current_user_can('administrator')){
		remove_menu_page( 'edit.php' );
		remove_menu_page( 'upload.php' );
		remove_menu_page( 'edit.php?post_type=page' );
		remove_menu_page( 'edit-comments.php' );
		remove_menu_page( 'themes.php' );
		remove_menu_page( 'plugins.php' );
		remove_menu_page( 'users.php' );
		remove_menu_page( 'profile.php' );
		remove_menu_page( 'tools.php' );
		remove_menu_page( 'options-general.php' );
	}
}
add_action('admin_menu', 'hide_menu');



// 管理者以外に余計な管理画面項目に入れさせない
function disallow_enter_profile() {
	if(!current_user_can('administrator') && (
		strpos($_SERVER['SCRIPT_NAME'], '/wp-admin/profile.php') !== false ||
		strpos($_SERVER['SCRIPT_NAME'], '/wp-admin/user-edit.php') !== false ||
		strpos($_SERVER['SCRIPT_NAME'], '/wp-admin/media-new.php') !== false ||
		strpos($_SERVER['SCRIPT_NAME'], '/wp-admin/edit-comments.php') !== false ||
		strpos($_SERVER['SCRIPT_NAME'], '/wp-admin/upload.php') !== false
	)) {
		wp_redirect( admin_url() );
		exit();
	}
}
add_action( 'admin_init', 'disallow_enter_profile' );



// 管理者以外に余計なツールバー項目を表示させない
function remove_bar_menus( $wp_admin_bar ) {
 	if(!current_user_can('administrator')){
		$wp_admin_bar->remove_menu( 'wp-logo' );
//		$wp_admin_bar->remove_menu( 'site-name' );
		$wp_admin_bar->remove_menu( 'view-site' );
		$wp_admin_bar->remove_menu( 'dashboard' );
		$wp_admin_bar->remove_menu( 'themes' );
		$wp_admin_bar->remove_menu( 'customize' );
		$wp_admin_bar->remove_menu( 'comments' );
		$wp_admin_bar->remove_menu( 'updates' );
		$wp_admin_bar->remove_menu( 'view' );
		$wp_admin_bar->remove_menu( 'new-content' );
		$wp_admin_bar->remove_menu( 'new-post' );
		$wp_admin_bar->remove_menu( 'new-media' );
		$wp_admin_bar->remove_menu( 'new-link' );
		$wp_admin_bar->remove_menu( 'new-page' );
		$wp_admin_bar->remove_menu( 'new-user' );
//		$wp_admin_bar->remove_menu( 'my-account' );
		$wp_admin_bar->remove_menu( 'user-info' );
		$wp_admin_bar->remove_menu( 'edit-profile' );
//		$wp_admin_bar->remove_menu( 'logout' );
		$wp_admin_bar->remove_menu( 'search' );
	}
}
add_action('admin_bar_menu', 'remove_bar_menus', 201);

 // 管理者以外にダッシュボードウィジェットを削除
function remove_dashboard_widget() {
 	if(!current_user_can('administrator')){
		remove_meta_box( 'dashboard_right_now', 'dashboard', 'normal' ); // 概要
	 	remove_meta_box( 'dashboard_activity', 'dashboard', 'normal' ); // アクティビティ
	 	remove_meta_box( 'dashboard_quick_press', 'dashboard', 'side' ); // クイックドラフト
	 	remove_meta_box( 'dashboard_primary', 'dashboard', 'side' ); // WordPressニュース
	}
}
add_action('wp_dashboard_setup', 'remove_dashboard_widget' );

