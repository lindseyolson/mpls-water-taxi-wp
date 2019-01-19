<?php
/**
 * The front page template file
 *
 * If the user has selected a static page for their homepage, this is what will
 * appear.
 * Learn more: https://codex.wordpress.org/Template_Hierarchy
 *
 */

get_header(); 
?>

<div id="primary" class="content-area">
	<main id="main" class="site-main" role="main">
        <div class="home">
            <div class="home__content wrap">
                <?php while ( have_posts() ) : the_post(); 
                    the_content();
                endwhile;?>
            </div>
        </div>
	</main>
</div>

<?php get_footer();
