<?php
function my_theme_enqueue_styles() {

    $parent_style = 'twentyseventeen-style';

    wp_enqueue_style( $parent_style, get_template_directory_uri() . '/style.css' );
    wp_enqueue_style( 'child-style',
        get_stylesheet_directory_uri() . '/style.css',
        array( $parent_style ),
        wp_get_theme()->get('Version')
    );
}
add_action( 'wp_enqueue_scripts', 'my_theme_enqueue_styles' );

function add_square_payment_form() {
    echo '<!-- link to the SqPaymentForm library --><script type="text/javascript" src="https://js.squareup.com/v2/paymentform"></script><!-- link to the local SqPaymentForm initialization --><script type="text/javascript" src="' . get_template_directory_uri() . '/sqpaymentform/sqpaymentform.css' . '"></script><!-- link to the custom styles for SqPaymentForm --><link rel="stylesheet" type="text/css" href="path/to/sqpaymentform.css">';
}

// check here to make sure we are on correct page before it loads

add_action( 'wp_head', 'add_square_payment_form' );
?>