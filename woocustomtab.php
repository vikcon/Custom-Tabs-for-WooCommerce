<?php
add_filter( 'woocommerce_product_tabs', 'woo_extra_product_tab' );
function woo_extra_product_tab( $tabs ) {

	// Adds the new tab

	$tabs['extra_tab'] = array(
		'title' 	=> __( 'Book Resources', 'woocommerce' ),
		'priority' 	=> 60,
		'callback' 	=> 'woo_extra_product_tab_content'
	);
	return $tabs;

}
function woo_extra_product_tab_content() {

	// The new tab content

	echo '<h2>External Resources</h2>';
  //Your content here
}


// For additional tabs, create different functions like 

<?php
add_filter( 'woocommerce_product_tabs', 'woo_video_product_tab' );
function woo_video_product_tab( $tabs ) {

	// Adds the new tab

	$tabs['video_tab'] = array(
		'title' 	=> __( 'Video Overview', 'woocommerce' ),
		'priority' 	=> 60,
		'callback' 	=> 'woo_video_product_tab_content'
	);
	return $tabs;

}
function woo_video_product_tab_content() {

	// The new tab content
	echo '<h2>Video Review</h2>';
  //YouTube video integration
  // Here I have used ACF plugin to get video ID & showing it different tab
  ?>
  <iframe width="560" height="315" src="https://www.youtube.com/embed/<?php the_field('video_embed_code');?>" frameborder="0" allowfullscreen></iframe>
  <?php
}
?>

?>
