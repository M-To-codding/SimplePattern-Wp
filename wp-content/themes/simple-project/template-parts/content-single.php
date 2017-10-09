<?php
/**
 * Template part for displaying single posts
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class( 'post-item' ); ?>>
    <header class="entry-header">
		<?php

		if ( has_post_thumbnail() ) :
			?>

            <img src="<?php the_post_thumbnail_url(); ?>" class="post-image"/>

			<?php
		endif; ?>
    </header><!-- .entry-header -->

    <div class="entry-content">
		<?php
		if ( get_post_gallery() ) :
			echo get_post_gallery();
		endif;
		?>
    </div><!-- .entry-content -->

    <footer class="entry-footer">

		<?php

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


		if ( 'post' === get_post_type() ) : ?>
            <div class="entry-meta">
				<?php simple_project_posted_on(); ?>
            </div><!-- .entry-meta -->

			<?php
		endif;

		?>
    </footer><!-- .entry-footer -->
</article><!-- #post-<?php the_ID(); ?> -->



