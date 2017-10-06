<?php

class Custom_Widget_Random_Posts extends WP_Widget {

	/**
	 * Sets up a new Recent Posts widget instance.
	 */
	public function __construct() {
		$widget_ops = array(
			'classname'                   => 'widget_other_works',
			'description'                 => __( 'Your site&#8217;s most recent Posts.' ),
			'customize_selective_refresh' => true,
		);
		parent::__construct( 'recent-posts', __( 'Other works' ), $widget_ops );
		$this->alt_option_name = 'widget_recent_entries';
	}

	/**
	 * Outputs the content for the current Recent Posts widget instance.
	 */
	public function widget( $args, $instance ) {
		if ( ! isset( $args['widget_id'] ) ) {
			$args['widget_id'] = $this->id;
		}

		$title = ( ! empty( $instance['title'] ) ) ? $instance['title'] : __( 'Other works' );

		/** This filter is documented in wp-includes/widgets/class-wp-widget-pages.php */
		$title     = apply_filters( 'widget_title', $title, $instance, $this->id_base );
		$number    = 3;

		/**
		 * Filters the arguments for the Recent Posts widget.
		 */
		$r = new WP_Query( apply_filters( 'widget_posts_args', array(
			'posts_per_page'      => $number,
			'no_found_rows'       => true,
			'orderby' => rand,
			'post_status'         => 'publish',
			'ignore_sticky_posts' => true
		) ) );

		if ( $r->have_posts() ) :
			?>
			<?php echo $args['before_widget']; ?>
			<?php if ( $title ) {
			echo $args['before_title'] . $title . $args['after_title'];
		} ?>
			<?php while ( $r->have_posts() ) : $r->the_post(); ?>

            <div class="post-item -recent">
                <div class="post-thumbnail -recent">
                    <a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>">
                        <img src="<?php the_post_thumbnail_url( 'thumbnail' ); ?>" class="post-image -recent"/>
                    </a>
                </div>

                <div class="post-title -recent">
                    <a href="<?php the_permalink(); ?>"><?php get_the_title() ? the_title() : the_ID(); ?></a>
                </div>
            </div>


		<?php endwhile; ?>
			<?php echo $args['after_widget']; ?>
			<?php

// Reset the global $the_post as this query will have stomped on it
			wp_reset_postdata();

		endif;
	}


	/**
	 * Handles updating the settings for the current Recent Posts widget instance.
	 */
	public function update( $new_instance, $old_instance ) {
		$instance              = $old_instance;
		$instance['title']     = sanitize_text_field( $new_instance['title'] );
		$instance['number']    = (int) $new_instance['number'];

		return $instance;
	}

	/**
	 * Outputs the settings form for the Recent Posts widget.
	 */
	public function form( $instance ) {
		$title     = isset( $instance['title'] ) ? esc_attr( $instance['title'] ) : '';
		$number    = isset( $instance['number'] ) ? absint( $instance['number'] ) : 3;
		?>
        <p><label for="<?php echo $this->get_field_id( 'title' ); ?>"><?php _e( 'Title:' ); ?></label>
            <input class="widefat" id="<?php echo $this->get_field_id( 'title' ); ?>"
                   name="<?php echo $this->get_field_name( 'title' ); ?>" type="text" value="<?php echo $title; ?>"/>
        </p>

		<?php
	}
}
