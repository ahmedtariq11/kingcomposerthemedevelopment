<?php
/**
 * Products Template
 *
 * @package Advanced WooCommerce Theme
 */

// Current page.



$args = [
	'post_type'      => 'product',
	'posts_per_page' => 4,
	'paged'          => $paged,
	'order'          => 'DESC',
	'post_status'    => 'publish',
];

$the_query = new WP_Query( $args );

?>

	<?php
	if ( $the_query->have_posts() ) {
		?>
		
			<?php
			while ( $the_query->have_posts() ) : $the_query->the_post();
				get_template_part( 'template-parts/front-page/product' );
			endwhile;
			?>
		
		<?php

		
	}
	?>

