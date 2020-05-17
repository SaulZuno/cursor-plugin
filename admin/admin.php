<?php
add_action( 'admin_menu', 'myplugin_admin' );

function myplugin_admin()
{
    add_menu_page(
        'MyPlugin',     // page title
        'MyPlugin',     // menu title
        'manage_options',   // capability
        'myplugin',     // menu slug
        'dashboard_myplugin_admin', // callback function
        'dashicons-image-filter'
    );

    add_submenu_page(
        "myplugin",
        "myplugin",
        "About us",
        'edit_posts',
        'myplugin-about',
        'about_myplugin_admin'
    );

}

function about_myplugin_admin()
{
    if (!current_user_can('manage_options')) {
        wp_die('No permission to access');
    }

    $file = plugin_dir_path( __FILE__ ) . "includes/aboutus.php";

        require $file;
}

function dashboard_myplugin_admin()
{
    if (!current_user_can('manage_options')) {
        wp_die('No permission to access');
    }

    $file = plugin_dir_path( __FILE__ ) . "includes/dashboard.php";

        require $file;
}

?>