<?php  
	/* QUI主题 数据调用
	 * color,text值类型为字符串
	 * switcher 开关，后台默认为空，修改过后状态为0和1-数字。开启时值为1。关闭时值为0。
	 * media 值类型为数组，属性值有：url，id，width，height，thumbnail，alt，title，description
	 * dimensions 值类型为数组，调用同media
	 * border 值类型为数组,属性值有:all-四周线宽，style-样式，color-颜色
	 * */
	if (! function_exists('QUITheme')) {
		function QUITheme($option = '', $default = null) {
		    $options = get_option('QUI_Theme');
		    return (isset($options[$option])) ? $options[$option] : $default;
		}
	}
	//主题名称
	function QUI_Theme(){ 
		$QUIName = QUITheme('set-theme');
		$ThemeFileNames = ThemeFileNames();
		if(! $QUIName ){
		    return $ThemeFileNames[0];
		}else{
        	return $ThemeFileNames[$QUIName];
		}
	}
	//主题路径
	function QUI_ThemePath(){ 
		$QUIName = QUI_Theme();
		return '/theme/'.$QUIName.'/';
	}
 
 	//主题模式：值为1时，深色模式，其他情况浅色模式
	function QUI_DarkFlag(){ 
		return QUITheme('set-dark');
	}
	
	//主题主色调，默认#0077ff
	function QUI_MainColor(){ 
		return QUITheme('set-mainColor');
	}
	//主题背景色，默认#fff
	function QUI_MainBGColor(){ 
		return QUITheme('set-backgroundColor');
	}
	//主题背景图，默认无
	function QUI_MainBGImg(){ 
		return QUITheme('set-bgimg');
	}
	//主题LOGO
	function QUI_LOGO(){ 
		return QUITheme('set-logo');
	}
	
	//主题ico图标
	function QUI_ICO(){ 
		return QUITheme('set-ico');
	}
	//主题页面宽度
	function QUI_Width(){ 
		return QUITheme('set-pageWidth');
	}
	//主题页面圆角
	function QUI_Radius(){ 
		return QUITheme('set-pageRadius');
	}
	//主题页面边框
	function QUI_Border(){ 
		return QUITheme('set-pageBorder');
	}
	//欢迎语是否显示
	function QUI_WelcomeFlag(){ 
		return QUITheme('set-welcomeFlag');
	}
	//欢迎语
	function QUI_WelcomeTip(){ 
		return QUITheme('set-welcomeTip');
	}
 	//网站备案号
	function QUI_ICP(){ 
		return QUITheme('set-icp');
	}
	//网站备案号
	function QUI_GA(){ 
		return QUITheme('set-gongan');
	}
	//网站顶部图片
	function QUI_TopImg(){ 
		return QUITheme('set-topImg');
	}
	//网站顶部图片开关
	function QUI_TopImgFlag(){ 
		return QUITheme('set-topImgFlag');
	}
	//网站顶部图片是否与ban联动开关
	function QUI_TopBanFlag(){ 
		return QUITheme('set-topBanFlag');
	}
	//是否显示注册登录
	function QUI_LoginShow(){ 
		return QUITheme('set-hideLogin');
	}
	function QUI_ActiveCode(){ 
		return QUITheme('set-ActiveCode');
	}
	//是否开启友联
	function QUI_LinkShow(){ 
		return QUITheme('set-webLink');
	}
	//首页关键词
	function QUI_SEOKey(){ 
		return QUITheme('set-key');
	}
	//首页描述
	function QUI_SEODescribe(){ 
		return QUITheme('set-describe');
	}
 	//站点地图
	function QUI_SEOSiteMap(){ 
		return QUITheme('set-siteMap');
	}
	//站点统计
	function QUI_SEOCount(){ 
		return QUITheme('set-seoCount');
	}
	//轮播图是否开启
	function QUI_BannerFlag(){ 
		return QUITheme('set-bannerFlag');
	}
	//轮播图高度
	function QUI_BannerHeight(){ 
		return QUITheme('set-bannerHeight');
	}
	//轮播图圆角
	function QUI_BannerRadius(){ 
		return QUITheme('set-bannerRadius');
	}
	//轮播宽度
	function QUI_BannerStyle(){ 
		return QUITheme('set-bannerStyle');
	}
	//轮播图列表
	function QUI_Banner(){ 
		return QUITheme('set-banner');
	}
	//联系电话
	function QUI_Phone(){ 
		return QUITheme('set-phone');
	}
	//QQ
	function QUI_QQ(){ 
		return QUITheme('set-QQ');
	}
	//QQ二维码
	function QUI_QQCode(){ 
		return QUITheme('set-QQCode');
	}
	//微信二维码
	function QUI_WXCode(){ 
		return QUITheme('set-WXCode');
	}
	//广告是否开启
	function QUI_ADOpen(){ 
		return QUITheme('set-ADOpen');
	}
	//广告链接
	function QUI_ADHead(){ 
		return QUITheme('set-ADHead');
	}
 	//侧栏广告单元
	function QUI_ADSlide(){ 
		return QUITheme('set-ADSlide');
	}
	//列表广告单元
	function QUI_ADList(){ 
		return QUITheme('set-ADList');
	}
	//列表行间距
	function QUI_ListLiheH(){ 
		return QUITheme('set-lineHeight');
	}
	//列表卡片行间距
	function QUI_LineCardH(){ 
		return QUITheme('set-lineCardHeight');
	}
	//文章广告单元
	function QUI_ADArticle(){ 
		return QUITheme('set-ADArticle');
	}
	//弹框是否开启
	function QUI_BoomFlag(){ 
		return QUITheme('set-boomFlag');
	}
	//弹框是否重复出现
	function QUI_BoomStatus(){ 
		return QUITheme('set-boomStatus');
	}
	//弹框背景色调
	function QUI_BoomStyle(){ 
		return QUITheme('set-boomStyle');
	}
	//弹框主图图片
	function QUI_BoomImg(){ 
		return QUITheme('set-BoomImg');
	}
	//弹框横图图片
	function QUI_BoomImg2(){ 
		return QUITheme('set-BoomImg2');
	}
	//弹框文字标题
	function QUI_BoomTextTitle(){ 
		return QUITheme('set-BoomTextTitle');
	}
	//弹框文字BoomTextTitle
	function QUI_BoomText(){ 
		return QUITheme('set-BoomText');
	}
	//弹框大小
	function QUI_BoomSize(){ 
		return QUITheme('set-boomSize');
	}
	//弹框链接
	function QUI_BoomLink(){ 
		return QUITheme('set-BoomLink');
	}
	//弹框截至日期
	function QUI_BoomDate(){ 
		return QUITheme('set-BoomDate');
	}
   	//复制功能是否开启
	function QUI_CodeCopy(){ 
		return QUITheme('set-copy');
	}
	//古登堡编辑器样式是否移除
	function QUI_Gudengbao(){ 
		return QUITheme('set-gudengbao');
	}
    //主题路径
	function QUI_TempUrl(){ 
		return bloginfo('template_url').QUI_ThemePath();
	}
	//列表标题隐藏行数
	function QUI_TitleHidden(){
		return QUITheme('set-titleHidden');
	}
	//列表描述是否显示
	function QUI_DesSwitcher(){
		return QUITheme('set-desSwitcher');
	}
	//列表描述隐藏行数
	function QUI_DesHidden(){
		return QUITheme('set-desHidden');
	}
	//封面是否显示
	function QUI_ImageHidden(){
		return QUITheme('set-imageHidden');
	}
	//列表默认图片
	function QUI_ListDefaultImg(){
		return QUITheme('set-list-default-img');
	}
	//封面显示几张图
	function QUI_ImageShowNumber(){
		return QUITheme('set-imageShowNumber');
	}
	//列表是否显示作者
	function QUI_AuthorHidden(){
		return QUITheme('set-authorHidden');
	}
	//列表是否显示分类
	function QUI_ClassHidden(){
		return QUITheme('set-classHidden');
	}
	//列表显示时间
	function QUI_TimeHidden(){
		return QUITheme('set-timeHidden');
	}
	//时间格式
	function QUI_TimeFormat(){
		return QUITheme('set-timeFormat');
	}
	//列表标签是否显示
	function QUI_TagHidden(){
		return QUITheme('set-tagHidden');
	}
	//列表是否显示评论数量
	function QUI_ComHidden(){
		return QUITheme('set-comHidden');
	}
	//列表是否显示阅读数
	function QUI_ViewHidden(){
		return QUITheme('set-viewHidden');
	}
	//列表卡片化
	function QUI_ListLayer(){
		return QUITheme('set-card');
	}
	//列表卡片化数量
	function QUI_CardNum(){
		return QUITheme('set-cardNum');
	}
	//列表卡片化无图封面
	function QUI_CardNoIMGDefault(){
		return QUITheme('set-card-default');
	}
	//文章评论是否显示
	function QUI_ArticleComment(){
		return QUITheme('set-articleComment');
	}
	//文章图片对齐
	function QUI_ArticleAlign(){
		return QUITheme('set-articleAlign');
	}
	//文章图片宽度开关
	function QUI_ArticleWidthFlag(){
		return QUITheme('set-articleWidthFlag');
	}
	//文章图片宽度
	function QUI_ArticleWidth(){
		return QUITheme('set-articleWidth');
	}
	
	//计算图片高度
	function QUI_CardIMGHeight(){
		if(QUI_CardNum() == 1){
			return "300px";
		}
		if(QUI_CardNum() == 2){
			return "220px";
		}
		if(QUI_CardNum() == 3){
			return "200px";
		}
		if(QUI_CardNum() >= 4){
			return "180px";
		}
	}
	//动态计算卡片化的高度
	function QUI_CardHight(){
		$res = 16;//默认填充高度
		$a =  QUI_TitleHidden();
		switch ($a){
		case 1:
		   	$res = 20*1.5*1;
		    break;
		case 2:
		    $res = 20*1.5*2;
		    break;
		case 3:
		    $res = 20*1.5*3;
		    break;
		default:
		    $res = 0;
		}
		$b = QUI_DesHidden();
		if(QUI_DesSwitcher()){

			switch ($b){
			case 1:
			   	$res = 	$res + 16*1.4*1 + 20;
			    break;
			case 2:
			    $res = $res + 16*1.4*2 + 20;
			    break;
			case 3:
			    $res = $res + 16*1.4*3 + 20;
			    break;
			default:
			    $res = $res ;
			}
		}
		return $res;
	}
	//文章页面标题固定悬浮
	function QUI_TitleFix(){
		return QUITheme('set-titleFix');
	}
	//是否显示文章分类效果
	function QUI_ArticleClass(){
		return QUITheme('set-articleClass');
	}
	//文章猜你喜欢是否显示
	function QUI_ArticleRelate(){
		return QUITheme('set-articleRelate');
	}
	//首页专题列表推荐是否显示
	function QUI_IndexTopic(){
		return QUITheme('set-indexTopic');
	}
	//首页专题列表显示数量
	function QUI_IndexTopicNum(){
		return QUITheme('set-indexTopicNum');
	}
	//横向填充
	function QUI_PagePadding(){
		return QUITheme('set-pagePadding');
	}
	
	//首页推荐置顶是否显示
	function QUI_IndexTop(){
		return QUITheme('set-indexTop');
	}
	//首页热门文章是否显示
	function QUI_IndexHot(){
		return QUITheme('set-indexHot');
	}
	//首页热门文章是否显示
	function QUI_IndexSelected(){
		return QUITheme('set-indexSelected');
	}
	//交互效果开关
	function QUI_Eeffect(){
		return QUITheme('set-effect');
	}
	//交互效果
	function QUI_EffectStyle(){
		return QUITheme('set-effectStyle');
	}
	//小工具
	function QUI_Tools(){
		return QUITheme('set-tools');
	}
	//侧栏
	function QUI_SlideFlag(){
		return QUITheme('set-slide');
	}
	// 动态标题
	function QUI_TitleEffect(){
		return QUITheme('set-titleEffect');
	}
	// 进入标题
	function QUI_TitleEffectInText(){
		return QUITheme('set-titleEffectInText');
	}
	// 离开标题
	function QUI_TitleEffectOutText(){
		return QUITheme('set-titleEffectOutText');
	}
	//是否是管理员
	function QUI_IsAdministrator(){
		  $currentUser = wp_get_current_user();
		  if(!empty($currentUser->roles) && in_array('administrator', $currentUser->roles)) 
		    return 1;  // 是管理员
		  else
		    return 0;  // 非管理员
	}
	//屏蔽文章修订功能，精简文章表数据。
	function QUI_PostRevisions(){
		return QUITheme('set-post-revisions');
	}
	//顶部工具条
	function QUI_AdminBar(){
		return QUITheme('set-adminBar');
	}
	//header 无效代码
	function QUI_HeadCodeNone(){
		return QUITheme('set-headCodeNone');
	}
	function QUI_XMLRPCNone(){
		return QUITheme('set-XMLRPCNone');
	}
	function QUI_pingbackNone(){
		return QUITheme('set-pingbackNone');
	}
	function QUI_EmojiNone(){
		return QUITheme('set-EmojiNone');
	}
	function QUI_RESTNone(){
		return QUITheme('set-RESTNone');
	}
	function QUI_EmbedNone(){
		return QUITheme('set-EmbedNone');
	}
	function QUI_WordPressUpDateNone(){
		return QUITheme('set-WordPressUpDateNone');
	}
	

	//开启链接
	if( QUI_LinkShow() ){
		add_filter( 'pre_option_link_manager_enabled', '__return_true' );
	}
	
	//移除古登堡样式
	if( !QUI_Gudengbao() ){
		add_action( 'wp_enqueue_scripts', 'fanly_remove_block_library_css', 100 );
		add_filter('use_block_editor_for_post', '__return_false');
		remove_action( 'wp_enqueue_scripts', 'wp_common_block_scripts_and_styles' );
	}
	 
	if(QUI_Tools()){
		add_filter( 'gutenberg_use_widgets_block_editor', '__return_false' );
		add_filter( 'use_widgets_block_editor', '__return_false' );
		
	}
	 //精选类型，开启封面
	if( QUI_IndexSelected() ){
		add_theme_support( 'post-thumbnails', array( 'post' ) ); // 给文章启用文章缩略图功能
	}
	 
	if(QUI_PostRevisions()){
	 	// 禁用版本历史功能
		function disable_revisions() {
		    $post_types = get_post_types();
		    foreach ( $post_types as $post_type ) {
		        remove_post_type_support( $post_type, 'revisions' );
		    }
		}
		add_action("init", "disable_revisions");
	}
	if(QUI_AdminBar()){
		add_filter('show_admin_bar', '__return_false');
	}
	if(QUI_HeadCodeNone()){
		add_action( 'init', 'qui_disable_bisc' );
	}
	if(QUI_XMLRPCNone()){
	    add_filter('xmlrpc_enabled', '__return_false');
    	remove_action('xmlrpc_rsd_apis', 'rest_output_rsd');
	}
	if(QUI_pingbackNone()){
		add_filter('xmlrpc_methods', 'xmlrpc_methods');
	    function xmlrpc_methods($methods)
	    {
	        $methods['pingback.ping']                    = '__return_false';
	        $methods['pingback.extensions.getPingbacks'] = '__return_false';
	
	        return $methods;
	    }
	    //禁用 pingbacks, enclosures, trackbacks
	    remove_action('do_pings', 'do_all_pings', 10);
	    //去掉 _encloseme 和 do_ping 操作。
	    remove_action('publish_post', '_publish_post_hook', 5);
	}
	if(QUI_EmojiNone()){
		remove_filter('the_content_feed', 'wp_staticize_emoji');
	    remove_filter('comment_text_rss', 'wp_staticize_emoji');
	    remove_filter('wp_mail', 'wp_staticize_emoji_for_email');
		remove_action('admin_print_scripts', 'print_emoji_detection_script');
	    remove_action('admin_print_styles', 'print_emoji_styles');
	    remove_action('wp_head', 'print_emoji_detection_script', 7);
	    remove_action('wp_print_styles', 'print_emoji_styles');
	    remove_action('embed_head', 'print_emoji_detection_script');
	    add_filter('tiny_mce_plugins', 'disable_emoji_tiny_mce_plugin');
	    function disable_emoji_tiny_mce_plugin($plugins)
	    {
	        return array_diff($plugins, array('wpemoji'));
	    }
	    add_filter('emoji_svg_url', '__return_false');
	}
	if(QUI_RESTNone()){
		remove_action('init', 'rest_api_init');
	    remove_action('rest_api_init', 'rest_api_default_filters', 10);
	    remove_action('parse_request', 'rest_api_loaded');
	    add_filter('rest_enabled', '__return_false');
	    add_filter('rest_jsonp_enabled', '__return_false');
	    // 移除头部 wp-json 标签和 HTTP header 中的 link
	    remove_action('wp_head', 'rest_output_link_wp_head', 10);
	    remove_action('template_redirect', 'rest_output_link_header', 11);
	}
	if(QUI_EmbedNone()){
		remove_action('rest_api_init', 'wp_oembed_register_route');
	    remove_filter('rest_pre_serve_request', '_oembed_rest_pre_serve_request', 10, 4);
	    add_filter('embed_oembed_discover', '__return_false');
	    remove_filter('oembed_dataparse', 'wp_filter_oembed_result', 10);
	    remove_filter('oembed_response_data', 'get_oembed_response_data_rich', 10, 4);
	    remove_action('wp_head', 'wp_oembed_add_discovery_links');
	    remove_action('wp_head', 'wp_oembed_add_host_js');
	    add_filter('tiny_mce_plugins', 'disable_post_embed_tiny_mce_plugin');
	    function disable_post_embed_tiny_mce_plugin($plugins)
	    {
	        return array_diff($plugins, array('wpembed'));
	    }
	
	    add_filter('query_vars', 'disable_post_embed_query_var');
	    function disable_post_embed_query_var($public_query_vars)
	    {
	        return array_diff($public_query_vars, array('embed'));
	    }
	}
	if(QUI_WordPressUpDateNone()){
		add_filter('automatic_updater_disabled', '__return_true');
    	remove_action('init', 'wp_schedule_update_checks');
	}
	
	
?>



