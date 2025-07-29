<!--二级页面包屑 -->
<main>
<?php if(have_posts()) : ?><?php while(have_posts()) : the_post(); ?>
	<article class="bgff mt20 ui-radius ui-border">
	    <div class="ui-page-tag"><?php the_category(',') ?></div>   
	    <div class="ui-post "  id="post-<?php the_ID(); ?>">
	    	<h1><?php the_title(); ?></h1>
	        <div class="ui-post-info">
	        	<?php echo get_avatar( get_the_author_email(), '60' );?>
	        	<div>
		            <p class="author"><?php the_author(); ?></p>
		            <p>
		            	<time><?php the_time('Y年n月d日'); ?></time>
		            </p>
	        	</div>
		        <span class="mla"><?php echo QUI_CountWords();?></span>
	        </div>
	        <div class="ui-post-content">
	            <!-- 文章广告 start -->
	            <?php if( get_option("ad_single") ) {   ?><div class="article-gg"><?php echo get_option("ad_single");  ?></div><?php } ?>
	            <!-- 文章广告 end -->
	            <?php the_content(); ?> 
	        </div>
	    </div>
    </article>
<?php endwhile; ?>
<?php endif; ?>
</main>
