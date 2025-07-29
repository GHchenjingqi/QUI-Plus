<?php

//为商品类自定义类型增加分类功能
add_action( 'init', 'qui_class_child', 0 ); 
function qui_class_child() {
    register_taxonomy(
        $name='special',
        $post_type='series',
        array(
            'labels' => array(
                'name' => '专题分类',
                'add_new_item' => '添加专题',
                'new_item_name' => "新专题分类"
            ),
            'show_ui' => true,
            'show_tagcloud' => true,
            'hierarchical' => true,
        )
    );
}
//新增自定义文章类型：专题
function qui_class() {
    register_post_type( 'series', //新增文章类型，series为名称
        array(
            'labels' => array(
                'name' => '专题',
                'singular_name' => '所有专题',
                'add_new' => '添加专题',
                'add_new_item' => '添加新专题',
                'edit' => '编辑',
                'edit_item' => '编辑专题',
                'new_item' => '新专题',
                'view' => '查看专题',
                'view_item' => '查看专题',
                'search_items' => '搜索专题',
                'not_found' => '没有找到相关专题',
                'not_found_in_trash' => '没有专题评论',
                'parent' => '专题评论',
            ),
            'exclude_from_search'=>false,
            'public' => true,
            'show_ui' => true,
       		'show_in_menu' => true,
       		'show_in_nav_menus' => true,
            'menu_position' => 6,
            'show_in_rest'  => true,//调用古登堡编辑器
            'has_archive' => 'series',
            'taxonomies'=> array('special','post_tag'), // array('category','post_tag'), //分类法，我们是单独定义,没有这一句是没有标签功能的
            'supports' => array( 'title', 'editor','comments', 'custom-fields','thumbnail','excerpt'), //为自定义文章添加标题，编辑器，评论，自定义字段，特色图像，摘要功能
        )
    );
}
add_action( 'init', 'qui_class' ); //挂载函数

//自定义小控件
//function qui_meta_box_callback($meta_id) {
//	$outline = '<label for="post-keywords">关键词：</label>';
//	$post_keywords = get_post_meta($meta_id->ID, 'post_keywords', true);
//	$outline .= '<input type="text" name="post_keywords" id="post-keywords" size="16" value="' . esc_attr($post_keywords) . '">';
//	echo $outline;
//}
//function qui_test_meta_box() {
//  add_meta_box('post-special', '关键词设置', 'qui_meta_box_callback', 'series', 'side', 'high');
//}
//add_action('add_meta_boxes', 'qui_test_meta_box');
?>