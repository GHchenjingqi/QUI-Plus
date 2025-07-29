<?php if(!QUI_IndexTop() && !QUI_IndexHot()) {?>
<section class="ui-title">最新</section>
<?php } ?>
<section class="ui-list">
	<section class="list-box">
	    <ul>
	    <?php  $args=array(  'post_status' => 'publish', 'paged' => $paged);
	        query_posts($args); global $i;  $i = 0;
	             // 主循环
	        if ( have_posts() ) : while ( have_posts() ) : the_post();
	            set_query_var('i', $i);
	            get_template_part( 'temp/loop' ); 
	             $i++;
	        endwhile; ?>
	    </ul>
	</section>
	<?php QUI_PageNavLink(); else: ?> 
	 <p>当前还没有文章！请先发布</p>
	<?php endif; wp_reset_query();?>
</section> 