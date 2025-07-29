<?php if(QUI_BannerFlag() && QUI_Banner() &&  count(QUI_Banner())>0){ ?>
	<!--QUI_BannerStyle:1 全屏三列 2，全屏单列，3 正常显示-->
	<?php if(QUI_BannerStyle() ==1){
		get_template_part( 'temp/banner/all-screen-banner' ); 
	}else{ ?>
		<?php if(QUI_BannerStyle() == 3){ echo "<main>"; } 
		$h = QUI_BannerHeight();
		if(! $h ){
		  $h = 360;
		}
		?>
		<section class="ui-banner <?php if(QUI_BannerStyle() == 3){ echo "banner3 mt20"; } if(QUI_BannerStyle() == 2){ echo "mt20"; }  ?>" style="height:<?php echo $h.'px' ?>">
		<div class="swiper-container" id="banner<?php echo QUI_BannerStyle(); ?>">
		      <div class="swiper-wrapper">
		        <?php 
		          foreach (QUI_Banner() as $key => $value){
						$ban = $value['set-bannerImg'];
						$link = $value['set-bannerLink'];
						$URL =  QUIMedia($ban,'url');//图片
						$LINK = QUIMedia($link,'url');//图片链接
						$TEXT = QUIMedia($link,'text');//图片描述
						if($URL){
		        ?>
		          <div class="swiper-slide" style="width: 1200px !important;overflow: hidden;border-radius: <?php echo QUI_BannerRadius().'px'; ?>;">
		                <a href="<?php echo $LINK;?>" target="_blank">
		                    <img src="<?php echo $URL;?>" alt="<?php echo $TEXT;?>">
		                    <?php if($TEXT) {?>
		                    <div class="banner-tit"><span class="text-h2"><?php echo $TEXT;?></span></div>
		                    <?php }?>
		                </a>
		          </div>
		        <?php } }?>
		      </div>
		       <?php if(QUI_BannerStyle() == 2){  ?>
		      <div class="swiper-button-next"></div>
		      <div class="swiper-button-prev"></div>
		      <?php  } ?>
		      <?php if(QUI_BannerStyle() == 3){  ?>
		      <div class="swiper-pagination"></div>
		      <?php  } ?>
		</div>
		</section>
	<?php if(QUI_BannerStyle() == 3){ echo "</main>"; } ?>
<script>
    var swiper1 = new Swiper('#banner2', {
        autoplay:3000,
				loop:true,
				loopedSlides:3,
				spaceBetween:30,
				centeredSlides:true,
				slidesPerView : 'auto',
		    nextButton: '#banner1 .swiper-button-next',
		    prevButton: '#banner1 .swiper-button-prev',
			
    }); 
    var swiper2 = new Swiper('#banner3', {
                slidesPerView: '1',
                autoHeight: true,
                autoplay: {
                  delay: 4000,
                  disableOnInteraction: false,
                },
                navigation: { 
                    nextEl: '.swiper-button-next',
                    prevEl: '.swiper-button-prev',
                },
                pagination: {
                  el: '#banner3 .swiper-pagination',
                  dynamicBullets: false,
                  clickable: true,
                },
                effect : 'slide',
                loop: true,
                zoom: true,
                lazy: true
    }); 
</script>
<?php }  } ?>
<!-- 移动公告 -->
<?php get_template_part('/temp/welcomeWap');?>