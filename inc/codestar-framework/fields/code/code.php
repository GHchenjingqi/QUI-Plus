<?php if ( ! defined( 'ABSPATH' ) ) { die; } // Cannot access directly.
/**
 *
 * Field: text
 *
 * @since 1.0.0
 * @version 1.0.0
 *
 */

//if($_POST['do']=='theme_active'){
//	return false;
//}
if ( ! class_exists( 'CSF_Field_code' ) ) {
  class CSF_Field_code extends CSF_Fields {

    public function __construct( $field, $value = '', $unique = '', $where = '', $parent = '' ) {
      parent::__construct( $field, $value, $unique, $where, $parent );
    }
    public function render() {
	  global $code_status,$newvision;
	  if($code_status != "1"){
	  	  $type = ( ! empty( $this->field['attributes']['type'] ) ) ? $this->field['attributes']['type'] : 'text';
	      echo $this->field_before();
		  $code = esc_attr( $this->value );
	      echo '<input type="text" id="theme_code"  value="'.get_option('theme_code').'"'. $this->field_attributes() .' />';
	 	  echo '<input type="button" name="theme_active" class="button button-primary csf-code csf-code-ajax" onclick="active_theme()" value="激活">';
	 	  echo '<p style="color: red;display: none;" id="err_tip"></p>';
	 	  echo '<div id="success_boom" style="display:none;position: fixed;z-index: 9999;top: 0;left: 0;width: 100%;height: 100%;background: rgba(0,0,0,.6);"><div style="display: block;width: min(560px, 90%);height: auto;background: #fff;border-radius: 20px;overflow: hidden;position: fixed;z-index: 9999;top: 50%;left: 50%;transform: translate(-50%,-50%);text-align: center;"><img style="width:100%;height: 120px;object-fit: cover;" src="'.get_template_directory_uri().'/static/img/default_top1.jpg"/><h3 style="padding: 50px 0 20px;">激活成功，欢迎加入QUIPlus大家庭！</h3><p style="padding-bottom: 50px;"><button style="padding:10px 30px;background: #0000FF;border: none;color: #fff;border-radius: 6px;cursor: pointer;" id="start-qui">开启新旅程</button></p></div></div>';
	      echo $this->field_after();
	  }else{
	  	  $theme = wp_get_theme();
	  	  echo '<div style="margin-bottom:20px;height:180px;width:100%"><a href="https://course.51qux.com/" target="_blank"><img style="width:100%;height:180px;object-fit: cover;" src="'.get_template_directory_uri().'/static/img/default_top1.jpg"/></a></div>';
    	  echo '<p style="font-size:18px;font-weight:600">感谢使用QUI正版主题，主题已激活！</p>';
    	  echo '<p>当前版本：V'.$theme->get( 'Version' ).'</p>';
    	  echo '<p>最新版本：V'.$newvision;
    	  if(floatval($newvision) > floatval( $theme->get( 'Version' ) ) ){
    	  	echo '<a href="https://course.51qux.com/quiplus-download" style="margin-left:20px" target="_blank">更新主题</a>';
    	  }
    	  echo'</p>';
      }

    }

  }
}

