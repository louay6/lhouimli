<?php 
/**
 * Adds short description Widget.
 */
 if( !class_exists('softd_description_Widget') ){
	class softd_description_Widget extends WP_Widget{
		/**
		 * Register widget with WordPress.
		 */
		function __construct(){
			$widget_ops = array( 'description' => esc_html__('Our short description  .','softd'),'customize_selective_refresh' => true, );
			parent:: __construct('softd_description_Widget', esc_html__('EM: Short Description','softd'),$widget_ops );
		}
		/**
		 * Front-end display of widget.
		 *
		 * @see WP_Widget::widget()
		 *
		 * @param array $args     Widget arguments.
		 * @param array $instance Saved values from database.
		 */
		public function widget($args, $instance){
			$image   = isset( $instance['image'] ) ? $instance['image'] : '';
			$text = isset( $instance['text'] ) ? $instance['text'] : '';
			$phonenumber = isset( $instance['phonenumber'] ) ? $instance['phonenumber'] : '';
			$facebook   = isset( $instance['facebook'] ) ? $instance['facebook'] : '';
			$google   = isset( $instance['google'] ) ? $instance['google'] : '';
			$twitter   = isset( $instance['twitter'] ) ? $instance['twitter'] : '';
			$rss   = isset( $instance['rss'] ) ? $instance['rss'] : '';
			$linked   = isset( $instance['linked'] ) ? $instance['linked'] : '';


			?>
			<?php echo wp_kses_post( $args['before_widget'] ); ?>
				<div class="softd-description-area">
					<?php if(!empty($image)):?>
						<a href="<?php echo esc_url( home_url( '/' ) ); ?>"><img src="<?php echo esc_url( $image ) ; ?>
						" alt="<?php echo esc_attr('Footer logo'); ?>" class="logo"></a>
					<?php endif; if(!empty($text)):?>
		                <p><?php echo esc_html( $text ); ?></p>
		            <?php endif;?>

	                <?php 
	                    $sphonenumbers = explode("\n", $phonenumber);
	                    if( count( $sphonenumbers ) && !empty($sphonenumbers)){
	                    	echo '<p class="phone">';
		                        foreach( $sphonenumbers as $sphonenumber ) {
		                            echo '<a href="tel:'.$sphonenumber.'">'. $sphonenumber .' </a>';
		                        }
	                        echo '</p>';
	                    }
	                ?>
					<div class="social-icons">
						<?php if( $facebook ):?>
							<a class="facebook" href="<?php echo esc_url( $facebook ); ?>" title="Facebook"><i class="fab fa-facebook-f"></i></a>
						<?php endif; if( $google ): ?>
							<a class="google-plus" href="<?php echo esc_url( $google ); ?>" title="Google Plus"><i class="fab fa-google-plus-g"></i></a>
						<?php endif; if( $twitter ): ?>
							<a class="twitter" href="<?php echo esc_url( $twitter ); ?>" title="Twitter"><i class="fab fa-twitter"></i></a>
						<?php endif; if( $rss ): ?>
							<a class="rss" href="<?php echo esc_url( $rss ); ?>" title="RSS"><i class="fas fa-rss"></i></a>
						<?php endif; if( $linked ): ?>
							<a class="Linkedin" href="<?php echo esc_url( $linked ); ?>" title="Linkedin"><i class="fab fa-linkedin"></i></a>
						<?php endif; ?>
					</div>
				</div>
			<?php echo wp_kses_post( $args['after_widget'] ); ?>

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
		public function update($new_instance, $old_instance){
			$instace = array();
			$instance['image']   = ( !empty( $new_instance['image'] ) ) ? strip_tags ( $new_instance['image'] ) : '';
			$instance['text'] = ( !empty($new_instance['text']) ) ? strip_tags ( $new_instance['text'] ) : '';
			$instance['phonenumber'] = ( !empty($new_instance['phonenumber']) ) ? strip_tags ( $new_instance['phonenumber'] ) : '';


			$instance['facebook']   = ( !empty($new_instance['facebook']) ) ? strip_tags ( $new_instance['facebook'] ) : '';
			$instance['google']   = ( !empty($new_instance['google']) ) ? strip_tags ( $new_instance['google'] ) : '';
			$instance['twitter']   = ( !empty($new_instance['twitter']) ) ? strip_tags ( $new_instance['twitter'] ) : '';
			$instance['rss']   = ( !empty($new_instance['rss']) ) ? strip_tags ( $new_instance['rss'] ) : '';
			$instance['linked']   = ( !empty($new_instance['linked']) ) ? strip_tags ( $new_instance['linked'] ) : '';


			return $instance;
		}

		/**
		 * Back-end widget form.
		 *
		 * @see WP_Widget::form()
		 *
		 * @param array $instance Previously saved values from database.
		 */
		public function form($instance){
			$image 		 = !empty($instance['image']) ? $instance['image'] : '';
			$text = !empty($instance['text']) ? $instance['text'] : '';
			$phonenumber = !empty($instance['phonenumber']) ? $instance['phonenumber'] : '';

			$facebook = !empty($instance['facebook']) ? $instance['facebook'] : '';
			$google = !empty($instance['google']) ? $instance['google'] : '';
			$twitter = !empty($instance['twitter']) ? $instance['twitter'] : '';
			$rss = !empty($instance['rss']) ? $instance['rss'] : '';
			$linked = !empty($instance['linked']) ? $instance['linked'] : '';
	
		?>
			<p>
				<label for="<?php echo esc_attr($this->get_field_id('image')); ?>"><?php echo esc_html__('Upload Image:','softd');?></label>
					<?php if(!empty($image)){ ?>
						<img class="custom_media_image" src="<?php echo esc_html($image); ?>" style="margin:0;padding:0;max-width:100px;display:inline-block" />
					<?php } ?>
					<input type="text" class="widefat custom_media_url" name="<?php echo esc_attr($this->get_field_name('image')); ?>" id="<?php echo esc_attr($this->get_field_id('image')); ?>" value="<?php echo esc_attr($image); ?>">
					<a href="#" id="custom_media_button" style="margin-top:10px;" class="button button-primary custom_media_button"><?php esc_html_e('Upload', 'softd'); ?></a>
			</p>
			<p>
				<label for="<?php echo esc_attr($this->get_field_id('text')); ?>"><?php echo esc_html__('Content:' ,'softd') ?></label>
				<textarea id="<?php echo esc_attr($this->get_field_id('text')); ?>" name="<?php echo esc_attr($this->get_field_name('text')); ?>" rows="3" class="widefat"><?php echo esc_textarea( $text ); ?></textarea>
			</p>
			<p>
				<label for="<?php echo esc_attr($this->get_field_id('phonenumber')); ?>"><?php echo esc_html__('Phone Number:' ,'softd') ?></label>
				<textarea id="<?php echo esc_attr($this->get_field_id('phonenumber')); ?>" name="<?php echo esc_attr($this->get_field_name('phonenumber')); ?>" rows="3" class="widefat"><?php echo esc_textarea( $phonenumber ); ?></textarea>
			</p>
			<p>
				<label for="<?php echo esc_attr($this->get_field_id('facebook')); ?>"><?php echo esc_html__('Facebook Link:' ,'softd') ?></label>
				<input type="text" id="<?php echo esc_attr($this->get_field_id('facebook')); ?>" class="widefat" name="<?php echo esc_attr($this->get_field_name('facebook')); ?>" value="<?php echo esc_attr( $facebook ); ?>" />
			</p>
			<p>
				<label for="<?php echo esc_attr($this->get_field_id('google')); ?>"><?php echo esc_html__('Google Plus Link:' ,'softd') ?></label>
				<input type="text" id="<?php echo esc_attr($this->get_field_id('google')); ?>" class="widefat" name="<?php echo esc_attr($this->get_field_name('google')); ?>" value="<?php echo esc_attr( $google ); ?>" />
			</p>
			<p>
				<label for="<?php echo esc_attr($this->get_field_id('twitter')); ?>"><?php echo esc_html__('Twitter Link:' ,'softd') ?></label>
				<input type="text" id="<?php echo esc_attr($this->get_field_id('twitter')); ?>" class="widefat" name="<?php echo esc_attr($this->get_field_name('twitter')); ?>" value="<?php echo esc_attr( $twitter ); ?>" />
			</p>
			<p>
				<label for="<?php echo esc_attr($this->get_field_id('rss')); ?>"><?php echo esc_html__('Rss Link:' ,'softd') ?></label>
				<input type="text" id="<?php echo esc_attr($this->get_field_id('rss')); ?>" class="widefat" name="<?php echo esc_attr($this->get_field_name('rss')); ?>" value="<?php echo esc_attr( $rss ); ?>" />
			</p>
			
			
			<p>
				<label for="<?php echo esc_attr($this->get_field_id('linked')); ?>"><?php echo esc_html__('Linkedin Link:' ,'softd') ?></label>
				<input type="text" id="<?php echo esc_attr($this->get_field_id('linked')); ?>" class="widefat" name="<?php echo esc_attr($this->get_field_name('linked')); ?>" value="<?php echo esc_attr( $linked ); ?>" />
			</p>
			

			
		<?php
		}
	}
}
// register Short description widget
function softd_description_Widget() {
    register_widget( 'softd_description_Widget' );
}
add_action( 'widgets_init', 'softd_description_Widget' );