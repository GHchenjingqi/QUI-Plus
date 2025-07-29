<!--二级页面包屑 -->
<article class="flex-1 <?php if(QUI_CodeCopy()) {echo "sel-no";}else{ echo "sel-auto";} ?>">
<main>
	<?php get_template_part('/temp/bread');?>
 	<section class="ui-search-page">
            <?php if ( !have_posts() ) : ?>
            <h2 class="text-center  pt35 mt30">姿势不对？换个词再试试！</h2>
            <aside class="padding mt20">
               	<form method="get" class="ui-search-form shadow" action="<?php bloginfo('url'); ?>">
                    <input class="search-field" placeholder="输入关键词进行搜索…" autocomplete="off" value="" name="s" required="true" type="search">
                    <button type="submit" class="search-submit">搜索</button>
                </form>
            </aside>  

            <?php else: ?>
       		<div class="mt20 bgff padding text-center">
       			小酷为您找到相关" <mark style="color: var(--mainColor);"><?php echo $s; ?></mark> "结果<?php global $wp_query; echo '约  ' . $wp_query->found_posts .' 个';?>
       		</div>		
           	<div class="list-box mt20"> 
	            <ul><?php global $i; $i = 0; 
	             	while ( have_posts() ) : the_post();$p_id = get_the_ID();
	                        set_query_var('i', $i);
	                        get_template_part( 'temp/loop' ); 
	                        $i++;
	            endwhile; ?>
			    </ul>
			</div>
        <?php QUI_PageNavLink();?>
        <?php endif; ?>
    </section>
	<?php  if(QUI_SlideFlag() &&  QUI_ListLayer()  == 0 ){ ?>
		</article>
		<aside class="ui-list-right mt20 right">
			<?php if (function_exists('dynamic_sidebar') && dynamic_sidebar('widget_article')) : endif;  ?> 
		</aside>
<?php }?>	
</main>
</article>