<?php
/**
 * Plugin Name:       George Warren Brown School Post Types
 * Plugin URI:        http://github.com/jcasabona/lil-post-types/
 * Description:       A simple plugin for creating custom post types and taxonomies related to the Brown School.
 * Version:           1.0.0
 * Author:            
 * Author URI:        
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       post-types
 * Domain Path:       /languages
 */

 if ( ! defined('WPINC')) {
    die;
 }

define( 'GWB_VERSION', '1.0.0' );
define( 'GWBDOMAIN', 'gwb-post-types' );
define( 'GWBPATH', plugin_dir_path( __FILE__ ) );

require_once(GWBPATH . '/post-types/register.php');
add_action('init', 'gwb_register_faculty_type');

require_once(GWBPATH . '/taxonomies/register.php');
add_action('init', 'gwb_register_facultyType_taxonomy');


