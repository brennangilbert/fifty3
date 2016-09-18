<?php
/*
 *	Fifty3
 *	Template Name: Homepage
 */

get_header();

/* Show Banner */
get_template_part( 'template-parts/banner' );

?>

<section>
	<div class="wrapper grid">
		<div class="grid-1-3">
			<img src="<?php bloginfo('template_directory');?>/img/fifty3-home-illustration-strategy.svg" alt="Strategy Illustration" width="64px" height="64px">
			<h3>Strategy</h3>
			<ul class="no-bullets">
				<li>Multi-Channel Campaigns</li>
				<li>Strategy Consulting</li>
				<li>Photography &amp; Video</li>
			</ul>
		</div>
		<div class="grid-1-3">
			<img src="<?php bloginfo('template_directory');?>/img/fifty3-home-illustration-design.svg" alt="Design Illustration" width="64px" height="64px">
			<h3>Design</h3>
			<ul class="no-bullets">
				<li>Branding Identity</li>
				<li>Website Development</li>
				<li>Marketing Collateral</li>
			</ul>
		</div>
		<div class="grid-1-3">
			<img src="<?php bloginfo('template_directory');?>/img/fifty3-home-illustration-digital.svg" alt="Digital Illustration" width="64px" height="64px">
			<h3>Digital</h3>
			<ul class="no-bullets">
				<li>Pay-Per-Click</li>
				<li>SEO Optimization</li>
				<li>Re-Targeting Advertising</li>
			</ul>
		</div>
	</div>
	<a class="btn" href="<?php echo get_page_link(13); ?>">Our Services</a>
</section><!-- // .col-3 -->
<section class="dark">
	<div class="wrapper">
		<h2>What we <strong>stand</strong> for</h2>
		<p>Fifty3 is a full-service creative company based in Denver, CO. We’re a group of creatives, analysts, strategists, creators, artists, and marketing scientists who have joined forces from all over the country. Specializing in the multi-family housing industry, we offer a variety of services that work hand-in-hand with each other. We’re everything you need in one place.</p>
		<a class="btn" href="<?php echo get_page_link(7); ?>">About Us</a>
	</div>
</section>
<section class="portfolio">
	<div class="wrapper">
		<h2>Check out the <strong>good</strong> stuff</h2>
		<p>We do work that we’re proud to call our own. We’d be honored for you to take a peek at the good stuff.</p>
		<div class="grid">
			<a class="grid-1-3 square" href="#"></a>
			<a class="grid-1-3 square" href="#"></a>
			<a class="grid-1-3 square" href="#"></a>
			<a class="grid-1-3 square" href="#"></a>
			<a class="grid-1-3 square" href="#"></a>
			<a class="grid-1-3 square" href="#"></a>
		</div>
		<a class="btn" href="<?php echo get_page_link(9); ?>">Our Work</a>
	</div>
</section><!-- // .portfolio -->
<section class="no-padding">
	<img src="<?php bloginfo('template_directory');?>/img/fifty3-home-group.gif" alt="Fifty3 Team on Mountain" width="100%">
</section>
<section class="form">
	<div class="wrapper">
		<h2>10 Ways to <strong>Grow Your Brand</strong> in Ways That Others Aren’t</h2>
		<p>We’ll trade you. You send us your info and we’ll send you a free list detailing ways we’ve grown brands that you might not have considered yet.</p>
		<div class="wpcf7">
			<form>
				<p><span><input type="text" name="name" placeholder="NAME"></span></p>
				<p><span><input type="email" name="email" placeholder="EMAIL"></span></p>
				<p><input class="btn" type="submit" name="submit" value="SUBMIT"></p>
			</form>
		</div>
	</div>
</section><!-- // .form -->

<? get_footer(); ?>