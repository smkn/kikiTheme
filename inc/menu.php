<nav id="menu">
	<ul>
		<li<?php if(is_page('aboutus')) echo ' class="current"'; ?>><a href="<?php echo home_url(); ?>/aboutus/">About us</a></li>
		<li<?php if(is_post_type_archive('works') || is_singular('works')) echo ' class="current"'; ?>><a href="<?php echo home_url(); ?>/works/">Works</a></li>
		<li<?php if(is_post_type_archive('services') || is_singular('services')) echo ' class="current"'; ?>><a href="<?php echo home_url(); ?>/services/">Services</a></li>
		<li<?php if(is_page('careers')) echo ' class="current"'; ?>><a href="<?php echo home_url(); ?>/careers/">Careers</a></li>
		<li<?php if(is_page('contact')) echo ' class="current"'; ?>><a href="<?php echo home_url(); ?>/contact/">Contact</a></li>
	</ul>
</nav>
