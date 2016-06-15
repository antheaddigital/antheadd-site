<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package antheadd-site
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

			<div id="fullpage">
				<div class="section">
					<div class="section--content-wrapper">
						<div class="section--page-1-logo">
							<img class="img-responsive" src="<?php echo get_template_directory_uri(); ?>/imgs/site/anthead-digital-logo.png" alt="Zimmy Books Logo" />
						</div>
					</div>
				</div>
			</div>



		</main><!-- #main -->
	</div><!-- #primary -->

<?php
// get_sidebar();
get_footer();
