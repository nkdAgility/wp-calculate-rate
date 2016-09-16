<?php
 
/*
 
* Plugin Name: WP-Calculate-Rate
 
* Description: Tell Us What Your Shortcode Does
 
* Version: 0.1
 
* Author: MrHinsh
 
* Author URI: https://nkdagility.com
 
*/
 
function nkdCalculate_shortcode($atts) {
   return wpv_condition($atts);
}
add_shortcode('nkd-calculate', 'nkdCalculate_shortcode');

function nkdCalculate_rate_shortcode($atts) {
   return wget_option('my_rate');
}
add_shortcode('nkd-rate', 'nkdCalculate_rate_shortcode');

?>