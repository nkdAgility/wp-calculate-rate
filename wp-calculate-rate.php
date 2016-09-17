<?php
/**
* Plugin Name: nkdAgility Rate Calculator
* Description: Tell Us What Your Shortcode Does
* Version: 0.6
* Author: MrHinsh
* Author URI: https://nkdagility.com
*/

function nkdCalculate_shortcodes_init() {

    function nkdCalculate_shortcode($atts,$content=null) { 
        $content = wpv_do_shortcode($content);
        $content = eval("return $content;");
        return $content;
    }

    add_shortcode('nkd-calculate', 'nkdCalculate_shortcode');

    function nkdCalculate_rate_shortcode($atts) {
    return wget_option('my_rate');
    }

    add_shortcode('nkd-rate', 'nkdCalculate_rate_shortcode');

}

add_action('init', 'nkdCalculate_shortcodes_init');

?>