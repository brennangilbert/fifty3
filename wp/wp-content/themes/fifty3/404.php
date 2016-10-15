<?php
/*
 *	Fifty3
 *	Error 404 Page
 */

get_header();

?>

<section style="padding:110px 0;">
	<div class="wrapper">
		<? the_field('404_options', 'option'); ?>
		<img style="display: block; margin: 1em auto;" src="<? bloginfo('template_directory'); ?>/img/fifty3-404_illustration.svg" alt="404 Error" width="216px">
		<a class="btn" href="<? echo home_url(); ?>">Return Home</a>
	</div>
</section>

<? get_footer(); ?>