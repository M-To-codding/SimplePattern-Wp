<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package simple-project
 */

get_header(); ?>

    <div id="primary" class="content-area">
        <main class="main-content">
            <div class="bg-bottom-triangle">

                <section class="container about">
                    <h2 class="heading">
                        <a href="<?php echo get_page_link(48)?>">
                            Lorem ipsum
                        </a>
                    </h2>

                    <p class="info">
                        Lorem ipsum dolor sit amet,
                        consectetur adipisicing elit. Assumenda
                        cumque cupiditate dicta ex exercitationem
                        facere fugiat impedit iste laudantium magni
                        mollitia natus non odio.
                    </p>

                    <div class="goto">
                        <a href="<?php echo get_page_link(48)?>">More</a>
                    </div>
                </section>
            </div>

            <section class="works">
                <h2 class="heading">
                    <a href="<?php echo get_permalink( get_option('page_for_posts')); ?>">
                        Lorem ipsum
                    </a>
                </h2>

                <div class="gallery -demo">
                    <div class="container">

						<?php
						$the_query = new WP_Query( 'posts_per_page=2' ); ?>

	                    <?php while ($the_query -> have_posts()) : $the_query -> the_post();

//                            if ( has_post_thumbnail() ) {
//                                the_post_thumbnail( 'full' );
//                            }

							get_template_part( 'template-parts/content-front-page', get_post_format() );

	                    endwhile;
	                    wp_reset_postdata();
	                     ?>

                    </div>

                    <div class="goto">
                        <a href="<?php echo get_permalink( get_option('page_for_posts')); ?>">More</a>
                    </div>
                </div>
            </section>
        </main><!-- #main -->
    </div><!-- #primary -->

<?php
get_footer();
