<section class="mla flex aic jcfd ui-search-box"> 
	<section class="ui-search p-r">
		<section class="ui-search-icon hand" id="searchStart">
			<img src="<?php echo QUI_TempUrl();?>/svg/search.svg" alt=""/>
		</section>
		<section class="ui-search-content" id="searchContent">
			<form method="get" class="search-boom-form" action="<?php bloginfo('url'); ?>">
		        <input class="search-input"  placeholder="输入关键词进行搜索…" autocomplete="off" value="" name="s" autofocus required="true" type="search">
		        <button type="submit" class="search-btn">搜索</button>
		    </form>
		</section>
	</section>
	<?php if(QUI_LoginShow()){ 
		get_template_part('/temp/user');
	} ?>
</section>
<?php if(wp_is_mobile()){  ?>
<section class="ui-wap ui-class-box mla">
	<img class="classIcon" src="<?php echo QUI_TempUrl();?>/svg/icon_class.svg" alt=""/>
</section>
<aside class="ui-wap ui-wap-menu" style="display: none;">
	<ui-wap-header>
		<img class="wapBack" src="<?php echo QUI_TempUrl();?>/svg/icon_back.svg" alt=""/>
		<span>菜单</span>
	</ui-wap-header>
	<ui-wap-menu>
	  <?php if(function_exists('wp_nav_menu')) wp_nav_menu(array('container' => false, 'theme_location' => 'QuiMenuTop')); ?>
	</ui-wap-menu>
</aside>
<script>
	$(".classIcon").click(()=>{
		$(".ui-wap-menu").animate({left:"0px"})
		$("body").css({height:"100%",overflow:"hidden",position: "fixed"})
	})
	$(".wapBack").click(()=>{
		$(".ui-wap-menu").animate({left:"100%"})
			$("body").css({height:"100%",overflow:"auto",position: ""})
	})
</script>
<?php	} ?>