<?php
/**
 * Template part for displaying posts
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package simple-project
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class( 'post-item' ); ?>>
    <header class="entry-header">
		<?php

		if ( has_post_thumbnail() ) :
			?>

            <a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>">
                <img src="<?php the_post_thumbnail_url(); ?>" class="post-image"/>
            </a>

			<?php
		endif; ?>
    </header><!-- .entry-header -->

    <div class="entry-content">
		<?php

		if ( is_singular() ) :
			the_title( '<h1 class="entry-title">', '</h1>' );
		else :
			the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
		endif;

		if ( 'post' === get_post_type() ) : ?>
            <div class="entry-meta">
				<?php simple_project_posted_on(); ?>
            </div><!-- .entry-meta -->

			<?php
		endif;
		the_content( sprintf(
			wp_kses(
			/* translators: %s: Name of current post. Only visible to screen readers */
				__( 'Continue reading<span class="screen-reader-text"> "%s"</span>', 'simple-project' ),
				array(
					'span' => array(
						'class' => array(),
					),
				)
			),
			get_the_title()
		) );

		wp_link_pages( array(
			'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'simple-project' ),
			'after'  => '</div>',
		) );
		?>
    </div><!-- .entry-content -->

    <footer class="entry-footer">
        <!--		--><?php //simple_project_entry_footer(); ?>
    </footer><!-- .entry-footer -->
</article><!-- #post-<?php the_ID(); ?> -->



