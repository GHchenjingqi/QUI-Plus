<div class="pre col2  bgff ui-border ui-radius">
    <?php $prev_post = get_previous_post();if ( ! empty( $prev_post ) ): ?>
	<img src="<?php echo QUI_TempUrl();?>/svg/icon_left.svg" alt=""/>
    <a class="text-h2" href="<?php echo get_permalink( $prev_post->ID ); ?>">
    <?php echo apply_filters( 'the_title', $prev_post->post_title ); ?>
    </a>
    <?php else: ?>
    <img class="op8" src="<?php echo QUI_TempUrl();?>/svg/icon_left.svg" alt=""/>
    <span>没有上一篇了</span>
    <?php endif;?>
</div>
<div class="next col2  bgff ui-border ui-radius">
    <?php $next_post = get_next_post();if(!empty($next_post)):?>
	<a class="text-h2" href="<?php echo get_permalink( $next_post->ID ); ?>">
	 <?php echo apply_filters( 'the_title', $next_post->post_title ); ?>
	</a>
    <img src="<?php echo QUI_TempUrl();?>/svg/icon_left.svg" alt=""/>
	<?php else: ?>
	<span>没有下一篇了</span>
    <img class="op8" src="<?php echo QUI_TempUrl();?>/svg/icon_left.svg" alt=""/>
	<?php endif;?>  
</div>