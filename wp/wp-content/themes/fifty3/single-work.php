<?php
/*
 *	Fifty3
 */

get_header();

/* Show Banner */
get_template_part( 'template-parts/banner' );

while ( have_posts() ) : the_post();

if(get_field('main_image')) :
?>

<section class="no-padding">
	<?
	$main_image = get_field('main_image');
	$url = $main_image['url'];
	$alt = $main_image['alt'];
	?>
	<img src="<? echo $url ?>" alt="<? echo $alt ?>" style="height:auto;width:100%;">
</section>

<? endif;
if(get_field('description')) :
?>

<section>
	<div class="wrapper">
		<h2>The Challenge</h2>
		<? echo the_field('description');

		$terms = get_terms( array(
		    'taxonomy' => 'category',
		    'exclude' => '1 9'
		) );
		                         
		if ( $terms && ! is_wp_error( $terms ) ) :

			echo '<div class="tags">';
		 
		    foreach ( $terms as $term ) {
		        echo '<span class="tag">' . $term->name . '</span>';
		    }

		    echo '</div>';
		 
		endif;
		?>
	</div>
</section>

<? endif; ?>

<section class="portfolio">
	<div class="wrapper">
		<a class="btn" href="<? echo get_page_link(9); ?>">See More <strong>Work</strong> We've Done</a>
	</div>
</section><!-- // .portfolio -->

<? endwhile;

get_footer(); ?>