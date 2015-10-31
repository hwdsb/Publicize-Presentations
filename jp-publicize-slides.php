<?php
/*
 * Plugin Name: Publicize Presentations
 * Plugin URI: https://github.com/hwdsbcommons/Publicize-Presentations/
 * Description: Allow new Slides created with https://github.com/cgrymala/reveal-js-presentations/ to trigger a Publicize action using Jetpack Publicize
 * Author: Jetpack Support 
 * Author URI: https://jetpack.me/support/publicize/
 * Version: 1.0
 * License: GPLv2 or later
 * License URI: http://www.gnu.org/licenses/gpl-2.0.html
 */

add_action('init', 'my_custom_init');
function my_custom_init() {
    add_post_type_support( 'slides', 'publicize' );
}
