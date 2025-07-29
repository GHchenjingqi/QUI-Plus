<div class="bgff padding ui-radius ui-border p-r">
<?php   $current_user = wp_get_current_user();   if ( 0 == $current_user->ID ) {   ?>
    <p class="text-center cor99">请登录后发表评论</p>
    <p class="text-center ui-comment-btn">
        <a class="login-btn" href="<?php echo get_option('siteurl'); ?>/wp-login.php?redirect_to=<?php the_permalink(); ?>">登录</a>
        <a href="<?php echo get_option('siteurl'); ?>/wp-login.php?action=register">注册</a>
    </p>
<?php  } else {  ?> 
   <form action="<?php echo get_option('siteurl'); ?>/wp-comments-post.php" method="post" id="commentform">
        <div class="p-r ui-comment-form ">
        	<div class="ui-comment-user">
        		<a href="/user/?pd=info">
		            <?php global $current_user;wp_get_current_user();echo get_avatar( $current_user->user_email,48); ?>
		        </a> 
        	</div>
        	<div class="ui-comment-input">
        		<textarea name="comment" id="comment" placeholder="你想说什么？千万别发表情哦！" cols="60" rows="10" tabindex="1" onkeydown="if(event.ctrlKey&amp;&amp;event.keyCode==13){document.getElementById('submit').click();return false};"></textarea>
	    		<input type="hidden" name="comment_post_ID" value="<?php echo $id; ?>" />
	    		<input type="hidden" name="comment_parent" id="comment_parent" value="0">
        		<div class="ui-comment-subbox mt20">
        			<div class="smiley-box left p-r">
        				 <a href="javascript:;" id="comment-smiley" title="表情">
        				 	<img src="<?php echo QUI_TempUrl();?>/svg/mg.svg"/>
        				 </a>
        				 <?php echo get_template_part('plugs/smiley'); ?>
        			</div>
	    			<input name="submit" type="submit" class="right" id="submit" tabindex="5" value="留下足迹" />
        		</div>
        		
        	</div>
    	</div> 
		<?php do_action('comment_form', $post->ID); ?> 
	</form>
<?php  } ?>  
</div>
<?php if(QUI_CommentsNumer($post->ID)>0){ ?>
<div class="comment-list bgff padding ui-radius ui-border p-r  mt20">
    <?php wp_list_comments(array('style'=>'div','avatar_size' => 48)); ?>
</div>
<?php }else{ ?>
<div class="ui-comment-sofa">
	<div class="sofa text-center">
		<img src="<?php echo QUI_TempUrl().'/svg/shafa.svg'; ?>"/>
		<p class="cor999">还没人评论，抢沙发</p>
	</div>
</div>
<?php  } ?>  
<script type="text/javascript">
	$("#comment-smiley").click(function(){
		$(this).css("opacity",".1")
		$("#smiley").show()
	})
	$("#smiley").hover(function(){},function(){
		$("#smiley").hide()
	})
</script>
 