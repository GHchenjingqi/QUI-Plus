<?php 
require( dirname(__FILE__) . '/../../../../wp-load.php' );
if(is_user_logged_in()){
	global $wpdb;
	if($_POST['do']=='profile'){
		$userdata = array();
		$userdata['ID'] = wp_get_current_user()->ID;
		$userdata['nickname'] = str_replace(array('<','>','&','"','\'','#','^','*','_','+','$','?','!'), '', $wpdb->escape($_POST['mm_name']));
		$userdata['user_email'] = $wpdb->escape($_POST['mm_mail']);
		$userdata['user_url'] = $wpdb->escape($_POST['mm_url']);
		$userdata['description'] = $wpdb->escape($_POST['mm_desc']);
		wp_update_user($userdata);
		echo "success";
	}elseif($_POST['do']=='code'){
		$arr =  $wpdb->escape($_POST['code_name']);
		$val = $wpdb->escape($_POST['code_val']);
		update_option($arr,$val); 
		$arr1 =  $wpdb->escape($_POST['code_time']);
		$val1 = $wpdb->escape($_POST['code_timeval']);
		update_option($arr1,$val1); 
		echo "success";  
	}
}
