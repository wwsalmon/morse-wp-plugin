<?php
class morse_wp_widget_call_to_action extends WP_Widget{
	function __construct(){
		parent:: __construct(
			"morse_wp_widget_call_to_action", "Morse WP Call To Action Widget", array("description" => "Call to action box")
		);
	}

	public function widget($args, $instance){
		$title = apply_filters('widget-title', $instance['title']);
		$blurb = $instance["blurb"];
		$cta_text = $instance["cta_text"];
		$cta_url = $instance["cta_url"];
		echo $args["before_widget"];
		echo "<div class=\"morse-wp-cta morse-bg-primary\">";
		if(!empty($title)) echo "<div class=\"morse-wp-cta-title morse-font-accent\"><span>" . $title . "</span></div>";
		echo "<p>" . $blurb . "</p>";
		echo "<div class='uppercase-link morse-font-accent morse-wp-cta-link'><a href=\"" . $cta_url . "\">" . $cta_text . "</a></div>";
		echo "</div>";
        echo $args["after_widget"];
	}

	public function form($instance){
		$title = (isset($instance["title"])) ? $instance["title"] : "Title here";
		$blurb = (isset($instance["blurb"])) ? $instance["blurb"] : "Blurb here";
		$cta_text = (isset($instance["cta_text"])) ? $instance["cta_text"] : "Link text";
		$cta_url = (isset($instance["cta_url"])) ? $instance["cta_url"] : "Link url";
		?>
		<p>
			<label for="<?php echo $this->get_field_id( 'title' ); ?>">Title:</label>
			<input type="text" class="widefat" id="<?php echo $this->get_field_id( 'title' ); ?>" name="<?php echo $this->get_field_name( 'title' ); ?>" value="<?php echo esc_attr( $title ); ?>"/>
            <label for="<?php echo $this->get_field_id( 'blurb' ); ?>">Blurb:</label>
			<textarea class="widefat" id="<?php echo $this->get_field_id( 'blurb' ); ?>" name="<?php echo $this->get_field_name( 'blurb' ); ?>" ><?php echo $blurb; ?></textarea>
			<label for="<?php echo $this->get_field_id( 'cta_text' ); ?>">Link text:</label>
			<input type="text" class="widefat" id="<?php echo $this->get_field_id( 'cta_text' ); ?>" name="<?php echo $this->get_field_name( 'cta_text' ); ?>" value="<?php echo esc_attr( $cta_text ); ?>"/>
			<label for="<?php echo $this->get_field_id( 'cta_url' ); ?>">Link url:</label>
			<input type="text" class="widefat" id="<?php echo $this->get_field_id( 'cta_url' ); ?>" name="<?php echo $this->get_field_name( 'cta_url' ); ?>" value="<?php echo esc_attr( $cta_url ); ?>"/>
		</p>
		<?php
	}

	public function update($new_instance, $old_instance){
	    $instance = array();
	    $instance["title"] = (!empty($new_instance["title"])) ? $new_instance["title"] : "";
	    $instance["blurb"] = (!empty($new_instance["blurb"])) ? $new_instance["blurb"] : "";
	    $instance["cta_text"] = (!empty($new_instance["cta_text"])) ? $new_instance["cta_text"] : "";
	    $instance["cta_url"] = (!empty($new_instance["cta_url"])) ? $new_instance["cta_url"] : "";
	    return $instance;
    }
}

function morse_wp_load_widget(){
    register_widget("morse_wp_widget_call_to_action");
}
add_action("widgets_init", "morse_wp_load_widget");