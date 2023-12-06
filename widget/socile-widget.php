<?php 

// Adds widget: social link widget 
class Sociallinkwidget_Widget extends WP_Widget {

	function __construct() {
		parent::__construct(
			'sociallinkwidget_widget',
			esc_html__( 'social link widget ','philosopy' )
		);
	}

	private $widget_fields = array(
		array(
			'label' => 'Facebook link',
			'id' => 'facebooklink_text',
			'type' => 'url',
		),
		array(
			'label' => 'twitter link',
			'id' => 'twitterlink_text',
			'type' => 'text',
		),
		array(
			'label' => 'instagram link',
			'id' => 'instagramlink_text',
			'type' => 'text',
		),
		array(
			'label' => 'pinterest link',
			'id' => 'pinterestlink_text',
			'type' => 'text',
		),
	);

	public function widget( $args, $instance ) {
		echo wp_kses_post($args['before_widget']);

		if ( ! empty( $instance['title'] ) ) {
			echo esc_url($args['before_title']) . apply_filters( 'widget_title', $instance['title'] ) . $args['after_title'];
		}

		// Output generated fields


        echo '<li><a href="' . $instance['facebooklink_text'] . '"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>';
        echo '<li><a href="' . $instance['twitterlink_text'] . '"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>';
        echo '<li><a href="' . $instance['instagramlink_text'] . '"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>';
        echo '<li><a href="' . $instance['pinterestlink_text'] . '"><i class="fa fa-pinterest" aria-hidden="true"></i></a></li>';


		
		echo wp_kses_post($args['after_widget']);
	}

	public function field_generator( $instance ) {
		$output = '';
		foreach ( $this->widget_fields as $widget_field ) {
			$default = '';
			if ( isset($widget_field['default']) ) {
				$default = $widget_field['default'];
			}
			$widget_value = ! empty( $instance[$widget_field['id']] ) ? $instance[$widget_field['id']] : esc_html__( $default,'philosopy' );
			switch ( $widget_field['type'] ) {
				default:
					$output .= '<p>';
					$output .= '<label for="'.esc_attr( $this->get_field_id( $widget_field['id'] ) ).'">'.esc_attr__( $widget_field['label'], 'philosopy' ).':</label> ';
					$output .= '<input class="widefat" id="'.esc_attr( $this->get_field_id( $widget_field['id'] ) ).'" name="'.esc_attr( $this->get_field_name( $widget_field['id'] ) ).'" type="'.$widget_field['type'].'" value="'.esc_attr( $widget_value ).'">';
					$output .= '</p>';
			}
		}
		echo wp_kses_post($output);
	}

	public function form($instance) {
		$title = ! empty( $instance['title'] ) ? $instance['title'] : ( '');
		?>
		<p>
			<label for="<?php echo esc_attr( $this->get_field_id( 'title' ) ); ?>"><?php esc_attr_e( 'Title:', 'philosopy' ); ?></label>
			<input class="widefat" id="<?php echo esc_attr( $this->get_field_id( 'title' ) ); ?>" name="<?php echo esc_attr( $this->get_field_name( 'title' ) ); ?>" type="text" value="<?php echo esc_attr( $title ); ?>">
		</p>
		<?php
		$this->field_generator( $instance );
	}

	public function update( $new_instance, $old_instance ) {
		$instance = array();
		$instance['title'] = ( ! empty( $new_instance['title'] ) ) ? strip_tags( $new_instance['title'] ) : '';
		foreach ( $this->widget_fields as $widget_field ) {
			switch ( $widget_field['type'] ) {
				default:
					$instance[$widget_field['id']] = ( ! empty( $new_instance[$widget_field['id']] ) ) ? strip_tags( $new_instance[$widget_field['id']] ) : '';
			}
		}
		return $instance;
	}
}

function register_sociallinkwidget_widget() {
	register_widget( 'Sociallinkwidget_Widget' );
}
add_action( 'widgets_init', 'register_sociallinkwidget_widget' );