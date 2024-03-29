<?php
/**
 * Template Name: Home Page
 *
 * @package yourweblayout
 */

get_header(); ?>
</div><!-- .container -->
<?php
    if(has_post_thumbnail()){
        echo '<div class="leaderboard-image">';
        the_post_thumbnail('full');
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
					<div class="col-sm-12">
						<?php while ( have_posts() ) : the_post(); ?>
							<?php get_template_part( 'content', 'page' ); ?>
						<?php endwhile; // end of the loop. ?>
					</div><!-- .col -->
				</div><!-- .row -->
			</div><!-- .container -->
		</main><!-- #main -->
	</div><!-- #primary -->

<div class="container">
<?php get_footer(); ?>