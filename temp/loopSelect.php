<li class="ui-select-<?php  echo $i;  ?>">
		<div class="ui-select-image">
			<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>" target="_blank">
				<?php  the_post_thumbnail();  ?>
	       	</a>
		</div>
		<div class="list-text">
	        <?php  if($i <= 2 ) { ?>
	        <div class="list-tit">
	            <a class="text-h2" href="<?php the_permalink(); ?>" title="<?php the_title(); ?>" target="_blank"><?php the_title(); ?></a>
	        </div>
	        <div class="list-des">
	        	<a class="text-h<?php  if($i == 0 ) { echo 3; }else{echo 3;} ?>" href="<?php the_permalink(); ?>" title="<?php the_title(); ?>" target="_blank">
	        	<?php echo get_the_excerpt(); ?>
	        	</a>
	        </div>
	        <?php }else{ ?>
	        <div class="list-tit">
	            <a class="text-h1" href="<?php the_permalink(); ?>" title="<?php the_title(); ?>" target="_blank"><?php the_title(); ?></a>
	        </div>
	        <div class="list-des">
	        	<a class="text-h1" href="<?php the_permalink(); ?>" title="<?php the_title(); ?>" target="_blank">
	        	<?php echo get_the_excerpt(); ?>
	        	</a>
	        </div>
	        <?php } ?>
	        <div class="list-cell">
	        	<div class="list-cell-author"><?php echo get_the_author(); ?></div>
	        	<div class="mla">
		         <time class="ml20"><?php echo QUI_GetFormatTime(QUI_TimeFormat());?></time>
	        	</div>
	        </div>
		</div>
</li> 