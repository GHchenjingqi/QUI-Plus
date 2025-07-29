<?php if(!QUI_IndexTop() && !QUI_IndexHot()) {?>
<section class="ui-title">置顶</section>
<?php } ?>
<div class="ui-list">
	<div class="list-box">
	    <ul> 
	    <?php   $sticky = get_option('sticky_posts');
				if(empty($sticky)){
					$sticky = [0];
				}
                rsort( $sticky );
                query_posts( array( 'post__in' => $sticky,  'caller_get_posts' => 1 ,'orderby' => 'modified') );
	        	global $i;  $i = 0;
	             // 主循环
	        if ( have_posts() ) : while ( have_posts() ) : the_post();
	            set_query_var('i', $i);
	            get_template_part( 'temp/loop' ); 
	             $i++;
	        endwhile; ?>
	    </ul>
	</div>
	<?php QUI_PageNavLink(); else: ?> 
	 <p>当前置顶推荐文章不足！请置顶推荐文章</p>
	<?php endif; wp_reset_query();?>
</div> 