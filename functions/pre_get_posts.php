<?php
// 各ページのメインループにpre_get_posts利用
function modify_main_query( $query ) {
	if( is_admin() || ! $query->is_main_query() ) return; // 管理画面、メインクエリに干渉しないために必須

	if ( $query->is_author() ) {
		wp_redirect( home_url('/404.php') );
		exit;
	}

	if ( $query->is_category() ) {
		$query->set( 'posts_per_page', '5' );
		return;
	}
//	is_home() // TOPページ
//	is_single() // 詳細ページ
//	is_singular( 'post_type' ) // カスタム投稿詳細ページ
//	is_page() // 固定ページ
//	is_archive() // アーカイブページ
//	is_post_type_archive( 'post_type' ) // カスタム投稿タイプアーカイブページ カスタム投稿タイプを入れてください
//	is_date() // 日付アーカイブページ
//	is_year() // 年別アーカイブページ
//	is_month() // 月別アーカイブページ
//	is_author() // 制作者アーカイブページ
//	is_category() // カテゴリーページ
//	is_category( array(3,'foo','Bar bar') ) // カテゴリーページ 配列での指定(カテゴリID3,カテゴリスラッグfoo,カテゴリ名Bar barのいずれか)
//	is_tag() // タグページ
//	is_tax() // タクソノミーページ
//	is_tax( 'foo' ) // タクソノミーページ fooというスラッグのタクソノミーアーカイブが表示された
//	is_tax( 'foo', array('bar1','bar2') ) // タクソノミーページ bar1,bar2のスラッグがfooタクソノミーアーカイブで表示された時
//	is_search() // 検索結果ページ
//	is_feed() // フィードページ
//	is_404() // 404ページ
}
add_action( 'pre_get_posts', 'modify_main_query' );
