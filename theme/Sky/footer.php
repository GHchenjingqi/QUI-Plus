<?php get_template_part('/temp/fixed/fixRight');?>
<?php get_template_part('/temp/boom/boom');?>
<footer class="plr mt20">
	<main><?php if( QUI_LinkShow()){  ?>
		<!--友链-->
        <section class="ui-link mb30">
        	<div class="ui-link-title">友情链接:</div>
        	<div class="ui-link-list">
        		<?php wp_list_bookmarks('title_li=0&categorize=0&before=&nbsp&after=&nbsp;'); ?>
				<script>document.write(unescape("%3Ca%20href%3D%22http%3A//course.51qux.com%22%20target%3D%22_blank%22%3EQUI-Pure%u4E3B%u9898%3C/a%3E%20%3Ca%20href%3D%22/link%22%20target%3D%22_blank%22%3E%u7533%u8BF7%u53CB%u94FE%3C/a%3E%20"));</script>
			</div> 
        </section>  
        <?php } ?> 
		<section class="ui-footer">
			<div>
				<div>
					<span>QUI-<?php echo QUI_Theme(); ?>主题  &nbsp;&nbsp;&nbsp;&nbsp;	Wordpress Theme By：</span>
					<a target="_blank" href="https://51qux.com/"  target="_blank">QUX轻设计</a>
					<span>&</span>
					<a target="_blank" href="https://course.51qux.com/" target="_blank">七娃博客</a>
					<?php if( QUI_SEOSiteMap() ) { ?><a target="_blank" class="hide" href="<?php echo QUI_SEOSiteMap();?>">网站地图</a>  <?php  } ?>&nbsp;&nbsp;&nbsp;&nbsp;网站响应速度<?php timer_stop(1); ?>
				</div>
			</div>
			<div class="mla">
				<?php if(  QUI_ICP() ) { ?><a rel="nofollow" target="_blank" href="https://beian.miit.gov.cn/#/Integrated/index"><?php echo QUI_ICP();?> </a> &nbsp;&nbsp;&nbsp;&nbsp; <?php  } ?>
				<?php if(  QUI_GA() ) { ?><a rel="nofollow" target="_blank" href="http://www.beian.gov.cn/portal/registerSystemInfo?recordcode=<?php echo preg_replace('/([\x80-\xff]*)/i','',QUI_GA()); ?>">
						<img style="vertical-align:middle" title="公安备案" alt="公安备案" src="<?php echo bloginfo('template_url').'/static/img/icon_police.png';?>"/>
				<?php echo QUI_GA();?> </a> &nbsp;&nbsp;&nbsp;&nbsp; <?php  } ?>Copyright © <?php the_time('Y') ?> <?php bloginfo('name'); ?>  All Rights Reserved
			</div>
		</section>
		
	</main>
</footer>
</section>

<script src="<?php echo QUI_TempUrl().'static/main.js?id='.rand();?>"  type="module" charset="utf-8"></script>
<?php if(QUI_CodeCopy()){ ?>
<script src="<?php echo bloginfo('template_url').'/static/js/no-copy.js';?>" type="text/javascript" charset="utf-8"></script>
<?php } ?>
<?php if (QUI_SEOCount()) {  echo "<script>".QUI_SEOCount()."</script>";  }  ?>
<?php get_template_part('/temp/effect');?>
<?php wp_footer();?>
</body>
</html>