<?php if(QUI_WelcomeTip() && QUI_WelcomeFlag()) {?>
<section class="ui-pc ui-welcome  mla p-r">
	<img src="<?php echo QUI_TempUrl();?>/svg/icon_gg.svg" alt="QUI公告图片" />
	<div>
		<p><?php echo QUI_WelcomeTip(); ?></p>
	</div>
</section>
<?php } ?>