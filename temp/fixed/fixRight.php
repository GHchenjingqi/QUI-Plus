<?php if( !is_page()){ ?>
<aside class="ui-fixed-right ui-radius p-r">
	<ol>
		<?php if(QUI_LoginShow()){ ?>
		<li class="p-r">
			<a href="/wp-admin/"><img src="<?php echo QUI_TempUrl().'/svg/icon_user.svg'; ?>" alt="用户登录"/></a>
			<div class="p-box bgff ui-radius text-left" style="width: 100px;">
				<div class="p-item" style="font-size:14px">登录入口</div>
			</div>
		</li>
		 <?php } ?>
		<?php if(QUI_Phone() &&  QUI_QQ ()) { ?>
		<li class="p-r hand">
			<a><img src="<?php echo QUI_TempUrl().'/svg/icon_ct.svg'; ?>" alt="联系站长"/></a>
			<div class="p-box bgff ui-radius text-left" style="width: 190px;">
				<?php if(QUI_Phone()) { ?>
				<div class="p-item">TEL：<?php echo QUI_Phone();?></div>
				<?php } if(QUI_QQ()) { ?>
				<div class="p-item">QQ：<?php echo QUI_QQ();?></div>
				<?php } ?>
			</div>
		</li>
		<?php } ?>
		<?php if( QUI_QQCode() || QUI_WXCode()){ ?>
		<li class="p-r hand">
			<a><img src="<?php echo QUI_TempUrl().'/svg/icon_ewm.svg'; ?>" alt="加群二维码"/></a>
			<div class="p-box bgff ui-radius" style="width: 140px;top: 0;">
				<?php if( QUI_QQCode() &&  count(QUI_QQCode())>0){ 
		          foreach (QUI_QQCode() as $key => $value){
			          	$ban = $value['set-ercodeimg'];
						$link = $value['set-key'];
						$URL =  QUIMedia($ban,'url');//图片
						$TEXT = $link ? $link :'QQ二维码';//图片描述
						if($URL){
		        ?>
				<div class="p-item text-center">
					<img src="<?php echo $URL;?>" alt="<?php echo $TEXT;?>二维码"/>
					<p><?php echo $TEXT;?></p>
				</div>
				<?php  } } }
				if( QUI_WXCode() &&  count(QUI_WXCode())>0){ 
		          foreach (QUI_WXCode() as $key => $value){
			          	$ban = $value['set-ercodeimg'];
						$link = $value['set-key'];
						$URL =  QUIMedia($ban,'url');//图片
						$TEXT = $link ? $link :'微信二维码';//图片描述
						if($URL){
		        ?>
				<div class="p-item text-center">
					<img src="<?php echo $URL;?>" alt="<?php echo $TEXT;?>二维码"/>
					<p><?php echo $TEXT;?></p>
				</div>
				<?php } } } ?>
			</div>
		</li>
		<?php } ?>
		<li class="p-r hide" id="go-top-link">
			<a><img src="<?php echo QUI_TempUrl().'/svg/icon_top.svg'; ?>" alt="返回顶部"/></a>
		</li>
	</ol>
	
</aside>
<?php }?>