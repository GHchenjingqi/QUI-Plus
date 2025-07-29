<li>
		<?php if(QUI_ImageHidden()){
			$imgsrc = QUI_FirstImage() ? QUI_FirstImage() : "";
			if(! $imgsrc){
				$imgsrc = QUIMedia(QUI_ListDefaultImg(),'url') ? QUIMedia(QUI_ListDefaultImg(),'url') : ''.get_template_directory_uri().'/static/img/default_img.jpg';
			}
			if( QUI_ImageShowNumber() == 1 ){ ?>
		<div class="list-image">
			<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>" target="_blank">
					<img src="<?php echo $imgsrc; ?>"  loading="lazy" alt="<?php the_title(); ?>">
	       	</a>
		</div>
		<?php } }?>
		<div class="list-text">
			<div class="list-tit">
	            <a class="text-h<?php echo QUI_TitleHidden(); ?>" href="<?php the_permalink(); ?>" title="<?php the_title(); ?>" target="_blank"><?php the_title(); ?></a>
	        </div>
	        <?php if(QUI_DesSwitcher()) {?>
	        <div class="list-des">
	        	<a class="text-h<?php echo QUI_DesHidden(); ?>" href="<?php the_permalink(); ?>" title="<?php the_title(); ?>" target="_blank">
	        	<?php echo get_the_excerpt(); ?>
	        	</a>
	        </div>
	        <?php } ?>
	        <?php if(QUI_ImageHidden() && QUI_ImageShowNumber() == 2 && QUI_ImageAllNumber() > 2) {?>
			<div class="list-auto-image">
				<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>" target="_blank">
					<?php   global $i;  $j = 1;
						foreach(QUI_GetThreeImage() as $value){
							if( $j < 4 ){
								echo "<img src=".$value." alt=''>";
						    	$j++;
							}
						}
					?> 
		       	</a>
			</div>
			<?php } ?>
		
			<?php if(QUI_AuthorHidden() || QUI_TimeHidden() || QUI_ViewHidden() || QUI_ComHidden() ) {?>	
	        <div class="list-cell">
	        	<?php if(QUI_AuthorHidden()) {?>
	        	<div class="list-cell-author"><?php echo get_avatar( get_the_author_email(), '24' );?><?php echo get_the_author(); ?></div>
	        	<?php } if (QUI_TimeHidden() || QUI_ViewHidden() || QUI_ComHidden()) { ?>
	        		<?php if(QUI_ViewHidden() ) {?><span class="ml20 ui-pc"><?php QUI_Views('', '阅读'); ?></span>
	        		<?php } if(QUI_ComHidden()) {?><span class="ml20 ui-pc"><?php echo  QUI_CommentsNumer($post->ID)."评论";?></span>
		            <?php } if(QUI_TimeHidden()) {?><time class="ml20"><?php echo QUI_GetFormatTime(QUI_TimeFormat());?></time>	<?php } ?>
	        	<?php } ?>
				<?php if(QUI_ClassHidden()) {?>
				<span class="list-class ml20"><?php the_category(' ');?></span>
				<?php }?>
				<?php if (QUI_TagHidden()) { if(get_the_tag_list()) { echo get_the_tag_list('<div class="list-tags mla"><span>TAGS:</span>','','</div>');}  } ?>
	        </div>
	        <?php } ?>
		</div>
</li> 