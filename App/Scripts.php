<?php

namespace MWT\App;

use MWT\App\Interfaces\WordPressHooks;

/**
 * Class Scripts
 *
 * @package MWT\App
 */
class Scripts implements WordPressHooks {

    /**
     * Add class hooks.
     */
    public function addHooks() {
        add_action( 'wp_enqueue_scripts', [ $this, 'enqueueStyles' ] );
        add_action( 'wp_head', [ $this, 'add_bootstrap_styles' ] );

        // add_action( 'wp_enqueue_scripts', [ $this, 'enqueueScripts' ] );
        // add_action( 'admin_enqueue_scripts', [ $this, 'enqueueAdminScripts' ] );
        // add_action( 'wp_head', [ $this, 'add_square_payment_form' ] );
    }

     /**
     * Load stylesheets for the front end.
     */
    public function enqueueStyles() {
        $parent_style = 'twentyseventeen-style';

        wp_enqueue_style( $parent_style, get_template_directory_uri() . '/style.css' );
        wp_enqueue_style( 'child-style',
            MWT_THEME_PATH_URL . '/assets/css/style.css',
            array( $parent_style ),
            wp_get_theme()->get('Version')
        );
    }

    /**
     * Load scripts for the front end.
     */
    public function enqueueScripts() {
        wp_enqueue_script(
            'mwt-theme',
            MWT_THEME_PATH_URL . '',
            THEME_VERSION,
            true
        );
    }

     /**
     * Load scripts for the back end.
     */
    public function enqueueAdminScripts() {
        wp_enqueue_script(
            'mwt-admin',
            MWT_THEME_PATH_URL . '',
            [ 'jquery' ],
            THEME_VERSION,
            true
        );

        wp_enqueue_style(
            'mwt-admin-styles',
            MWT_THEME_PATH_URL . '',
            [],
            THEME_VERSION
        );
    }

    /**
     * Add payment form scripts
     */
    public function add_bootstrap_styles() {
        echo '<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">';
    }

    /**
     * Add payment form scripts
     */
    public function add_square_payment_form() {
        echo '<!-- link to the SqPaymentForm library --><script type="text/javascript" src="https://js.squareup.com/v2/paymentform"></script><!-- link to the local SqPaymentForm initialization --><script type="text/javascript" src="' . MWT_THEME_PATH_URL . '/sqpaymentform/sqpaymentform.css' . '"></script><!-- link to the custom styles for SqPaymentForm --><link rel="stylesheet" type="text/css" href="path/to/sqpaymentform.css">';
    }
}