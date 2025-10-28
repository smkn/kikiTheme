<?php
// 各ページのメインループにpre_get_posts利用
function modify_main_query( $query ) {
	if( is_admin() || ! $query->is_main_query() ) return; // 管理画面、メインクエリに干渉しないために必須

	if ( $query->is_author() ) {
		wp_redirect( home_url('/404.php') );
		exit;
	}

	if ( $query->is_post_type_archive( 'works' ) ) {
		$query->set( 'posts_per_page', 15 );
		if(is_user_logged_in()){
			$query->set( 'post_type', array('works', 'secret') );
			return;
		}
	}

	if ( $query->is_post_type_archive( 'secret' ) ) {
		$query->set( 'posts_per_page', 15 );
		if(! is_user_logged_in()){
			wp_redirect( home_url('/404.php') );
			exit;
		}
	}

	if ( $query->is_tax() ) {
		$query->set( 'post_type', 'works' );
		return;
	}
}
add_action( 'pre_get_posts', 'modify_main_query' );
