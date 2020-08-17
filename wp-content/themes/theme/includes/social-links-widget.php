<?php 
/*
 * Social Links Widget
 * 
 */

/*Custom Widget*/

// Register and load the widget
function wpb_load_widget() {
    register_widget( 'wpb_widget' );
}
add_action( 'widgets_init', 'wpb_load_widget' );
 
// Creating the widget 
class wpb_widget extends WP_Widget {
 
function __construct() {
parent::__construct(
 
// Base ID of your widget
'wpb_widget', 
 
// Widget name will appear in UI
__('Social Links', 'theme'), 
 
// Widget description
array( 'description' => __( 'Social Links in Theme', 'theme' ), ) 
);
}
 
// Creating widget front-end

public function widget( $args, $instance ) {
$twitter = apply_filters( 'widget_title', $instance['twitter'] );
$facebook = apply_filters( 'widget_title', $instance['facebook'] );
$linkedin = apply_filters( 'widget_title', $instance['linkedin'] );
 
// before and after widget arguments are defined by themes
if ( ! empty( $title ) )
echo $args['before_title'] . $title . $args['after_title'];

echo $args['before_widget'];

// This is where you run the code and display the output
?>

<div class="social_29128 white mb-5">
    <a href="<?php echo esc_attr( $facebook ); ?>" target="_blank"><span class="icon-facebook"></span></a>
    <a href="<?php echo esc_attr( $linkedin ); ?>" target="_blank"><span class="icon-linkedin"></span></a>
    <a href="<?php echo esc_attr( $twitter ); ?>" target="_blank"><span class="icon-twitter"></span></a>
</div>

<?php echo $args['after_widget'];
}     
// Widget Backend 
public function form( $instance ) {
/*Twitter*/
if ( isset( $instance[ 'twitter' ] ) ) {
$twitter = $instance[ 'twitter' ];
}
else {
$twitter = __( ' ', 'theme' );
}
/*Facebook*/
if ( isset( $instance[ 'facebook' ] ) ) {
$facebook = $instance[ 'facebook' ];
}
else {
$facebook = __( ' ', 'theme' );
}
/*LinkedIn*/
if ( isset( $instance[ 'linkedin' ] ) ) {
$linkedin = $instance[ 'linkedin' ];
}
else {
$linkedin = __( ' ', 'theme' );
}
?>
<p>
<label for="<?php echo $this->get_field_id( 'twitter' ); ?>"><?php echo 'Twitter' ; ?></label> 
<input class="widefat" id="<?php echo $this->get_field_id( 'twitter' ); ?>" name="<?php echo $this->get_field_name( 'twitter' ); ?>" type="text" value="<?php echo esc_attr( $twitter ); ?>" />
</p>
<p>
<label for="<?php echo $this->get_field_id( 'facebook' ); ?>"><?php echo 'Facebook' ; ?></label> 
<input class="widefat" id="<?php echo $this->get_field_id( 'facebook' ); ?>" name="<?php echo $this->get_field_name( 'facebook' ); ?>" type="text" value="<?php echo esc_attr( $facebook ); ?>" />
</p>
<p>
<label for="<?php echo $this->get_field_id( 'linkedin' ); ?>"><?php echo 'Linkedin' ; ?></label> 
<input class="widefat" id="<?php echo $this->get_field_id( 'linkedin' ); ?>" name="<?php echo $this->get_field_name( 'linkedin' ); ?>" type="text" value="<?php echo esc_attr( $linkedin ); ?>" />
</p>
<p>
<?php 
}
     
// Updating widget replacing old instances with new
public function update( $new_instance, $old_instance ) {
$instance = array();
$instance['twitter'] = ( ! empty( $new_instance['twitter'] ) ) ? strip_tags( $new_instance['twitter'] ) : '';
$instance['facebook'] = ( ! empty( $new_instance['facebook'] ) ) ? strip_tags( $new_instance['facebook'] ) : '';
$instance['linkedin'] = ( ! empty( $new_instance['linkedin'] ) ) ? strip_tags( $new_instance['linkedin'] ) : '';
return $instance;
}
} 
