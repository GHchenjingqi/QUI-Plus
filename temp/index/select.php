<?php 
	if(QUI_IndexSelected()){
	
	//获取当前页面的id
	$page_id = $wp_query->get_queried_object_id();
	//获取当前页面的别名 
	$slug = get_page( $page_id );
 	$name = $slug->post_name;
	if(( is_home() && !is_paged()) || $name=="top" || $name=="hot" ) { 
?>
<section class="ui-title">精选</section>
<section class="ui-select-index p-r mt20">
	 <ul>
	    <?php  $args=array(  'post_status' => 'publish', 'paged' => $paged);
	        query_posts($args); global $i;  $i = 0;
	        if ( have_posts() ) : while ( have_posts() ) : the_post();
	            set_query_var('i', $i); 
	            $post_ID=$post->ID;
				$post_thumbnail_id = get_post_thumbnail_id( $post_ID );
				$post_thumbnail_src = wp_get_attachment_image_src($post_thumbnail_id,'full');
	            if($post_thumbnail_src && $i<6){ 
	            	get_template_part( 'temp/loopSelect' );
	            ?>
	         <?php  $i++; }
	        endwhile; ?>
	    </ul>
	<?php endif; wp_reset_query();?>
</section>
 <?php } } ?>