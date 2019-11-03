<?php
// プラグインに由来する設定



// WP Multibyte Patch経由でのexcerptの省略文字の変更
function new_excerpt_more($more) {
	return '･･･';
}
add_filter('excerpt_more', 'new_excerpt_more');

// WP Multibyte Patch経由でのexcerptの表示文字数の変更
function new_excerpt_mblength($length) {
	return 120;
}
add_filter('excerpt_mblength', 'new_excerpt_mblength');



// ACF
// ACFで投稿オブジェクトを設定した際、自分の投稿以外を表示させない
function my_post_object_query($args){
	$args['author'] = get_current_user_id();
	return $args;
}
add_filter('acf/fields/post_object/query/name=対象スタジオ', 'my_post_object_query', 10, 3);

// ACFのフィールド名からfield_keyを取得 http://takuminpc.blogspot.jp/2017/10/advanced-custom-fields-fieldkey.html
function get_acf_field_key($field_name){
	global $wpdb;
	$acf_fields = $wpdb->get_results($wpdb->prepare("SELECT post_name FROM {$wpdb->posts} WHERE post_excerpt = %s AND post_type = 'acf-field'", $field_name));
	if(is_null($acf_fields)) return false;
	return $acf_fields[0]->post_name;
}

// ACFツールバーの種類に「Simple」という項目を追加
function my_acf_toolbars($toolbars) {
	$toolbars['Simple' ] = array();
	$toolbars['Simple'][1] = array('formatselect', 'bold', 'italic', 'strikethrough', 'hr', 'bullist', 'undo', 'redo');

	return $toolbars;
}
add_filter('acf/fields/wysiwyg/toolbars' , 'my_acf_toolbars');
