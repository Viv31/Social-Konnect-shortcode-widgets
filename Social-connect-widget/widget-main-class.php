<?php
if(!defined('ABSPATH')){
	 exit;
}
/**
 * Adds Password Generator  widget.
 */


class SocialKonnect_Widget extends WP_Widget {

	/**
	 * Register widget with WordPress.
	 */
	function __construct() {
		parent::__construct(
			'SocialKonnect_Widget', // Base ID
			esc_html__( 'Social Connect', 'SocialKonnect' ), // Name
			array( 'description' => esc_html__( 'Social Media connection', 'SocialKonnect' ), ) // Args
		);
	}

	

	/**
	 * Front-end display of widget.
	 *
	 * @see WP_Widget::widget()
	 *
	 * @param array $args     Widget arguments.
	 * @param array $instance Saved values from database.
	 */
	public function widget( $args, $instance ) {
		echo $args['before_widget'];

		if ( ! empty( $instance['title'] ) ) {
			echo $args['before_title'] . apply_filters( 'widget_title', $instance['title'] ) . $args['after_title'];
		}
?>

		
<!-- <a href="https://www.facebook.com"><button>FB</button></a>
<a href="https://www.instagram.com"><button>Insta</button></a>
<a href="https://www.twitter.com"><button>Twitter</button></a>
<br><br>
<a href="https://www.facebook.com"><button>FB</button></a>
<a href="https://www.instagram.com"><button>Insta</button></a>
<a href="https://www.twitter.com"><button>Twitter</button></a> -->

<div> <?php echo do_shortcode('[SocailKonnect]'); ?></div>

		
	<?php

		
		
		echo $args['after_widget'];
	}

	/**
	 * Back-end widget form.
	 *
	 * @see WP_Widget::form()
	 *
	 * @param array $instance Previously saved values from database.
	 */
	public function form( $instance ) {
		$title = ! empty( $instance['title'] ) ? $instance['title'] : esc_html__( 'Social Konnect', 'SocialKonnect' );
		?>
		
		 <p>
			
		<label for="<?php echo esc_attr( $this->get_field_id( 'title' ) ); ?>">
			<?php esc_attr_e( 'Title:', 'SocialKonnect' ); ?>
				
			</label> 
		<input class="widefat" id="<?php echo esc_attr( $this->get_field_id( 'title' ) ); ?>" name="<?php echo esc_attr( $this->get_field_name( 'title' ) ); ?>" type="text" value="<?php echo esc_attr( $title ); ?>">
		</p> 



		<?php 
	}

	/**
	 * Sanitize widget form values as they are saved.
	 *
	 * @see WP_Widget::update()
	 *
	 * @param array $new_instance Values just sent to be saved.
	 * @param array $old_instance Previously saved values from database.
	 *
	 * @return array Updated safe values to be saved.
	 */
	public function update( $new_instance, $old_instance ) {
		$instance = array();
		$instance['title'] = ( ! empty( $new_instance['title'] ) ) ? sanitize_text_field( $new_instance['title'] ) : '';

		return $instance;
	}



} // class for widget
