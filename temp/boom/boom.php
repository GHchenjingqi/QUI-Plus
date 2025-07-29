<?php if(QUI_BoomFlag()) {
	//弹窗样式：1黑透，2白透
	$boomStyle = QUI_BoomStyle();
	//弹窗是否显示
	$boomShow = false;
	//弹窗类型：1。纯图片弹窗，2.文字弹窗-无图，3.图文弹窗
	$boomType = QUI_BoomStatus();
	
	if(!$boomType){
		$boomType = 1;
	}
	$boomW = QUIMedia(QUI_BoomSize(),'width');
	if(!$boomW){
		$boomW = 500;
	}
	$boomH = QUIMedia(QUI_BoomSize(),'height');
	if(!$boomH){
		$boomH = 380;
	}
	//跳转链接及链接提示文字
	$boomIink = QUIMedia(QUI_BoomLink(),'url');
	$boomIinkTxt = QUIMedia(QUI_BoomLink(),'text');
	//纯图图片路径
	$boomImg =  QUIMedia(QUI_BoomImg(),'url');
	//文图图片路径
	$boomImg2 = QUIMedia(QUI_BoomImg2(),'url');
	//文案标题及文字内容
	$boomTitle =QUI_BoomTextTitle();
	$boomTxt = QUI_BoomText();
	//图片和文本有一个不为空就显示弹窗
	if( $boomType == 1 && $boomImg ){
		$boomShow = true;
	}else if( $boomType == 2 && ( $boomTitle || $boomTxt) ){
		$boomShow = true;
	}else if($boomType == 3 && $boomImg2 && $boomTxt ){
		$boomShow = true;
	}

	if(!$boomIinkTxt){
		$boomIinkTxt = '立即前往';
	}
	$boomIinkTarget = QUIMedia(QUI_BoomLink(),'target');
	if(!$boomIinkTarget){
		$boomIinkTarget = '_self';
	}
	if(!$boomImg){
		$boomImg = get_template_directory_uri().'/static/img/link.jpg';
	}
	$boomImgAlt = QUIMedia(QUI_BoomImg(),'title');
	$boomTimeStart = QUIMedia(QUI_BoomDate(),'from');
	$boomTimeEnd = QUIMedia(QUI_BoomDate(),'to');
	if( $boomShow ){
	?>
<section class="qui-boom ui-boom hide" style="background:<?php if($boomStyle==2) { echo 'rgba(255,255,255,.8)';}else{ echo 'rgba(0,0,0,.6)';} ?>">
	<div class="ui-boom-content ui-radius qui-boom-center  ui-shadow-default" style="width: <?php echo $boomW.'px' ?>;height: <?php echo $boomH.'px' ?>;padding:<?php if($boomType==3) { echo '.16rem';}else{echo '0';}?>;">
		<?php if($boomType == 1){ ?>
		<div class="ui-boom-img p-r ui-shadow-default">
			<a href="<?php echo $boomIink; ?>" title="<?php echo $boomImgAlt; ?>">
				<img src="<?php echo $boomImg; ?>" alt="<?php echo $boomImgAlt; ?>"/>
			</a>
			<div class="close-event" id="ui-boom-close">
				<img src="<?php echo QUI_TempUrl();?>svg/close.svg"/>
			</div>
		</div>
		<?php }elseif($boomType == 2) { ?>
		<div class="ui-boom-txt">
			<?php if($boomTitle){  ?>
			<h3><?php echo $boomTitle; ?></h3>
			<?php } ?>
			<?php if($boomTxt){ ?>
			<p><?php echo $boomTxt; ?></p>
			<?php } ?>
			<div class="pt20 text-center">
				<?php if($boomIink){ ?>
				<a href="<?php echo $boomIink; ?>" class="ui-button" target="<?php echo $boomIinkTarget; ?>" title="<?php echo $boomImgAlt; ?>"><?php echo $boomIinkTxt; ?></a>
				<?php } ?>
				<button type="close" id="ui-boom-close">我知道了</button>
			</div>
		</div>
		<?php }else{ ?>
		<div class="ui-boom-all p20">
			<img src="<?php echo $boomImg2; ?>" class="ui-radius"  alt="<?php echo $boomImgAlt; ?>"/>
			<p><?php echo $boomTxt; ?></p>
			<div class="pt20 text-center">
				<?php if($boomIink){ ?>
				<a href="<?php echo $boomIink; ?>" class="ui-button" target="<?php echo $boomIinkTarget; ?>" title="<?php echo $boomImgAlt; ?>"><?php echo $boomIinkTxt; ?></a>
				<?php } ?>
				<button type="close" id="ui-boom-close">我知道了</button>
			</div>
		</div>
		<?php } ?>
	</div>
</section>
<?php } } ?>
<script>
	let timestart= '<?= $boomTimeStart ?>';
	let timeend= '<?= $boomTimeEnd ?>';
</script> 