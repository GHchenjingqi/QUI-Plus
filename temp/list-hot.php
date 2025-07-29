<?php if(!QUI_IndexTop() && !QUI_IndexHot()) {?>
<section class="ui-title">最热</section>
<?php } ?>
<div class="ui-list">
	<div class="list-box">
	    <ul> 
	    <?php query_posts(array(  'meta_key' => 'views',
                'orderby' => 'meta_value_num',
                'order' => 'DESC',
                'paged' => $paged
                )
            );global $i;  $i = 0;
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