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
        public function enqueue()
        {
            // wp_enqueue_script(
            //     'cs-range-control',
            //     '/js/customizer-control.js',
            //     array('jquery'),
            //     false,
            //     true
            // );
        }
        public function render_content()
        {
            ?>
            <label>
                <?php if ( ! empty( $this->label )) : ?>
                    <span class="customize-control-title"><?php echo esc_html($this->label); ?></span>
                <?php endif; ?>
                <div class="cs-range-value"><?php echo esc_attr($this->value()); ?></div>
                <input data-input-type="range" type="range" <?php $this->input_attrs(); ?> value="<?php echo esc_attr($this->value()); ?>" <?php $this->link(); ?> />
                <?php if ( ! empty( $this->description )) : ?>
                    <span class="description customize-control-description"><?php echo $this->description; ?></span>
                <?php endif; ?>
            </label>
            <?php
        }
    }

}
?>
