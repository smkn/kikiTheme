<?php
// ショートコード集



// ブログ名
function sc_blogname(){
	return get_bloginfo('name');
}
add_shortcode('sc_blogname', 'sc_blogname');



// ブログ名（description付き）
function sc_blogname_in_desc(){
	return get_bloginfo('name').' | '.get_bloginfo('description');
}
add_shortcode('sc_blogname_in_desc', 'sc_blogname_in_desc');



// サイトURL
function sc_blogurl(){
	return home_url('/');
}
add_shortcode('sc_blogurl', 'sc_blogurl');
