<?php
/**
* Plugin Name: Woocommerce Schema Editor
* Plugin URI: https://github.com/logiaking/woocommerce-force-aggregaterating-schema-plugin
* Description: A plugin to extend Schema.org data.
* Version: 1.0
* Author: LogiaKing
* Author URI: https://github.com/logiaking
**/


//Change AggregateRating data
add_filter( 'woocommerce_structured_data_product', 'custom_piece' );

function custom_piece( $data ) {
	$data['aggregateRating'][] = array (
	      "@type"=>"AggregateRating",
	      "ratingValue"=>"5",
	      "bestRating"=>"5",
	      "worstRating"=>"1",
	      "reviewCount"=>"12",
	      "author"=>"Google"
	); 
    return $data;
}
