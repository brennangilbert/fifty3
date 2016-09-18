<?php
/*
 *	Fifty3
 *	Template Name: People
 */

get_header();

/* Show Banner */
get_template_part( 'template-parts/banner' );

while ( have_posts() ) : the_post(); ?>

<section class="no-padding">
	<img src="<?php bloginfo('template_directory');?>/img/fifty3-people-group.gif" alt="Fifty3 Team on Mountain" width="100%">
</section>
<section class="team">
	<div class="wrapper">
		<h2><? the_field('team-headline'); ?></h2>
		<p><? the_field('team-content'); ?></p>
		<? if( have_rows('team_member') ): ?>
			<div class="grid">
				<? while ( have_rows('team_member') ) : the_row(); ?>
					<div class="grid-1-3 square">
						<?
						$photo = get_sub_field('photo');
						$url = $photo['url'];
						$alt = $photo['alt'];
						?>
						<img class="bg" src="<? echo $url ?>" alt="<? echo $alt ?>">
						<div class="caption">
							<h4><? the_sub_field('name'); ?></h4>
							<p><em><? the_sub_field('title'); ?></em></p>
							<p><? the_sub_field('bio'); ?></p>
							<a class="social" href="<? the_sub_field('linkedin_url'); ?>" target="_blank"><i class="fa fa-linkedin-square"></i></a>
							<button class="expand-close"></button>
						</div>
					</div>
				<? endwhile; ?>
			</div>
		<? endif; ?>
	</div>
</section><!-- // .team -->
<section class="jokes">
	<div class="wrapper">
		<h2><? the_field('jokes-headline'); ?></h2>
		<p><? the_field('jokes-content'); ?></p>
		<p id="joke">A steak pun is a rare medium well done.</p>
		<button class="btn">Click Here to Chuckle</button>
	</div>
</section><!-- // .jokes -->
<section class="primary-color">
	<div class="wrapper grid">
		<div class="grid-1-4">
			<img src="<?php bloginfo('template_directory');?>/img/icons/fifty3-icon-coffee-1color.svg" alt="Coffee Icon" width="64px" height="64px">
			<p>On average, our team drinks about 13 cups of coffee or tea a day.</p>
		</div>
		<div class="grid-1-4">
			<img src="<?php bloginfo('template_directory');?>/img/icons/fifty3-icon-spotify-1color.svg" alt="Spotify Icon" width="64px" height="64px">
			<p>Thanks to Spotify, we play about 160 songs in the office per day.</p>
		</div>
		<div class="grid-1-4">
			<img src="<?php bloginfo('template_directory');?>/img/icons/fifty3-icon-movies-1color.svg" alt="Movies Icon" width="64px" height="64px">
			<p>On average, our team averages 4.5 movie quotes per day.</p>
		</div>
		<div class="grid-1-4">
			<img src="<?php bloginfo('template_directory');?>/img/icons/fifty3-icon-texas-1color.svg" alt="Texas Icon" width="64px" height="64px">
			<p>Four of our team members moved to Denver, CO from Austin, TX.</p>
		</div>
	</div>
</section><!-- // .col-3 -->
<section>
	<div class="wrapper">
		<a class="btn" href="<? echo get_page_link(15); ?>"><strong>Contact us</strong> for any inquiries, questions or jokes.</a>
	</div>
</section>

<? endwhile;

get_footer(); ?>