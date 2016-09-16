<?php
 
/*
* Plugin Name: nkdAgility Rate Calculator
* Description: Tell Us What Your Shortcode Does
* Version: 0.6
* Author: MrHinsh
* Author URI: https://nkdagility.com
*/
function nkdCalculate_shortcode($atts) {
    $result = wpv_do_shortcode($atts);
    $result = eval("return $result;");
    return $result;
}
add_shortcode('nkd-calculate', 'nkdCalculate_shortcode');
function nkdCalculate_rate_shortcode($atts) {
   return wget_option('my_rate');
}
add_shortcode('nkd-rate', 'nkdCalculate_rate_shortcode');
?>