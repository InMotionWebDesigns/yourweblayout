<?php
/**
 * Template Name: Two Sidebars
 *
 * @package yourweblayout
 */

get_header(); ?>
</div><!-- end container -->

	<div id="primary" class="content-area">
		<main id="main" class="site-main">
			<div class="container">
				<div class="row">
					<div class="col-md-3">
						<?php get_sidebar(1); ?>
					</div><!-- .col -->

					<div class="col-md-6">
						<?php while ( have_posts() ) : the_post(); ?>
							<?php get_template_part( 'content', 'page' ); ?>
						<?php endwhile; // end of the loop. ?>
					</div><!-- .col -->

					<div class="col-md-3">
						<?php get_sidebar(2); ?>
					</div><!-- .col -->
				</div><!-- .row -->
			</div><!-- end container -->
		</main><!-- #main -->
	</div><!-- #primary -->

<div class="container">
<?php get_footer(); ?>