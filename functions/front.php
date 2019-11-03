<?php
// フロント周り


// body_class()にスラッグ追加 http://terabenote.net/archives/2079/
function pagename_class($classes = '') {
	if (is_page()) {
		$page = get_post(get_the_ID());
		$classes[] = 'page-' . $page->post_name;
		if ($page->post_parent) {
			$classes[] = 'page-' . get_page_uri($page->post_parent) . '-child';
		}
	}
	return $classes;
}
add_filter('body_class', 'pagename_class');



// SNSボタン
function get_snsLink_for_post($url, $title) {
	$encoded_url = rawurlencode($url);
	$encoded_title = rawurlencode(html_entity_decode($title));
	$html = '<ul>';

	// twitter
	$html .= '<li id="content_single_snsBox_twitter"><a href="https://twitter.com/share?url='.$encoded_url.'&text='.$encoded_title.'" onclick="window.open(this.href, \'snsWindowTwitter\', \'width=560, height=480, menubar=no, toolbar=no, scrollbars=yes\'); return false;" rel="nofollow" class="opa"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M24 4.557c-.883.392-1.832.656-2.828.775 1.017-.609 1.798-1.574 2.165-2.724-.951.564-2.005.974-3.127 1.195-.897-.957-2.178-1.555-3.594-1.555-3.179 0-5.515 2.966-4.797 6.045-4.091-.205-7.719-2.165-10.148-5.144-1.29 2.213-.669 5.108 1.523 6.574-.806-.026-1.566-.247-2.229-.616-.054 2.281 1.581 4.415 3.949 4.89-.693.188-1.452.232-2.224.084.626 1.956 2.444 3.379 4.6 3.419-2.07 1.623-4.678 2.348-7.29 2.04 2.179 1.397 4.768 2.212 7.548 2.212 9.142 0 14.307-7.721 13.995-14.646.962-.695 1.797-1.562 2.457-2.549z"/></svg></a></li>';

	// facebook
	$html .= '<li id="content_single_snsBox_facebook"><a href="https://www.facebook.com/sharer/sharer.php?u='.$encoded_url.'" onclick="window.open(this.href, \'snsWindowFacebook\', \'width=560, height=480, menubar=no, toolbar=no, scrollbars=yes\'); return false;" rel="nofollow" class="opa"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M9 8h-3v4h3v12h5v-12h3.642l.358-4h-4v-1.667c0-.955.192-1.333 1.115-1.333h2.885v-5h-3.808c-3.596 0-5.192 1.583-5.192 4.615v3.385z"/></svg></a></li>';

	// はてブ
	$html .= '<li id="content_single_snsBox_hatebu"><a href="https://b.hatena.ne.jp/add?mode=confirm&url='.$encoded_url.'" onclick="window.open(this.href, \'snsWindowHatebu\', \'width=560, height=480, menubar=no, toolbar=no, scrollbars=yes\'); return false;" rel="nofollow" class="opa"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24" height="24" viewBox="0 0 355 300"><g><path d="M280.009,0h70v200.005h-70V0z"/><path d="M215.192,160.596c-11.844-13.239-28.314-20.683-49.443-22.288 c18.795-5.122,32.443-12.616,41.077-22.628c8.593-9.88,12.856-23.292,12.856-40.171c0-13.362-2.922-25.184-8.579-35.397 c-5.805-10.152-14.14-18.276-25.102-24.357c-9.586-5.274-20.98-8.994-34.262-11.188c-13.349-2.126-36.709-3.198-70.231-3.198H0 V298.63h83.976c33.737,0,58.064-1.182,72.94-3.441c14.863-2.337,27.334-6.27,37.428-11.662 c12.484-6.587,22.007-15.964,28.662-28.01c6.698-12.085,10.014-26.02,10.014-41.956 C233.017,191.514,227.079,173.798,215.192,160.596z M75.26,67.27h17.398c20.108,0,33.617,2.267,40.59,6.787 c6.877,4.542,10.388,12.38,10.388,23.547c0,10.745-3.733,18.313-11.118,22.751c-7.483,4.354-21.117,6.562-41.079,6.562H75.26 V67.27z M144.276,237.733c-7.916,4.862-21.557,7.251-40.696,7.251H75.265v-64.949h29.54c19.654,0,33.243,2.475,40.469,7.414 c7.343,4.942,10.955,13.665,10.955,26.191C156.226,224.85,152.263,232.899,144.276,237.733z"/><path class="fill" d="M315.014,220.003c-22.101,0-40.002,17.891-40.002,39.991 c0,22.1,17.902,40.006,40.002,40.006c22.072,0,39.99-17.906,39.99-40.006C355.004,237.894,337.088,220.003,315.014,220.003z"/></g></svg></a></li>';

	// LINE
	$html .= '<li id="content_single_snsBox_line"><a href="https://line.me/R/msg/text/?'.$encoded_title.'%0D%0A'.$encoded_url.'" onclick="window.open(this.href, \'snsWindowLine\', \'width=560, height=480, menubar=no, toolbar=no, scrollbars=yes\'); return false;" rel="nofollow" class="opa"><svg width="24" height="24" xmlns="http://www.w3.org/2000/svg" fill-rule="evenodd" clip-rule="evenodd"><path d="M24 10.304c0-5.369-5.383-9.738-12-9.738-6.616 0-12 4.369-12 9.738 0 4.814 4.269 8.846 10.036 9.608.391.084.922.258 1.057.592.121.303.079.778.039 1.085l-.171 1.027c-.053.303-.242 1.186 1.039.647 1.281-.54 6.911-4.069 9.428-6.967 1.739-1.907 2.572-3.843 2.572-5.992zm-18.988-2.595c.129 0 .234.105.234.234v4.153h2.287c.129 0 .233.104.233.233v.842c0 .129-.104.234-.233.234h-3.363c-.063 0-.119-.025-.161-.065l-.001-.001-.002-.002-.001-.001-.003-.003c-.04-.042-.065-.099-.065-.161v-5.229c0-.129.104-.234.233-.234h.842zm14.992 0c.129 0 .233.105.233.234v.842c0 .129-.104.234-.233.234h-2.287v.883h2.287c.129 0 .233.105.233.234v.842c0 .129-.104.234-.233.234h-2.287v.884h2.287c.129 0 .233.105.233.233v.842c0 .129-.104.234-.233.234h-3.363c-.063 0-.12-.025-.162-.065l-.003-.004-.003-.003c-.04-.042-.066-.099-.066-.161v-5.229c0-.062.025-.119.065-.161l.004-.004.003-.003c.042-.04.099-.066.162-.066h3.363zm-10.442.001c.129 0 .234.104.234.233v5.229c0 .128-.105.233-.234.233h-.842c-.129 0-.234-.105-.234-.233v-5.229c0-.129.105-.233.234-.233h.842zm2.127 0h.008l.012.001.013.001.01.001.013.003.008.003.014.004.008.003.013.006.007.003.013.007.007.004.012.009.006.004.013.011.004.004.014.014.002.002.018.023 2.396 3.236v-3.106c0-.129.105-.233.234-.233h.841c.13 0 .234.104.234.233v5.229c0 .128-.104.233-.234.233h-.841l-.06-.008-.004-.001-.015-.005-.007-.003-.012-.004-.011-.006-.007-.003-.014-.009-.002-.002-.06-.058-2.399-3.24v3.106c0 .128-.104.233-.234.233h-.841c-.129 0-.234-.105-.234-.233v-5.229c0-.129.105-.233.234-.233h.841z"/></svg></a></li>';

	// メール
	$html .= '<li id="content_single_snsBox_mail"><a href="mailto:?subject='.$encoded_title.'&body='.$encoded_url.'" class="opa"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M0 3v18h24v-18h-24zm6.623 7.929l-4.623 5.712v-9.458l4.623 3.746zm-4.141-5.929h19.035l-9.517 7.713-9.518-7.713zm5.694 7.188l3.824 3.099 3.83-3.104 5.612 6.817h-18.779l5.513-6.812zm9.208-1.264l4.616-3.741v9.348l-4.616-5.607z"/></svg></a></li>';

	// note
	$html .= '<li id="content_single_snsBox_note"><a href="https://note.mu/intent/post?url='.$encoded_url.'" onclick="window.open(this.href, \'snsWindowNote\', \'width=560, height=480, menubar=no, toolbar=no, scrollbars=yes\'); return false;" rel="nofollow" class="opa"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="40 35 120 120"><path class="st0" d="M67.2,138.9h65.7V61.2H85.4c-0.3,0-0.9,0.3-1.2,0.6c-5.6,6-11.1,12.1-16.6,18.1c-0.3,0.3-0.5,0.9-0.5,1.5 L67.2,138.9z M139.4,48c3.6,0,6.6,3,6.6,6.6v90.9c0,3.6-2.9,6.6-6.6,6.6H60.6c-3.6,0-6.6-3-6.6-6.6c0-0.7,0-64,0-66.5 c0-2.6,0.8-4.7,2.6-6.6l19.8-21.6c1.7-1.9,3.7-2.7,6.2-2.7H139.4z M80.3,93.8c-2.9,0-5.3-2.4-5.3-5.3c0-2.9,2.4-5.3,5.3-5.3h8.9l0-9 c0-2.9,2.4-5.3,5.3-5.3s5.3,2.4,5.3,5.3v14.2c0,2.9-2.4,5.3-5.3,5.3H80.3z"/></svg></a></li>';

	return $html.'</ul>';
}
