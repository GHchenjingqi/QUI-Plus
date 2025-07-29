<?php 
	if (is_single()){
		if (function_exists('dynamic_sidebar') && dynamic_sidebar('widget_article')) : endif; 
	} 
	else if (is_home() && is_front_page() ){
		if (function_exists('dynamic_sidebar') && dynamic_sidebar('widget_index')) : endif; 
	}
	else if (is_tag()){
		if (function_exists('dynamic_sidebar') && dynamic_sidebar('widget_list')) : endif; 
	}
	else if (is_category() ){
		if (function_exists('dynamic_sidebar') && dynamic_sidebar('widget_list')) : endif; 
	}
	else {
		if (function_exists('dynamic_sidebar') && dynamic_sidebar('widget_list')) : endif; 
	}
?>