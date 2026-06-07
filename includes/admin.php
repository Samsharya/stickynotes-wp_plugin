<?php
if (!defined('ABSPATH')) exit;

add_action('admin_menu', function(){
    add_menu_page('Sticky Chaos Notes', 'Chaos Notes', 'manage_options', 'scn', 'scn_page');
});



?>
