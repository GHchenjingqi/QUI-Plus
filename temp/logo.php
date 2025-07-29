<section class="ui-logo">
	<a href="<?php bloginfo('url'); ?>" rel="home" alt="<?php echo bloginfo( 'name' ); ?>" title="<?php echo bloginfo( 'name' ); ?>">
		<?php
		 if(QUIMedia(QUI_LOGO(),'url')){ ?><img src="<?php echo QUIMedia(QUI_LOGO(),'url');?>" alt="<?php echo bloginfo( 'name' ); ?>的网站Logo"/>
	    <?php }else{ ?><h1><?php echo bloginfo( 'name' ); ?></h1><?php } ?>
	</a>
</section>