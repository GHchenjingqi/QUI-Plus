<?php
	//移除head不必要代码，不局限于css,js,link
	function qui_disable_bisc() {
        remove_action( 'wp_head', 'wp_generator' ); //移除WordPress版本
        
        foreach (array('rss2_head', 'commentsrss2_head', 'rss_head', 'rdf_header', 'atom_head', 'comments_atom_head', 'opml_head', 'app_head') as $action) {
	        remove_action($action, 'the_generator');
	    }
        remove_action( 'wp_head', 'rsd_link' ); //移除离线编辑器开放接口
        remove_action( 'wp_head', 'wlwmanifest_link' ); //移除离线编辑器开放接口
        remove_action( 'wp_head', 'index_rel_link' ); //去除本页唯一链接信息
        remove_action( 'wp_head', 'parent_post_rel_link', 10, 0 ); //清除前后文信息
        remove_action( 'wp_head', 'start_post_rel_link', 10, 0 ); //清除前后文信息
        remove_action( 'wp_head', 'adjacent_posts_rel_link_wp_head', 10, 0 ); //清除前后文信息
        remove_action( 'wp_head', 'feed_links', 2 ); //移除feed
        remove_action( 'wp_head', 'feed_links_extra', 3 ); //移除feed
        remove_action( 'wp_head', 'rest_output_link_wp_head', 10 ); //移除wp-json链
        remove_action( 'wp_head', 'rel_canonical' ); //rel=canonical
        remove_action( 'wp_head', 'wp_shortlink_wp_head', 10, 0 ); //rel=shortlink
        remove_action( 'wp_head', 'wp_oembed_add_discovery_links' );
        remove_action('wp_head','_admin_bar_bump_cb');
        add_filter( 'wp_resource_hints', 'remove_dns_prefetch', 10, 2 ); //头部加载DNS预获取(dns-prefetch
        remove_filter('the_content', 'wptexturize');//禁止代码标点转换
        remove_filter( 'wp_robots', 'wp_robots_max_image_preview_large' );
		remove_action('template_redirect', 'wp_shortlink_header', 11); //禁止短链接 Header 标签
   		remove_action('template_redirect', 'rest_output_link_header', 11); // 禁止输出 Header Link 标签
   		remove_filter('the_content', array($GLOBALS['wp_embed'], 'autoembed'), 8); //禁用auto-embeds在日志中输入一个视频网站或者图片分享的 URL
    }

    //移除WordPress头部加载DNS预获取(dns-prefetch)
    function remove_dns_prefetch( $hints, $relation_type ) {
        if ( 'dns-prefetch' === $relation_type ) {
        return array_diff( wp_dependencies_unique_hosts(), $hints );
        }
        return $hints;
    }
    //移出头部global-styles-inline-css
	function fanly_remove_block_library_css() {
		wp_dequeue_style( 'wp-block-library' );
	  	wp_deregister_style('global-styles');
	}
	//浏览量记录
	function record_visitors(){
	    if (is_singular()){
	        global $post;
	        $post_ID = $post->ID;
	        if($post_ID){
	            $post_views = (int)get_post_meta($post_ID, 'views', true);
	            if(!update_post_meta($post_ID, 'views', ($post_views+1))){
	                add_post_meta($post_ID, 'views', 1, true);
	            }
	        }
	    }
	}
	add_action('wp_head', 'record_visitors'); 
	
	//删除分类标题中的“分类：”
	function qui_theme_archive_title( $title ) {
	    if ( is_category() ) {
	        $title = single_cat_title( '', false );
	    } elseif ( is_tag() ) {
	        $title = single_tag_title( '', false );
	    } elseif ( is_author() ) {
	        $title = '<span class="vcard">' . get_the_author() . '</span>';
	    } elseif ( is_post_type_archive() ) {
	        $title = post_type_archive_title( '', false );
	    } elseif ( is_tax() ) {
	        $title = single_term_title( '', false );
	    }
	 
	    return $title;
	}
	add_filter( 'get_the_archive_title', 'qui_theme_archive_title' );
	
	//摘要【...】 改成...
	function qui_excerpt_more($more) {
	    return '...';
	}
	add_filter('excerpt_more', 'qui_excerpt_more');
	//摘要返回200个字符串
	function qui_excerpt_length($length) {
	    return 200;
	}
	add_filter('excerpt_length', 'qui_excerpt_length');
	// 开启友链
	add_filter( 'pre_option_link_manager_enabled', '__return_true' );
	//头像加速
	if ( ! function_exists( 'get_cravatar_url' ) ) {
	    /**
	   	 *使用Cravatar头像服务替换Gravatar
	    * @param string $url
	    * @return string
	    */
	    function get_cravatar_url( $url ) {
	        $sources = array(
	            'www.gravatar.com',
	            '0.gravatar.com',
	            '1.gravatar.com',
	            '2.gravatar.com',
	            'secure.gravatar.com',
	            'cn.gravatar.com'
	        );
	        return str_replace( $sources, 'cravatar.cn', $url );
	    }
	    add_filter( 'um_user_avatar_url_filter', 'get_cravatar_url', 1 );
	    add_filter( 'bp_gravatar_url', 'get_cravatar_url', 1 );
	    add_filter( 'get_avatar_url', 'get_cravatar_url', 1 );
	}
	
	//分页添加class
	add_filter('next_posts_link_attributes', 'next_posts_link_attributes');
	add_filter('previous_posts_link_attributes', 'previous_link_attributes');
	 
	function next_posts_link_attributes() {
	  return 'class="next"';
	}
	function previous_link_attributes() {
	  return 'class="prev"';
	}

	//当搜索结果只有一篇时直接重定向到日志
	add_action('template_redirect', 'redirect_single_post');
	function redirect_single_post(){
	    if (is_search() && get_query_var('module') == '') {
	        global $wp_query;
	        $paged = get_query_var('paged');
	        if (1 == $wp_query->post_count && empty($paged)) {
	            wp_redirect(get_permalink($wp_query->posts['0']->ID));
	        }
	    }
	}
	
	//删除中文包中的一些无用代码
	add_action('init', 'remove_zh_ch_functions');
	function remove_zh_ch_functions(){
	    remove_action('admin_init', 'zh_cn_l10n_legacy_option_cleanup');
	    remove_action('admin_init', 'zh_cn_l10n_settings_init');
	    wp_embed_unregister_handler('tudou');
	    wp_embed_unregister_handler('youku');
	    wp_embed_unregister_handler('56com');
	}
	
	//WordPress删除除无效的定时作业cron
	add_action('plugins_loaded', 'basic_cron');
	function basic_cron(){
	    wp_schedule_event(time(), 'daily', 'wpjam_remove_invild_crons');
	}
	/**  
	*参数$title 字符串 页面标题  
	*参数$slug  字符串 页面别名  
	*参数$page_template 字符串  模板名  
	*无返回值  
	**/  
	function QUI_add_page($title,$slug,$page_template=''){   
	    $allPages = get_pages();//获取所有页面   
	    $exists = false;   
	    foreach( $allPages as $page ){   
	        //通过页面别名来判断页面是否已经存在   
	        if( strtolower( $page->post_name ) == strtolower( $slug ) ){   
	            $exists = true;   
	        }   
	    }   
	    if( $exists == false ) {   
	        $new_page_id = wp_insert_post(   
	            array(   
	                'post_title' => $title,   
	                'post_type'     => 'page',   
	                'post_name'  => $slug,   
	                'comment_status' => 'closed',   
	                'ping_status' => 'closed',   
	                'post_content' => '',   
	                'post_status' => 'publish',   
	                'post_author' => 1,   
	                'menu_order' => 0   
	            )   
	        );   
	        //如果插入成功 且设置了模板   
	        if($new_page_id && $page_template!=''){   
	            //保存页面模板信息   
	            update_post_meta($new_page_id, '_wp_page_template',  $page_template);   
	        }   
	    }   
	}
	//创建必备页面
	function QUIAddPages() {   
	  global $pagenow;   
	  //判断是否为激活主题页面   
	  if ( 'themes.php' == $pagenow && isset( $_GET['activated'] ) ){   
	    QUI_add_page('置顶页面','top','index_top.php');
	    QUI_add_page('热门页面','hot','index_hot.php');
	    QUI_add_page('友链申请','links','link.php');
	   }
	}   
	add_action( 'load-themes.php', 'QUIAddPages' );  
	
	
	// 注册 小工具 页面 侧栏模块
	function QUI_widgets_init() {
		    register_sidebar(array(
		        'name'			=> esc_html__( '首页侧栏', 'QUI' ),
		        'id'			=> 'widget_index',
		        'description'   => esc_html__( '首页侧栏小工具', 'QUI' ),
		        'before_widget'	=> '<section id="%1$s" class="widget widget-index %2$s">', 
		        'after_widget'	=> '</section>', 
		        'before_title'	=> '<h3 class="widget-title">', 
		        'after_title'	=> '</h3>' ,
		    ));
		    register_sidebar(array(
		    	'name'			=> esc_html__( '列表页侧栏', 'QUI' ),
		    	'id'			=> 'widget_list',
		    	'description'   => esc_html__( '列表页侧栏', 'QUI' ),
		        'before_widget'	=> '<section id="%1$s" class="widget widget-list  %2$s">', 
		        'after_widget'	=> '</section>', 
		        'before_title'	=> '<h3 class="widget-title">', 
		        'after_title'	=> '</h3>' ,
		    ));
		    
		    register_sidebar(array(
		    	'name'			=> esc_html__( '文章页侧栏', 'QUI' ),
		    	'id'			=> 'widget_article',
		    	'description'   => esc_html__( '文章页侧栏', 'QUI' ),
		        'before_widget'	=> '<section id="%1$s" class="widget widget-article  %2$s">', 
		        'after_widget'	=> '</section>', 
		        'before_title'	=> '<h3 class="widget-title">', 
		        'after_title'	=> '</h3>' ,
		    ));
	}
	add_action( 'widgets_init', 'QUI_widgets_init' );
?>