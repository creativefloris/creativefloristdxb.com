<?php
/**
* Plugin Name: nsreem
* Plugin URI: https://nsreem.com/
* Description: Created Exclusively for *.creativefloristdxb.com
* Version: 0.1
* Author: Midhun Kallayil Madhavan
* Author URI: https://nsreem.com/
**/

function md_custom_woocommerce_checkout_fields( $fields ) 
{
    $fields['order']['order_comments']['placeholder'] = 'Add your special note';
    $fields['order']['order_comments']['label'] = 'Customer Message';

    return $fields;
}
add_filter( 'woocommerce_checkout_fields', 'md_custom_woocommerce_checkout_fields' );


add_filter( 'woocommerce_states', 'fs_add_uae_emirates' );

function fs_add_uae_emirates( $states ) {
 $states['AE'] = array(
 	'AZ' => __( 'Abu Dhabi', 'woocommerce' ),
 	'AJ' => __( 'Ajman', 'woocommerce' ),
 	'FU'  => __( 'Fujairah', 'woocommerce' ),
 	'SH' => __( 'Sharjah', 'woocommerce' ),
 	'DU'  => __( 'Dubai', 'woocommerce' ),
 	'RK' => __( 'Ras Al Khaimah', 'woocommerce' ),
 	'UQ'  => __( 'Umm Al Quwain', 'woocommerce' ),
 );
 return $states;
}
