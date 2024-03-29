<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package yourweblayout
 */

get_header(); ?>
</div><!-- .container -->
<!-- Pulls in Featured Image for Main Blog Page -->
<?php
    if (is_home() && get_option('page_for_posts') ) {
    $blog_home_id = get_option( 'page_for_posts' );
   
        echo '<div class="leaderboard-image">';
        echo ''.get_the_post_thumbnail($blog_home_id, 'full').''; 
        echo '</div>';
    }

    else{
        echo '<div class="leaderboard-without-image"></div>';
    }
?>
	<div id="primary" class="content-area">
		<main id="main" class="site-main">
			<div class="container">
				<div class="row">
					<div class="col-sm-4 col-md-3">
						<?php get_sidebar(1); ?>
					</div><!-- .col -->
					<div class="col-sm-8 col-md-9">
						<?php if ( have_posts() ) : ?>
							<?php /* Start the Loop */ ?>
							<?php while ( have_posts() ) : the_post(); ?>
								<?php
									/* Include the Post-Format-specific template for the content.
									 * If you want to override this in a child theme, then include a file
									 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
									 */
									get_template_part( 'content', get_post_format() );
								?>
							<?php endwhile; ?>
							<?php yourweblayout_paging_nav(); ?>
						<?php else : ?>
							<?php get_template_part( 'content', 'none' ); ?>
						<?php endif; ?>
					</div><!-- .col -->
				</div><!-- .row -->
			</div><!-- .container -->
		</main><!-- #main -->
	</div><!-- #primary -->

<div class="container">
<?php get_footer(); ?>