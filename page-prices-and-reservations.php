<?php
/**
 * Template Name: Prices & Reservations
 * 
 */

get_header(); 
?>

<div id="primary" class="content-area">
	<main id="main" class="site-main" role="main">

        <div class="prices-reservations">
            <div class="prices-reservations__content wrap">
                <?php while ( have_posts() ) : the_post(); 
                    the_content();
                endwhile;?>
            </div>
            <div class="prices-reservations__reserve">
                <!-- Start Square Appointments Embed Code -->
                    <script src='https://squareup.com/appointments/buyer/widget/978c4691-cb43-4f3b-a40f-678b9096f5ad/CTE5FAG6ZX532.js'></script>
                <!-- End Square Appointments EmbedCode -->
            </div>
        </div>

	</main>
</div>

<?php get_footer();
