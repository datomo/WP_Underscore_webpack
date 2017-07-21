<?php
if (class_exists('WP_Customize_Control')){

  class Title_Custom_control extends WP_Customize_Control{
  	public $type = 'title';
  	public function render_content(){
  		?>
  		<h1 class="customize-control-title"><?php echo esc_html( $this->label ); ?></h1>
  		<?php
  	}
  }

  class Separator_Custom_control extends WP_Customize_Control{
  	public $type = 'separator';
  	public function render_content(){
  		?>
  		<p><hr></p>
  		<?php
  	}
  }

  class Slider_control extends WP_Customize_Control {
  	public $type = 'slider';
  	public function render_content() { ?>
		<label>
			<span class="customize-control-title"><?php echo esc_html( $this->label ); ?></span>
			<div id="slider">
				<input id="slide" type="range" min="<?php echo min ; ?>" max="<?php echo max; ?>" step="<?php echo step; ?>" value="<?php echo esc_attr($this->value()); ?>" onchange="updateSlider(<?php $this->link(); checked( $this->value() ); ?>)" <?php $this->link(); ?> />
        <h3 class="slider-text"><?php echo esc_html($this->value()); ?></h3>
      </div>
		</label>
	<?php }
  }

  class WP_Customize_Range_Control extends WP_Customize_Control
  {
      public $type = 'custom_range';
      public function render_content()
      {
          ?>
          <label>
              <?php if ( ! empty( $this->label )) : ?>
                  <span class="customize-control-title"><?php echo esc_html($this->label); ?></span>
              <?php endif; ?>
              <span class="slider">
                <input class="cs-range-value" value="<?php echo esc_attr($this->value()); ?>" <?php $this->link(); ?>></input>
                <p class="input-unit">px</p>
                <input class="istyle" data-input-type="range" type="range" <?php $this->input_attrs(); ?> value="<?php echo esc_attr($this->value()); ?>" <?php $this->link(); ?> />
              </span>
              <?php if ( ! empty( $this->description )) : ?>
                  <span class="description customize-control-description"><?php echo $this->description; ?></span>
              <?php endif; ?>
          </label>
          <?php
      }
  }

  class Toggle_Checkbox_Custom_control extends WP_Customize_Control{
	public $type = 'toogle_checkbox';
	public function enqueue(){
		// wp_enqueue_style( 'custom_controls_css', get_template_directory_uri().'/inc/customizer/css/custom_controls.css');
	}
	public function render_content(){
		?>
		<div class="checkbox_switch">
			<div class="onoffswitch">
			    <input type="checkbox" id="<?php echo esc_attr($this->id); ?>" name="<?php echo esc_attr($this->id); ?>" class="onoffswitch-checkbox" value="<?php echo esc_attr( $this->value() ); ?>" <?php $this->link(); checked( $this->value() ); ?>>
			    <label class="onoffswitch-label" for="<?php echo esc_attr($this->id); ?>"></label>
			</div>
			<span class="customize-control-title onoffswitch_label"><?php echo esc_html( $this->label ); ?></span>
			<p><?php echo wp_kses_post($this->description); ?></p>
		</div>
		<?php
	}
}

}
?>
