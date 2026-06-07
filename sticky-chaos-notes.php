<?php
/*
Plugin Name: Sticky Chaos Notes
Description: Floating sticky notes
Version: 1.0
Author: Samsharya Gaire
Author URI: https://github.com/samsharya
Text Domain: sticky-chaos-notes

License: GPLv2 or later
License URI: https://www.gnu.org/licenses/gpl-2.0.html

*/

if (!defined('ABSPATH')) exit;

define('SCN_PATH', plugin_dir_path(__FILE__));
define('SCN_URL', plugin_dir_url(__FILE__));

require_once SCN_PATH . 'includes/admin.php';

function scn_assets(){
    wp_enqueue_style('scn-style', SCN_URL . 'assets/style.css');
    wp_enqueue_script('scn-script', SCN_URL . 'assets/script.js', [], null, true);

    $notes = get_option('scn_notes', []);

    wp_localize_script('scn-script', 'SCN_DATA', [
        'notes' => $notes
    ]);
}
add_action('wp_enqueue_scripts', 'scn_assets');
?>
