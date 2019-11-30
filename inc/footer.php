<p id="wisdom">おもしろきこともなき世をおもしろく、すみなしものは心なりけり ･･･ 高杉晋作・野村望東尼</p>

<script>
new WOW({offset: 200}).init();

function obfuscation(s){
	return s.replace(/\w/g, function(o){
		return "madbctnsj10vykqozwi4x93plrgf5687ueh2".charAt("abcdefghijklmnopqrstuvwxyz0123456789".indexOf(o));
	});
}
const tClass = document.getElementsByClassName('dodge');
for (let i = 0; i < tClass.length; i++) {
	tClass[i].textContent = obfuscation(tClass[i].textContent);
}
</script>
<?php wp_footer(); ?>