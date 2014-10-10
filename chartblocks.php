<?php

/**
 * Plugin Name: ChartBlocks OEmbed provider
 * Plugin URI: http://www.chartblocks.com/
 * Description: ChartBlocks OEmbed provider
 * Version: 1.0
 * Author: Jay Smith
 * Author URI: http://www.chartblocks.com/
 * License: GPL12
 */
add_action('init', 'register_chartblocks_oembed');
add_action('wp_enqueue_scripts', 'register_chartblocks_script');


function register_chartblocks_oembed() {
    wp_oembed_add_provider('#https?://public\.chartblocks\.com/c/.*#i', 'http://embed.chartblocks.com/oembed', true);
}

function register_chartblocks_script() {
    wp_register_script('chartblocks', plugins_url('js/chartblocks.js', __FILE__), array('jquery'), null, false);
    wp_enqueue_script('chartblocks');
}
