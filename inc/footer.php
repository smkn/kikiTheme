<p id="wisdom"><?php echo_wisdom(); ?></p>

<script>
new WOW({offset: 200}).init();

document.getElementById('header_btn_menu_button').addEventListener('click', function(){
	if(window.matchMedia('screen and (max-width: 767px)').matches){
		document.getElementById('menu').style.left = '0';
	};
}, false);
document.getElementById('header_btn_menu_close').addEventListener('click', function(){
	if(window.matchMedia('screen and (max-width: 767px)').matches){
		document.getElementById('menu').style.left = '-100vw';
	};
}, false);

<?php if(is_page('about-us')) : ?>
function obfuscation(s){
	return s.replace(/\w/g, function(o){
		return "madbctnsj10vykqozwi4x93plrgf5687ueh2".charAt("abcdefghijklmnopqrstuvwxyz0123456789".indexOf(o));
	});
}
const tClass = document.getElementsByClassName('dodge');
for (let i = 0; i < tClass.length; i++) {
	tClass[i].textContent = obfuscation(tClass[i].textContent);
}
<?php endif; ?>
<?php if(is_page('services')) : ?>
window.addEventListener('load', function(){
	const urlHash = location.hash.substring(1);
	let headHeight = 0;
	if(window.matchMedia('screen and (min-width: 768px)').matches) {
		headHeight = document.getElementById('menu').offsetHeight;
	} else if(window.matchMedia('screen and (max-width: 767px)').matches) {
		headHeight = document.getElementById('header_inbox').offsetHeight;
	}
	const spaceHeight = 50 + headHeight;

	setTimeout(function(){
		if(urlHash) window.scrollBy(0, -(spaceHeight));
	}, 50);
}, false);
<?php endif; ?>
</script>
<?php wp_footer(); ?>