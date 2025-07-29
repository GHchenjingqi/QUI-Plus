<?php
/*Mini archive模板*/
?>
<?php  if( is_category() || is_archive() || is_tag() || is_date() || is_year() || is_month() || is_day() ){?>
	<aside class="ui-class">
		<h2><?php if( is_tag() ){  echo single_cat_title('',false); }  if(is_archive()){ echo get_the_archive_title('',false); }?></h2>  
	</aside>
<main>
	<?php get_template_part('/temp/bread');?>
	<section class="ui-main mt20">
		<div class="ui-list padding bgff ui-radius ui-border">
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
	    
	</section>
    
</main>
<?php } ?>