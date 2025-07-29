<!--二级页面包屑 -->
<article class="flex-1 <?php if(QUI_CodeCopy()) {echo "sel-no";}else{ echo "sel-auto";} ?>">
<main>
<?php get_template_part('/temp/bread');?>
<?php if(have_posts()) : ?><?php while(have_posts()) : the_post(); ?>
	<article class="bgff padding mt20 ui-radius ui-border p-r">
		<?php if(QUI_ArticleClass()){ ?>
	    <section class="ui-page-tag"><?php the_category('|') ?></section>
		<?php } ?>
	    <!--悬浮标题-->
        <?php 	if(QUI_TitleFix()){ get_template_part('/temp/article/titleFixed'); }?>
	    <section class="ui-post pt20"  id="post">
	    	<h1><?php the_title(); ?></h1>
	        <section class="ui-post-info">
	        	<?php echo get_avatar( get_the_author_email(), '60' );?>
	        	<div>
		            <p class="author"><?php the_author(); ?></p>
		            <p>
		            	<time><?php the_time('Y年n月d日'); ?></time>
		            	<span><?php echo "评论：" .QUI_CommentsNumer($post->ID);?></span>
		            	<span><?php QUI_Views('阅读：', ' 次'); ?></span>
		            </p>
	        	</div>
		        <div class="mla">
		        	<p><?php echo QUI_CountWords();?></p>
		        </div>
	        </section>
	        <section class="ui-post-content">
	            <?php the_content(); ?> 
	        </section>
	    </section>
	    <?php get_template_part('/temp/article/tag'); ?>
    </article>
   	<!--评论--> 
	<?php get_template_part('/temp/article/comment'); ?>
<?php endwhile; ?>
<?php endif; ?>
</main>
</article>
<?php 	if(QUI_TitleFix()){ ?>
<script src="<?php echo bloginfo('template_url'); ?>/static/js/article-fixed-title.js" type="text/javascript" charset="utf-8"></script>
<?php } ?> 