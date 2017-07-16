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

}
?>
