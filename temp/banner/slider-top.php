<?php if(QUI_BannerFlag() &&  count(QUI_Banner())>0){ ?> 
<section class="top-img">
	<div class="swiper-container" id="top-banner">
	      <div class="swiper-wrapper">
	        <?php 
	        	foreach (QUI_TopImg() as $key => $value){
								$ban = $value['set-topImg'];
								$URL =  QUIMedia($ban,'url');//图片 
	        ?>
	          <div class="swiper-slide">
	              <img src="<?php echo $URL;?>" alt="">
	          </div>
	        <?php }?>
	      </div>
	</div>
	<div class="top-close-icon">
		<img src="<?php echo QUI_TempUrl();?>svg/close_black.png"/>
	</div>
</section>
<script>
    var topSwiper = new Swiper('#top-banner', {
      autoplay: {
          delay: 4000,
          disableOnInteraction: false,
      },
      effect : 'fade',
			fadeEffect: {
					crossFade: true,
			},
			loop: true,
    });
</script>
<?php } ?>