<?php if( QUI_TopImgFlag()){ 
	?> 
		<!--顶部图片-->
		<?php if(QUI_TopImg()){   if( count(QUI_TopImg()) == 1){ ?>
			<!--单个图片-->
			<aside class="ui-top-banner top-img hide p-r">
				 <?php 
			          foreach (QUI_TopImg() as $key => $value){
							$ban = $value['set-topImg'];
							$URL =  QUIMedia($ban,'url');//图片
							if(!$URL){
							$URL = ''.get_template_directory_uri().'/static/img/default_top1.jpg';
							}
			        ?>
			    <img  src="<?php echo $URL; ?>" alt="顶部广告" />
			    <?php }?>
			    <div class="top-close-icon">
					<img src="<?php echo QUI_TempUrl();?>svg/close_black.png"/>
				</div>
			</aside>
		<?php }else if(count(QUI_TopImg()) > 1){ ?>
			<!--多个图片-->
			<?php get_template_part( '/temp/banner/slider-top' );?>
		<?php } }else{ ?>
			<!--默认图片-->
			<aside class="ui-top-banner hide top-img p-r">
			    <img  src="<?php echo bloginfo('template_url'); ?>/static/img/default_top1.jpg" alt="顶部广告" />
			    <div class="top-close-icon">
					<img src="<?php echo QUI_TempUrl();?>svg/close_black.png"/>
				</div>
			</aside>
		<?php }?>
<?php }else{ ?>
<script>
let topimgFlag = "<?= QUI_TopImgFlag(); ?>";
if(topimgFlag=='0'){
	QUI.LocalStg.del('QUITopImgFlag');
}
</script>
<?php } ?>