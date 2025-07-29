<!--自定义文章类型分类模板-->
<?php
 $taxonomy = get_queried_object();
?>
<article class="flex-1">
<aside class="ui-class ">
		<h2>
			<?php echo get_the_archive_title('',false); ?>
			<?php echo $taxonomy->name; ?>
		</h2>
		<img src="<?php echo getTaxonomyImageUrl(); ?>"/> 
</aside>
<main>
	<section class="ui-series bgff mt20  ui-radius ui-border">
		<div class="ui-series-item">
			<b>专题分类：</b>
			<p>
			<?php
				$terms = get_terms( 'special',array(  'orderby' => 'count', ) );
				foreach ($terms as $item):
			?>
			<a href="<?php echo get_term_link($item);?>" title="<?php  echo $item->name; ?>" >
				<?php echo $item->name; ?>
			</a>
			<?php endforeach;?>
			</p>
		</div>
	</section>
	<section class="ui-main mt20">
		<?php  if(QUI_SlideFlag() &&  QUI_ListLayer()  == 0 ){ ?>
			<article class="ui-list-left left">
		<?php }?>
		<div class="ui-list">
	        <div class="list-box"> 
	            <ul> 
	           <?php global $i;
                        $i = 0;
                        // 主循环
                        if ( have_posts() ) : while ( have_posts() ) : the_post();
                            set_query_var('i', $i);
                           get_template_part( 'temp/loop' ); 
                        $i++;
                        endwhile; ?>
	            </ul>
	        </div>
	        <?php QUI_PageNavLink(); else: ?> 
	        <p>当前还没有文章！请先发布</p>
	        <?php endif; wp_reset_query();?>
	    </div> 
	    <?php  if(QUI_SlideFlag() &&  QUI_ListLayer()  == 0 ){ ?>
				</article>
				<aside class="ui-list-right mt20 right">
					<?php if (function_exists('dynamic_sidebar') && dynamic_sidebar('widget_list')) : endif;  ?> 
				</aside>
		<?php }?>
	</section>
</main>
</article>
