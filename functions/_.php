<?php
// サイトごとの独自実装

// 名言を出力
function echo_wisdom(){
	$wisdom_array = array(
		"Today is the first day of the rest of your life. - Charles Dederich",
		"You play with the cards you're dealt... Whatever that means. - Snoopy",
		"Life is not fair, get used to it. - Bill Gates",
		"He who moves not forward, goes backward. - Goethe",
		"If you can dream it, you can do it. - Walt Disney",
		"All it takes is courage, imagination... and a little dough. - Charlie Chaplin",
		"The best way to predict the future is to create it. - Peter Drucker",
	);
	$tdow_num = date('w');

	echo $wisdom_array[$tdow_num];
}

// Worksにて制作内容をショートコードで表示
function sc_show_the_parts(){
	global $post;
	$the_terms = '';
	foreach(get_the_terms( $post->ID, 'part' ) as $v){
		if($v->parent !== 0) $the_terms .= $v->name.'・';
	}
	return rtrim($the_terms, '・');
}
add_shortcode('sc_show_the_parts', 'sc_show_the_parts');
