<?php
// サイトごとの独自実装



// サブタイトルを返す
function get_subtitle() {
	global $post;
	if($post->post_type === 'page' && $post->post_name === 'about-us'){
		return 'タイトル物きっかけの対象の被引用物は日本権がしある';
	} else if($post->post_type === 'page' && $post->post_name === 'services') {
		return 'タイトル物きっかけの対象の被引用物は日本権がしある';
	} else if($post->post_type === 'page' && $post->post_name === 'partner') {
		return 'タイトル物きっかけの対象の被引用物は日本権がしある';
	} else if($post->post_type === 'page' && $post->post_name === 'contact') {
		return 'タイトル物きっかけの対象の被引用物は日本権がしある';
	} else if($post->post_type === 'works') {
		return 'タイトル物きっかけの対象の被引用物は日本権がしある';
	} else if(is_404()) {
		return '404 Not Found.';
	}
}