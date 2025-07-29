<!--自定义文章类型分类模板-->
<?php
 $taxonomy = get_queried_object();
?>
<article class="flex-1 <?php if(QUI_CodeCopy()) {echo "sel-no";}else{ echo "sel-auto";} ?>">
<aside class="ui-class">
	<main>	
		<h2  class="text-h1">
			<?php echo $taxonomy->name; ?>
			<span><?php echo $taxonomy->count;?></span>
		</h2>
		<p class="text-h1"><?php echo $taxonomy->description; ?></p>
		<img src="<?php echo getTaxonomyImageUrl(); ?>"/> 
	</main>
</aside>
<main>
	<section class="ui-main mt20">
		<?php  if(QUI_SlideFlag() &&  QUI_ListLayer()  == 0 ){ ?>
		<article class="ui-list-left left"> <?php }?>
		<div class="ui-list ui-special">
	        <ul> 
	           <?php global $i; $i = 0; if ( have_posts() ) : while ( have_posts() ) : the_post();
                     set_query_var('i', $i);
                     get_template_part( 'temp/loopSpecial' ); 
                     $i++;endwhile; ?>
	        </ul>
	        <?php QUI_PageNavLink(); else: ?> 
	        <p>当前还没有文章！请先发布</p>
	        <?php endif; wp_reset_query();?>
	    </div> 
	     <?php  if(QUI_SlideFlag() &&  QUI_ListLayer()  == 0 ){ ?>
			</article>
			<aside class="ui-list-right mt20 right">
					<?php if (function_exists('dynamic_sidebar') && dynamic_sidebar('widget_list')) : endif;  ?> 
			</aside>
		<?php } ?>
	</section>
</main>
</article>