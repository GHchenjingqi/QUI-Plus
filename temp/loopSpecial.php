<?php 
	$imgsrc = QUI_FirstImage() ? QUI_FirstImage() : "";
	if(! $imgsrc){
		$imgsrc = QUIMedia(QUI_CardNoIMGDefault(),'url') ? QUIMedia(QUI_CardNoIMGDefault(),'url') : ''.get_template_directory_uri().'/static/img/default_img.jpg';
	}
?>
<li class="ui-special-item  col<?php echo QUI_CardNum(); ?>">
	<div class="special-image">
		<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>" target="_blank">
			<img src="<?php echo $imgsrc; ?>"  loading="lazy" alt="<?php the_title(); ?>">
		</a>
		<?php if(QUI_ViewHidden() ) {?>
		<div class="special-view">
			<?php if(QUI_ViewHidden() ) {?> <span><?php QUI_Views('', '阅读'); ?></span><?php }?>
	    </div>
	    <?php }?>
	 </div>	
	 <div class="special-text">
		<div class="special-tit  text-h2">
	       <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>" target="_blank"><?php the_title(); ?></a>
	    </div>
		<div class="special-des">
	        <a class="text-h2" href="<?php the_permalink(); ?>" title="<?php the_title(); ?>" target="_blank">
	        	<?php echo get_the_excerpt(); ?>
	        </a>
	    </div>
		<div class="list-cell">
				<div class="list-cell-author"><?php echo get_avatar( get_the_author_email(), '24' );?><?php echo get_the_author(); ?></div>
	        	<div class="ml20">
		         <time class="ml20"><?php echo QUI_GetFormatTime(QUI_TimeFormat());?></time>
	        	</div>
	     </div>
	 </div>
</li>