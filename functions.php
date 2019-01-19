<?php
/**
 * Functions and definitions
 *
 * @package Smartscape
 */

use MWT\App\Core\Init;
use MWT\App\Scripts;
use MWT\App\Fields\ACF;

/**
 * Define Theme Version
 * Define Theme directories
 */
// define( 'THEME_VERSION', '1.0.0' );
define( 'MWT_THEME_DIR', trailingslashit( get_theme_file_path() ) );
define( 'MWT_THEME_PATH_URL', trailingslashit( get_theme_file_uri() ) );

// Require Autoloader
require_once MWT_THEME_DIR . 'vendor/autoload.php';

/**
 * Theme Setup
 */
// add_action( 'after_setup_theme', function () {

    ( new Init() )
        ->add( new Scripts() )
        // ->add( new ACF() )
        ->initialize();
// } );
?>