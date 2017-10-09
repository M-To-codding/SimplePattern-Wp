<?php
/**
 * Template name: About
 */

get_header(); ?>

    <main class="main-content -about">
        <section class="secondary-info-container">
            <div class="container">

                <div class="secondary-info">
                    <h3 class="title">
						<?php the_field( 'about-page-heading2' ) ?>
                    </h3>

                    <p class="text">
						<?php the_field( 'about-page-info2' ) ?>
                    </p>
                </div>

                <div class="secondary-info">
                    <h3 class="title">
						<?php the_field( 'about-page-heading3' ) ?>
                    </h3>

                    <p class="text">
						<?php the_field( 'about-page-info3' ) ?>
                    </p>
                </div>
            </div>
        </section>

        <h2 class="heading">
            Additional info
        </h2>

        <section class="sidebar">
            <div class="sidebar-bg">
				<?php
				get_sidebar();
				?>
            </div>
        </section>
    </main>

<?php
get_footer();
