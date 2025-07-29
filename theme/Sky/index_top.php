<?php
/*SKY 首页置顶模板*/
?>
<article class="flex-1 <?php if(QUI_CodeCopy()) {echo "sel-no";}else{ echo "sel-auto";} ?>">
<?php  get_template_part( 'temp/banner/slider' );?>
<main  class="<?php if(QUI_WelcomeTip() && QUI_WelcomeFlag()){echo "mtf1rem";}?>">
	<?php get_template_part( 'temp/index/select' );?>
	<?php get_template_part( 'temp/index/topic' ); ?>
	<!--列表-->
	<section class="ui-main mt20">
		<?php  if(QUI_SlideFlag() &&  QUI_ListLayer()  == 0 ){ ?>
				<article class="ui-list-left left">
		<?php }?>
		<?php if(QUI_IndexTop() || QUI_IndexHot()) {?>
		<div class="tab-nav">
		    <a href="/">最新</a>
		    <?php if(QUI_IndexTop()) {?>
		    <a class="active" href="/top">置顶推荐</a>
		    <?php } ?>
		    <?php if(QUI_IndexHot()) {?>
		     <a href="/hot">热门文章</a>
		    <?php } ?>
		</div>
		<?php } ?>
		<?php  get_template_part( 'temp/list-top' );  ?>
		<?php  if(QUI_SlideFlag() &&  QUI_ListLayer()  == 0 ){ ?>
				</article>
				<aside class="ui-list-right right">
					<?php if (function_exists('dynamic_sidebar') && dynamic_sidebar('widget_index')) : endif;  ?> 
				</aside>
		<?php }?>		
	</section>
</main>
</article>