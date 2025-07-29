<?php 
	$imgsrc = QUI_FirstImage() ? QUI_FirstImage() : "";
	if(! $imgsrc){
		$imgsrc = QUIMedia(QUI_CardNoIMGDefault(),'url') ? QUIMedia(QUI_CardNoIMGDefault(),'url') : ''.get_template_directory_uri().'/static/img/default_img.jpg';
	}
	$num = 4;
	if(QUI_CardNum()){
		$num = QUI_CardNum();
	}
?>
<li class="ui-card  col<?php echo $num; ?>">
	<div class="card-image">
		<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>" target="_blank">
			<img src="<?php echo $imgsrc; ?>" loading="lazy" alt="<?php the_title(); ?>">
		</a>
		<?php if(QUI_ClassHidden()) {?>
		<div class="card-class">
			<?php the_category(' ');?>
		</div>
		<?php }?>
		<?php if(QUI_ViewHidden() || QUI_ComHidden() ) {?>
		<div class="card-view">
			<?php if(QUI_ViewHidden() ) {?> <span><?php QUI_Views('', '阅读'); ?></span>
			<?php }?>
			<?php if(QUI_ComHidden() ) {?>· <span><?php echo  QUI_CommentsNumer($post->ID)."评论";?><?php }?>
	    		 </div>
	    	<?php } ?>
	    </div>
	    <?php if(QUI_TitleHidden() || QUI_DesSwitcher() ) {?>	
		<div class="card-text">
			<?php if( QUI_TitleHidden() != 0) {?>
			<div class="card-tit  text-h<?php echo QUI_TitleHidden(); ?>">
	            <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>" target="_blank"><?php the_title(); ?></a>
	        </div>
	        <?php } ?>
			<?php if(QUI_DesSwitcher() && QUI_DesHidden() != 0) {?>
	        <a class="card-des mb10 text-h<?php echo QUI_DesHidden(); ?>" href="<?php the_permalink(); ?>" title="<?php the_title(); ?>" target="_blank">
	        	<?php echo get_the_excerpt(); ?>
	        </a>
	        <?php } ?>
		</div>
		 <?php } ?>
		<?php if(QUI_AuthorHidden() || QUI_TimeHidden() ) {?>	
	     <div class="card-cell">
	        	<?php if(QUI_AuthorHidden()) {?>
	        	<div class="card-cell-author"><?php echo get_avatar( get_the_author_email(), '24' );?><?php echo get_the_author(); ?></div>
	        	<?php } if (QUI_TimeHidden() ) { ?>
	        	<div class="mla">
		            <?php if(QUI_TimeHidden()) {?><time class="ml10"><?php echo QUI_GetFormatTime(QUI_TimeFormat());?></time>	<?php } ?>
	        	</div>
	        	<?php } ?>
	    </div>
	    <?php } ?>
	</li>