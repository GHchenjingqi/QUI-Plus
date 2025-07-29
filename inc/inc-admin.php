<?php
function get_code_status(){
    return "1";
}

if (class_exists('CSF')) {
    require_once get_theme_file_path() . '/inc/config/config.php';
    global $name, $code_status;
    $prefix = $name;
    $code_status = get_code_status();
    // 一级分类
    CSF::createOptions($prefix, array("framework_title" => 'QUI-SKY &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<small>QQ:928828762</small>', 'menu_title' => 'QUIPlus设置', 'menu_slug' => 'QUITheme', 'menu_position' => 50, 'show_reset_all' => true));
    CSF::createSection($prefix, array('title' => '风格切换', 'icon' => 'fas fa-exchange-alt', 'fields' => $setTheme));
    CSF::createSection($prefix, array('title' => '基础设置', 'icon' => 'fas fa-bars', 'fields' => $setBasics));
    if ($code_status == '1') {
        CSF::createSection($prefix, array('title' => '布局开关', 'icon' => 'fas fa-columns', 'fields' => $setLayer));
        CSF::createSection($prefix, array('title' => '站点SEO', 'icon' => 'fas fa-spider', 'fields' => $setSeo));
        CSF::createSection($prefix, array('title' => '列表设置', 'icon' => 'fas fa-align-left', 'fields' => $setLists));
        CSF::createSection($prefix, array('title' => '文章设置', 'icon' => 'fas fa-star', 'fields' => $setArtcile));
        CSF::createSection($prefix, array('title' => '轮播设置', 'icon' => 'fas fa-images', 'fields' => $setBanner));
        CSF::createSection($prefix, array('title' => '悬浮设置', 'icon' => 'fas fa-qrcode', 'fields' => $setQRcode));
        CSF::createSection($prefix, array('title' => '弹窗配置', 'icon' => 'fas fa-image', 'fields' => $setBoom));
        CSF::createSection($prefix, array('title' => 'WP优化', 'icon' => 'fas fa-spider', 'fields' => $setBit));
        CSF::createSection($prefix, array('title' => '特色功能', 'icon' => 'far fa-gem', 'fields' => $setTool));
    }
    CSF::createSection($prefix, array('title' => '主题激活', 'icon' => 'fas fa-dollar-sign', 'fields' => $setAct));
}
