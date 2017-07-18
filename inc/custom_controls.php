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

  class WP_test_Color_Control extends WP_Customize_Control {
  public $type = 'test';
// ...
  /**
   * Render a JS template for the content of the color picker control.
   */
  public function content_template() {
    ?>
    <# var defaultValue = '';
    if ( data.defaultValue ) {
      if ( '#' !== data.defaultValue.substring( 0, 1 ) ) {
        defaultValue = '#' + data.defaultValue;
      } else {
        defaultValue = data.defaultValue;
      }
      defaultValue = ' data-default-color=' + defaultValue; // Quotes added automatically.
    } #>
    <label>
      <# if ( data.label ) { #>
        <span class="customize-control-title">{{{ data.label }}}</span>
      <# } #>
      <# if ( data.description ) { #>
        <span class="description customize-control-description">{{{ data.description }}}</span>
      <# } #>

      <# if ( data.test ) { #>
        <span class="description customize-control-description">{{{ data.test }}}</span>
      <# } #>
      <div class="customize-control-content">
        <input class="color-picker-hex" type="text" maxlength="7" placeholder="<?php esc_attr_e( 'Hex Value' ); ?>" {{ defaultValue }} />
      </div>
    </label>
    <?php
  }
}

}
?>
