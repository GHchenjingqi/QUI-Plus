<?php if(QUI_BannerFlag() && QUI_Banner() &&  count(QUI_Banner())>0){ 
  $h = QUI_BannerHeight();
  if(! $h ){
    $h = 540;
  }
  ?>
<section class="ui-banner overflow-hidden all-screen" style="height: <?php echo $h.'px' ?>">
<div class="swiper-container" id="banner2">
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
          <div class="swiper-slide p-r">
                <a href="<?php echo $LINK;?>" style="background-image:url('<?php echo $URL;?>')"   target="_blank"></a>
          </div>
        <?php } }?>
      </div>
      <div class="swiper-button-next"></div>
      <div class="swiper-button-prev"></div>
      <div class="swiper-pagination"></div>
</div>
</section>
<script>
    var swiper = new Swiper('#banner2', {
                slidesPerView: '1',
                autoHeight: true,
                autoplay: {
                  delay: 4000,
                  disableOnInteraction: false,
                },
                navigation: { 
                    nextEl: '#banner2 .swiper-button-next',
                    prevEl: '#banner2 .swiper-button-prev',
                },
                pagination: {
                  el: '#banner2 .swiper-pagination',
                  dynamicBullets: false,
                  clickable: true,
                },
                effect : 'slide',
                loop: true,
                zoom: true,
                lazy: true
    }); 
</script>
<?php } ?>