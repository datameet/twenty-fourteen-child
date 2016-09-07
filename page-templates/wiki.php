<?php
/**
 * Template Name: Wiki Page
 *
 * @package WordPress
 * @subpackage Twenty_Fourteen
 * @since Twenty Fourteen 1.0
 */

get_header(); ?>

<div id="main-content" class="main-content">
	<div class="breadcrumbs" typeof="BreadcrumbList" vocab="http://schema.org/">
    		<?php if(function_exists('bcn_display'))
    		{
        		bcn_display();
    		}?>
		</div>



	<div id="primary" class="content-area">
		<div id="content" class="site-content" role="main">


			<?php
				// Start the Loop.
				while ( have_posts() ) : the_post();

					// Include the page content template.
					get_template_part( 'content', 'wiki' );

					// If comments are open or we have at least one comment, load up the comment template.
					if ( comments_open() || get_comments_number() ) {
						comments_template();
					}
				endwhile;
			?>

		</div><!-- #content -->
	</div><!-- #primary -->
</div><!-- #main-content -->

<?php
get_sidebar();
get_footer();
