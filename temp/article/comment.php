<?php if(QUI_Theme() != 'Mini主题'){ ?>
<?php }?>
<?php if ('open' == $post->comment_status) { ?>
	<?php if(QUI_ArticleComment()) { ?> 
<div class="ui-comments mt20">
		<section class="ui-title">评论  <mark><?php if(QUI_CommentsNumer($post->ID)>0) echo QUI_CommentsNumer($post->ID); ?></mark></section>
       
        <!-- 评论 -->
        <?php comments_template(); ?>
</div>
<?php } } wp_reset_query();  ?>