<?php
/*
 *	Fifty3
 *	Template Name: About
 */

get_header();

/* Show Banner */
get_template_part( 'template-parts/banner' );

while ( have_posts() ) : the_post(); ?>

<section class="video-bg">
	<video id="auto-video" autoplay muted style="background-image: url('<? bloginfo('template_directory'); ?>/img/fifty3-about-video-placeholder.jpg');">
		<source src="<? bloginfo('template_directory'); ?>/video/fifty3-about-background-no_audio.webm" type="application/webm">
		<source src="<? bloginfo('template_directory'); ?>/video/fifty3-about-background-no_audio.mp4" type="video/mp4">
		<source src="<? bloginfo('template_directory'); ?>/video/fifty3-about-background-no_audio.ogv" type="video/ogv">
	</video>
	<img src="<? bloginfo('template_directory'); ?>/img/fifty3-about-video-placeholder.jpg">
</section>
<section class="how-we-stand-above">
	<div class="wrapper">
		<h2><?php the_field('d-headline'); ?></h2>
		<? if( have_rows('reasons') ): ?>
			<div class="grid">
				<? while ( have_rows('reasons') ) : the_row(); ?>
					<div class="grid-1-3">
						<?
						$icon = get_sub_field('icon');
						$url = $icon['url'];
						$alt = $icon['alt'];
						?>
						<img src="<? echo $url; ?>" alt="<? echo $alt; ?>" width="64px" height="64px">
						<h4><? the_sub_field('headline'); ?></h4>
						<p><? the_sub_field('description'); ?></p>
					</div>
				<? endwhile; ?>
			</div>
		<? endif; ?>
	</div>
</section>
<? if(get_field('def-headline') || the_field('def-description') ) : ?>
	<section class="dark">
		<div class="wrapper">
			<h2><?php the_field('def-headline'); ?></h2>
			<p><?php the_field('def-description'); ?></p>
		</div>
	</section>
<? endif ?>
<section class="reasons">
	<div class="wrapper">
		<h2><?php the_field('53-headline'); ?></h2>
		<?
		$rows = get_field('53-reasons');
		$row_count = count($rows);
		if( have_rows('53-reasons') ):
			$i = 0;
		?>
			<div id="slideshow" class="reason-wrapper">
				<? while ( have_rows('53-reasons') ) : the_row(); ?>
					<?
					if( get_sub_field('image') ) $i++;
						$image = get_sub_field('image');
						$url = $image['url'];
						$alt = $image['alt'];
						$count = $i;
					?>
					<div class="reason not-shown" style="display: none;">
						<img src="<? echo $url; ?>" alt="<? echo $alt; ?>" width="64px" height="64px">
						<p><strong>Reason #<? echo $count; ?>:</strong> <? the_sub_field('content'); ?></p>
					</div>
				<? endwhile; ?>
			</div>
		<? endif; ?>
	</div>
</section>
<section class="map">
	<div class="wrapper">
		<h2><?php the_field('map-headline'); ?></h2>
		<p><?php the_field('map-content'); ?></p>
		<div id="map"></div>
		<? if( get_field('states') ): ?>
			<div class="state-info">
				<? while ( has_sub_field('states') ) :
					$state = get_sub_field_object('state_name');
					$value = get_sub_field('state_name');
					$state_abbr = 'info-' . $value;
					$label = $state['choices'][ $value ];
				?>
					<div id="<? echo $state_abbr ?>">
						<h3><? echo $label ?></h3>
						<div class="grid">

							<? if( have_rows('logos') ):
								while( have_rows('logos') ): the_row();

									echo '<div class="square grid-1-4">';

									if( get_sub_field('logo') ) :

										$image = get_sub_field('logo');
										$url = $image['url'];
										$alt = $image['alt'];

										echo '<img src="' . $url . '" alt="' . $alt . '">';

									endif;
								
									echo '</div>';

								endwhile;
							endif; ?>

						</div><!-- // .grid -->
					</div>
				<? endwhile; ?>
			</div><!-- // .state-info -->
		<? endif; ?>
		<div class="clients">
			<h3><?php the_field('clients-headline'); ?></h3>
			<? if( get_field('client-state') ): ?>
				<div class="grid">
					<? while ( has_sub_field('client-state') ) :
						$state = get_sub_field_object('state');
						$value = get_sub_field('state');
						$label = $state['choices'][ $value ];
					?>
					<div class="grid-1-2 client-state">
						<strong><? echo $label ?></strong>
						<? if( have_rows('property') ):
							echo '<ul>';
							while( have_rows('property') ): the_row(); ?>
								<li><? the_sub_field("name") ?> | <? the_sub_field("city") ?>, <? echo $value ?></li>
							<? endwhile;
							echo '</ul>';
						endif; ?>
					</div>
					<? endwhile; ?>
				</div>
			<? endif; ?>
		</div><!-- // .clients -->
		<?
		if ( stristr( $_SERVER['SERVER_NAME'], 'localhost' ) ) {
			$btnlink = get_page_link(9);
		} else {
			$btnlink = get_page_link(115);
		};
		?>
		<a class="btn" href="<? echo $btnlink; ?>">See Examples of the <strong>Work</strong> We've Done</a>
	</div><!-- // .wrapper -->
</section><!-- // .map -->

<? endwhile;

get_footer(); ?>