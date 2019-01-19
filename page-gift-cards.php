<?php
/**
 * Template Name: Gift Cards
 * 
 */

get_header(); 
?>

<div id="primary" class="content-area">
	<main id="main" class="site-main" role="main">

        <div class="gift-cards">
            <div class="gift-cards__content wrap">
                <?php while ( have_posts() ) : the_post(); 
                    the_content();
                endwhile;?>
            </div>

        </div>

	</main>
</div>

<?php get_footer();
