<?php if ('open' == $post->comment_status) { ?>
            <?php   $current_user = wp_get_current_user();   if ( 0 == $current_user->ID ) {   ?>
            	<p class="text-center cor99">请登录后发表评论</p>
            	<p class="text-center ui-comment-btn">
            		<a class="login-btn" href="<?php echo get_option('siteurl'); ?>/wp-login.php?redirect_to=<?php the_permalink(); ?>">登录</a>
            		<a href="<?php echo get_option('siteurl'); ?>/wp-login.php?action=register">注册</a>
            	</p>
            <?php  } else {  ?> 
                <form action="<?php echo get_option('siteurl'); ?>/wp-comments-post.php" method="post" id="commentform">
                <div class="p-r">
    				<textarea name="comment" id="comment" cols="60" rows="10" tabindex="4"></textarea>
    				<input name="submit" type="submit" id="submit" tabindex="5" value="提交留言" />
    				<input type="hidden" name="comment_post_ID" value="<?php echo $id; ?>" />
    			</div> 
		        <?php do_action('comment_form', $post->ID); ?> 
		        </form>
            <?php  } ?>  
    		<div class="comment-list">
    			<?php wp_list_comments(array('style'=>'div','avatar_size' => 40)); ?>
    		</div>
<?php  } wp_reset_query();  ?>
 