<?php
/*
 * Plugin Name:       Add to Post Plugin
 * Description:       The plugin adds a fixed sentence in each post.
 * Version:           1.0.0
 * Author:            Adrian Roy Baguio
 * Author URI:        https://aerogaming.org/Adrian/
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
*/

// Add Signature Image after single post
add_filter('the_content','add_at_the_end_of_post', 1);
function add_at_the_end_of_post($text) {
 global $post;

    $text .= 'Post created by the <a href="https://autotrader.ca">AutoTrader</a>.';
    return $text;
 
}