<?php 

add_action('wp_ajax_myplugineffect', 'myplugineffect');

function myplugineffect(){

    switch ($_POST['select_option']) {
        case 'estrellas':
            $efecto = '<script src="'.plugins_url("/myplugin/admin/includes/js/estrellas.js").'"></script>';
            update_option('myeffect', $efecto);
            break;
        case 'burbujas':
            $efecto = '<script src="'.plugins_url("myplugin/admin/includes/js/burbujas.js").'"></script>';
            update_option('myeffect', $efecto);
            break;
        case 'explosion':
            $efecto = '<script src="'.plugins_url("myplugin/admin/includes/js/explosion.js").'"></script>';
            update_option('myeffect', $efecto);
            break;
    }

    wp_die();

}


