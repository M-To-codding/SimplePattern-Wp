<?php
/**
 * The template for displaying archive pages
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package simple-project
 */

get_header(); ?>

    <div id="primary" class="gallery-content">
        <main class="main-content">

			<?php
			if ( have_posts() ) :


				/* Start the Loop */
				while ( have_posts() ) : the_post();

					/*
					 * Include the Post-Format-specific template for the content.
					 * If you want to override this in a child theme, then include a file
					 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
					 */
					get_template_part( 'template-parts/content', get_post_format() );

				endwhile;

				$args = array( 'screen_reader_text' => ( ' ' ), );
				the_posts_navigation( $args );

			else :

				get_template_part( 'template-parts/content', 'none' );

			endif; ?>

        </main><!-- #main -->
    </div><!-- #primary -->
    <div class="sidebar-bg">
		<?php
		get_sidebar();
		?>
    </div>
<?php
get_footer();
