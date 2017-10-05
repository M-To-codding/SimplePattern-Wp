<?php
/**
 * Template part for displaying posts
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package simple-project
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class( 'item' ); ?>>
    <header class="entry-header">
<!--		--><?php
//		if ( is_singular() ) :
//			the_title( '<h1 class="entry-title">', '</h1>' );
//		else :
//			the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
//		endif;

		if ( has_post_thumbnail() ) {
			?>

            <a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>">
                <img src="<?php the_post_thumbnail_url(); ?>"/>
            </a>

        <?php
		} ?>
    </header><!-- .entry-header -->
</article><!-- #post-<?php the_ID(); ?> -->
