<?php
/*
Plugin Name: Link Orpyxis
Description: Link website to orpyxis for code management and security
Version: 4.2
License: GPL
Author: Eman Curmi
Author URL: https://www.orpyxis.com
*/

// remove unnecessary menus from WordPress Dashboard 
function remove_admin_menus () { 
    global $menu; 
    $removed = array( 
        __('LMS'), 
	__('WPLMS'),
        __('Font Awesome') 
	); 
    end ($menu); 
    while (prev($menu)){ 
        $value = explode(
                ' ',
                $menu[key($menu)][0]); 
        if(in_array($value[0] != NULL?$value[0]:"" , $removed)){
            unset($menu[key($menu)]);
        }
    } 
} 
add_action('admin_menu', 'remove_admin_menus');

?>
