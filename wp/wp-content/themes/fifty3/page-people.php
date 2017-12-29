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
	<?php
	$banner_img = get_field('banner_image');
	$b_url = $banner_img['url'];
	$b_alt = $banner_img['alt'];

	if(get_field('banner_image')) { ?>
		<img src="<?php echo $b_url ?>" alt="<?php echo $b_alt ?>" width="100%">
	<?php } else { ?>
		<img src="<?php bloginfo('template_directory');?>/img/fifty3-people-group.gif" alt="Fifty3 Team on Mountain" width="100%">
	<?php }; ?>
</section>
<section class="team">
	<div class="wrapper">
		<h2><?php the_field('team-headline'); ?></h2>
		<p><?php the_field('team-content'); ?></p>
		<?php if( have_rows('team_member') ): ?>
			<div class="grid">
				<?php while ( have_rows('team_member') ) : the_row(); ?>
					<div class="grid-1-3 square">
						<?php
						$photo = get_sub_field('photo');
						$url = $photo['url'];
						$alt = $photo['alt'];
						$video = get_sub_field('video');
						?>
						<div class="caption">
							<h4><?php the_sub_field('name'); ?></h4>
							<p><em><?php the_sub_field('title'); ?></em></p>
							<p><?php the_sub_field('bio'); ?></p>
							<?php if(get_sub_field('linkedin_url')) { ?>
								<a class="social" href="<?php the_sub_field('linkedin_url'); ?>" target="_blank"><i class="fa fa-linkedin-square"></i></a>
							<?php }; ?>
							<button class="expand-close"></button>
						</div>
						<img class="bg" src="<?php echo $url ?>" alt="<?php echo $alt ?>">
						<?php
						if( $video ) {
						?>
							<video loop muted>
	      						<source src="<?php echo $video; ?>" type="video/mp4">
	      					</video>
	      					<script>
	      						var figure = $(".square").hover( hoverVideo, hideVideo );
								function hoverVideo(e) {  
								    $('video', this).get(0).play(); 
								}
								function hideVideo(e) {
								    $('video', this).get(0).pause(); 
								}
	      					</script>
      					<?php }; ?>
					</div>
				<?php endwhile; ?>
			</div>
		<?php endif; ?>
	</div>
</section><!-- // .team -->
<section class="jokes">
	<div class="wrapper">
		<h2><?php the_field('jokes-headline'); ?></h2>
		<p><?php the_field('jokes-content'); ?></p>
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
		<a class="btn" href="<?php echo get_page_link(15); ?>"><strong>Contact us</strong> for any inquiries, questions or jokes.</a>
	</div>
</section>

<?php endwhile;

get_footer(); ?>