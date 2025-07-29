<?php
/*Mini archive模板*/
?>
<?php  if( is_category() || is_archive() || is_tag() || is_date() || is_year() || is_month() || is_day() ){?>
<article class="flex-1">
<main>
    <?php if(is_category()  || is_tag() && !is_date()){ ?> 
    	<?php get_template_part('/temp/archive/class'); ?> 
    <?php } ?>
	<?php  if(QUI_SlideFlag() &&  QUI_ListLayer()  == 0 ){ ?>
		<article class="ui-list-left left">
	<?php }?>
	<section class="ui-main mt20">
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
				<aside class="ui-list-right right mt20">
					<?php if (function_exists('dynamic_sidebar') && dynamic_sidebar('widget_list')) : endif;  ?> 
				</aside>
		<?php }?>	
	</section>
</main>
</article>
<?php } ?>