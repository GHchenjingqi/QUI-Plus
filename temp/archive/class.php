<aside class="ui-class mt20 ui-radius ui-border">
		<?php if( is_tag() ){    ?>
		<h2 class="lh100"> 
			<?php echo single_tag_title('',false); ?>
			<span><?php  $tag = get_term_by( 'id', $tag_id, 'post_tag' ); _make_cat_compat( $tag );echo  $tag->count;?></span>
		</h2>
		<img src="<?php echo bloginfo('template_url'); ?>/static/img/default_img.jpg"/>
		<?php }  else if(is_category()){  ?>
		<h2>
			<?php echo get_the_archive_title('',false); ?>
			<span><?php global $wp_query; $cat_ID = get_query_var('cat');echo QUI_GetCategoryCount($cat_ID);?></span>
		</h2>
		<?php echo category_description(); ?>
		<img src="<?php echo getTaxonomyImageUrl(); ?>"/> 
		<?php }else{?>
			<h2 class="lh100"><?php echo get_the_archive_title('',false); ?></h2>
		<?php } ?>
</aside>