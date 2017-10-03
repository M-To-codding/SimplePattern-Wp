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
                        Lorem ipsum
                    </h2>

                    <p class="info">
                        Lorem ipsum dolor sit amet,
                        consectetur adipisicing elit. Assumenda
                        cumque cupiditate dicta ex exercitationem
                        facere fugiat impedit iste laudantium magni
                        mollitia natus non odio.
                    </p>

                    <div class="goto">
                        More
                    </div>
                </section>
            </div>
            <section class="works">
                <h2 class="heading">
                    Lorem ipsum
                </h2>


                <div class="gallery -demo">
                    <div class="container">
                        <div class="item">
                            <img src="../../assets/public/images/gallery-item1.jpg" alt="">
                        </div>
                        <div class="item">
                            <img src="../../assets/public/images/gallery-item2.jpg" alt="">
                        </div>
                    </div>

                    <div class="goto">
                        More
                    </div>
                </div>
            </section>
		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
