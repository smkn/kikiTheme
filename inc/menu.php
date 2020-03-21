<nav id="menu">
	<p id="header_btn_menu_close" class="sp_only"><button><span></span></button></p>
	<ul>
		<li<?php if(is_page('about-us')) echo ' class="current"'; ?>><a href="<?php echo home_url(); ?>/about-us/">About us</a></li>
		<li<?php if(is_page('services')) echo ' class="current"'; ?>><a href="<?php echo home_url(); ?>/services/">Services</a></li>
		<li<?php if(is_post_type_archive('works') || is_singular('works')) echo ' class="current"'; ?>><a href="<?php echo home_url(); ?>/works/">Works</a></li>
		<li<?php if(is_page('partner')) echo ' class="current"'; ?>><a href="<?php echo home_url(); ?>/partner/">Partner</a></li>
		<li<?php if(is_page('contact')) echo ' class="current"'; ?>><a href="<?php echo home_url(); ?>/contact/">Contact</a></li>
	</ul>
</nav>
